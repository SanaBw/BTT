<?php
include_once('connection.php');

$registerName=mysqli_real_escape_string($conn, ($_POST['register-name']));
$registerEmail=mysqli_real_escape_string($conn, ($_POST['register-email']));
$registerPhone=mysqli_real_escape_string($conn, ($_POST['register-phone']));
$registerPassword=password_hash(mysqli_real_escape_string($conn, ($_POST['register-password'])),PASSWORD_DEFAULT);
$status = 0;
$vals="";
$code = password_hash(date("Y-m-d h:i:sa") . $registerPassword,PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, email, phone, password, code, status)
VALUES ('$registerName', '$registerEmail', '$registerPhone','$registerPassword', '$code', '$status')";

$check = "SELECT * FROM `users` WHERE `name`='$registerName' AND email='$registerEmail'";
$result_check = mysqli_query($conn, $check); 


if (mysqli_num_rows($result_check) != 0) {    	  	
    $vals = "user";
} else {
    if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',  $registerEmail, $matches)){
        $vals = "email";
    } else {
        if (mysqli_query($conn, $sql)) {   
            //auth mail          
            $to=$registerEmail;
            $subject="Activation Code For BTT";
            $from = 'noreply@btt.com';
            $body='Please Click On This link <a href="https://localhost/tourist/logreg/activation.php?email='.$to.'&code='.$code.'"> ACTIVATE </a>to activate  your account.';
            $headers = "From:".$from;
            mail($to,$subject,$body,$headers);
            
            $vals = "success";

        } else {
            $vals = "error";
        }
    }

}

echo $vals;

?>
