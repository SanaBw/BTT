<?php
include_once('../logreg/connection.php');

$data=mysqli_real_escape_string($conn, ($_POST['washingMachine']));

echo $data."xxx ";

?>