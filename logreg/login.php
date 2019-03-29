<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include('connection.php');

$loginEmail=mysqli_real_escape_string($conn, ($_POST['login-email']));
$loginPassword=mysqli_real_escape_string($conn, ($_POST['login-password']));

$query = "select email, password, name, status from users where email='$loginEmail'";
$result = mysqli_query($conn, $query);
$vals="";


if(mysqli_num_rows($result) > 0){  
    $data = mysqli_fetch_assoc($result);
    
    if ($data['status']==0){
        $vals="status";
    } else if (password_verify($loginPassword,$data['password'])){
        $_SESSION['name'] = $data['name'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['loggedin'] = true;
        session_start();
        
        $vals="success";
    } else {
        $vals="password";
    }
   
} else{
    $vals="error";
} 

echo $vals;
?>