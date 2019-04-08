<?php
session_start();
$name=$_SESSION['name'];
$ID=$_SESSION['ID'];
$email=$_SESSION['email']; 
$phone=$_SESSION['phone'];

include('../logreg/connection.php');

$query = "select * from apartment where owner_ID='$ID'";
$result = mysqli_query($conn, $query);                                    

if ($result){
    foreach($result as $row) {                                     
        echo "<p>{$row['apartment_title']}<p>";
    }
} else {
    echo "error";
}                                       
?>