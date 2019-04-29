<?php
session_start();
$name=$_SESSION['name'];

include('../logreg/connection.php');
$id=$_POST['id'];
$startDate= $_POST['startDate'];
$endDate=$_POST['endDate'];


$query = "UPDATE vehicle
SET start_date='$startDate', end_date='$endDate'
WHERE ID= '$id' ";
$result = mysqli_query($conn, $query);                                    

if ($result){
  echo"success";
} else {
    echo "error";
}                                    
?>

