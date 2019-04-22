<?php
session_start();
$name=$_SESSION['name'];

include('../logreg/connection.php');
$id=$_POST['id'];


$query = "DELETE FROM apartment WHERE ID= '$id' ";
$result = mysqli_query($conn, $query);                                    

if ($result){
  echo"success";
} else {
    echo "error";
}                                    
?>

