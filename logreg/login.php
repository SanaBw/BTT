<?php
session_start();
include('connection.php');

$loginEmail=mysqli_real_escape_string($conn, ($_POST['login-email']));
$loginPassword=md5(mysqli_real_escape_string($conn, ($_POST['login-password'])));

$query = "select * from users where email='$loginEmail' and password='$loginPassword' and status=1";
$result = mysqli_query($conn, $query);
$vals="";


if(mysqli_num_rows($result) > 0){
    $data = mysql_fetch_assoc($query);
    $_SESSION['email'] = $data['email'];

    $vals="success";
} else{
    $vals="error";
} 

echo $vals;
?>