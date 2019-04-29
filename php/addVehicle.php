<?php
session_start();
include_once('../logreg/connection.php');

$ownerID = $_SESSION['ID'];

$vehicleBrand=mysqli_real_escape_string($conn, ($_POST['vehicleBrand']));
$vehicleModel=mysqli_real_escape_string($conn, ($_POST['vehicleModel']));
$vehicleYear=mysqli_real_escape_string($conn, ($_POST['vehicleYear']));
$seats=mysqli_real_escape_string($conn, ($_POST['seats']));
$maxPeople=mysqli_real_escape_string($conn, ($_POST['maxPeople']));
$maxBags=mysqli_real_escape_string($conn, ($_POST['maxBags']));
$ac=mysqli_real_escape_string($conn, ($_POST['ac']));
$babySeat=mysqli_real_escape_string($conn, ($_POST['babySeat']));
$insurance=mysqli_real_escape_string($conn, ($_POST['insurance']));
$theftProtection=mysqli_real_escape_string($conn, ($_POST['theftProtection']));
$driver=mysqli_real_escape_string($conn, ($_POST['driver']));
$address=mysqli_real_escape_string($conn, ($_POST['address']));
$priceDriver=mysqli_real_escape_string($conn, ($_POST['priceDriver']));
$price=mysqli_real_escape_string($conn, ($_POST['price']));
$price2=mysqli_real_escape_string($conn, ($_POST['price2']));


$vals="";


$sql = "INSERT INTO vehicle (owner_ID, vehicle_brand, vehicle_model, vehicle_year, seats, max_people, max_bags, ac, baby_seat, insurance, theft_protection, driver, address, price_driver, price_season, price_off_season) VALUES ('$ownerID', '$vehicleBrand','$vehicleModel', '$vehicleYear', '$seats','$maxPeople','$maxBags','$ac','$babySeat','$insurance','$theftProtection','$driver','$address','$priceDriver','$price','$price2')";

if(mysqli_query($conn, $sql)){
    $vals= "success";
} else {
    $vals= "error";
}

echo $vals;

?>