<?php
session_start();
$name=$_SESSION['name'];
$ID=$_SESSION['ID'];
$email=$_SESSION['email']; 
$phone=$_SESSION['phone'];

include('../logreg/connection.php');

$query = "select * from vehicle where owner_ID='$ID'";
$result = mysqli_query($conn, $query);                                    

if ($result){
    foreach($result as $row) { 
        
        if ($row['start_date'] && $row['end_date']){
            $start_date = date('d-m-Y', strtotime($row['start_date']));
            $end_date = date('d-m-Y', strtotime($row['end_date']));
        } else {
            $start_date="";
            $end_date="";
        }

        echo "
        <div id={$row['ID']}>
        <h5>{$row['vehicle_brand']} - {$row['vehicle_model']}</h5>

        
        <h6> Available from '$start_date' to '$end_date'</h6>


        <input type='button' class='btn btn-success' onclick='dateModalVehicle' data-toggle='modal' data-target='#dateModalVehicle' style ='margin-left:5px;text-align:left; background:#18BC9C;float:left; left:5px;' value='Change Dates'>


        <form onsubmit='return deleteVehicle({$row['ID']})' method='post' style='margin-right:5px;text-align:center;'> 
        <input type='submit' style ='float:center; ' class='btn btn-danger' value='Delete'>
        </form>&nbsp;

        <p style='border-bottom: solid 1px black; width:55%'>   </p>

        &nbsp;

        <!-- Modal -->
<div class='modal fade' id='dateModalVehicle' tabindex='-1' role='dialog' aria-labelledby='dateModal' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLongTitle'>Pick dates</h5>       
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
      <form method='post' name='dateChanger' onsubmit='return changeDateVehicle({$row['ID']});'>
         Start Date <input type='date' name='startDateVehicle' id='startDateVehicle'><br><br>
         End Date <input type='date' name='endDateVehicle' id='endDateVehicle'>

         <div class='modal-footer'>

        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
        <button type='submit' class='btn btn-primary'>Save changes</button>        
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
</div>
";
?>


<?php
    }
} else {
    echo "error";
}                                       
?>
