<?php
include_once('connection.php');
 
if(isset($_GET['code'])){
    $code = $_GET['code'];
    $email = $_GET['email'];
    $query = "update users set status='1' where email='$email' and code='$code'";
    if(mysqli_query($conn, $query)){
        header("Location:https://localhost/tourist");
        exit();
    }    
}
?>

