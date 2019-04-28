<?php
session_start();
include_once('../logreg/connection.php');

$apartmentTitle=mysqli_real_escape_string($conn, ($_POST['apartmentTitle']));
$ownerID = $_SESSION['ID'];

$address=mysqli_real_escape_string($conn, ($_POST['address']));

$city=mysqli_real_escape_string($conn, ($_POST['city']));
$size=mysqli_real_escape_string($conn, ($_POST['size']));
$size2=mysqli_real_escape_string($conn, ($_POST['size2']));
$rooms=mysqli_real_escape_string($conn, ($_POST['rooms']));

$floors=mysqli_real_escape_string($conn, ($_POST['floors']));
$heating=mysqli_real_escape_string($conn, ($_POST['heating']));
$floorType=mysqli_real_escape_string($conn, ($_POST['floorType']));
$priceE=mysqli_real_escape_string($conn, ($_POST['priceE']));
$priceE2=mysqli_real_escape_string($conn, ($_POST['priceE2']));
$pictures='0'; //=mysqli_real_escape_string($conn, ($_POST['pictures']));

$washingMachine=mysqli_real_escape_string($conn, ($_POST['washingMachine']));
$dryer=mysqli_real_escape_string($conn, ($_POST['dryer']));
$toiletPaper=mysqli_real_escape_string($conn, ($_POST['toiletPaper']));
$towels=mysqli_real_escape_string($conn, ($_POST['towels']));
$bidet=mysqli_real_escape_string($conn, ($_POST['bidet']));
$bathtub=mysqli_real_escape_string($conn, ($_POST['bathtub']));
$cabin=mysqli_real_escape_string($conn, ($_POST['cabin']));
$wc=mysqli_real_escape_string($conn, ($_POST['wc']));

$wardrobeOrCloset=mysqli_real_escape_string($conn, ($_POST['wardrobeOrCloset']));
$wardrobe=mysqli_real_escape_string($conn, ($_POST['wardrobe']));

$kitchenTable=mysqli_real_escape_string($conn, ($_POST['kitchenTable']));
$detergents=mysqli_real_escape_string($conn, ($_POST['detergents']));
$cookingPlate=mysqli_real_escape_string($conn, ($_POST['cookingPlate']));
$oven=mysqli_real_escape_string($conn, ($_POST['oven']));
$kitchenAccessories=mysqli_real_escape_string($conn, ($_POST['kitchenAccessories']));
$microwaveOven=mysqli_real_escape_string($conn, ($_POST['microwaveOven']));
$refrigerator=mysqli_real_escape_string($conn, ($_POST['refrigerator']));

$sofaBed=mysqli_real_escape_string($conn, ($_POST['sofaBed']));
$soundInsulation=mysqli_real_escape_string($conn, ($_POST['soundInsulation']));
$privateEntrance=mysqli_real_escape_string($conn, ($_POST['privateEntrance']));
$safe=mysqli_real_escape_string($conn, ($_POST['safe']));
$iron=mysqli_real_escape_string($conn, ($_POST['iron']));
$ironingBoard=mysqli_real_escape_string($conn, ($_POST['ironingBoard']));

$riverView=mysqli_real_escape_string($conn, ($_POST['riverView']));
$cityView=mysqli_real_escape_string($conn, ($_POST['cityView']));
$mountainView=mysqli_real_escape_string($conn, ($_POST['mountainView']));
$gardenView=mysqli_real_escape_string($conn, ($_POST['gardenView']));
$pets=mysqli_real_escape_string($conn, ($_POST['pets']));
$diningRoom=mysqli_real_escape_string($conn, ($_POST['diningRoom']));
$couch=mysqli_real_escape_string($conn, ($_POST['couch']));
$seatingArea=mysqli_real_escape_string($conn, ($_POST['seatingArea']));

$tv=mysqli_real_escape_string($conn, ($_POST['tv']));
$flatScreen=mysqli_real_escape_string($conn, ($_POST['flatScreen']));
$satellite=mysqli_real_escape_string($conn, ($_POST['satellite']));
$cable=mysqli_real_escape_string($conn, ($_POST['cable']));
$internet=mysqli_real_escape_string($conn, ($_POST['internet']));

$loweredWashbasin=mysqli_real_escape_string($conn, ($_POST['loweredWashbasin']));
$objectAdapted=mysqli_real_escape_string($conn, ($_POST['objectAdapted']));
$elevator=mysqli_real_escape_string($conn, ($_POST['elevator']));

$parking=mysqli_real_escape_string($conn, ($_POST['parking']));
$garage=mysqli_real_escape_string($conn, ($_POST['garage']));

$childrenProgram=mysqli_real_escape_string($conn, ($_POST['childrenProgram']));
$safetyForBabies=mysqli_real_escape_string($conn, ($_POST['safetyForBabies']));
$airConditioning=mysqli_real_escape_string($conn, ($_POST['airConditioning']));
$has_heating=mysqli_real_escape_string($conn, ($_POST['heatingCheck']));
$familyRoom=mysqli_real_escape_string($conn, ($_POST['familyRoom']));
$nonsmokingRoom=mysqli_real_escape_string($conn, ($_POST['nonsmokingRoom']));
$vals="";


$sql = "INSERT INTO apartment (apartment_title, owner_ID, address, city, size, size2, rooms, floors, heating, floor, price, price_offseason, image, washing_machine,dryer, toilet_paper, towels, bidet, bathtub,cabin, wc, wardrobe_or_closet, closet, kitchen_table, detergents, cooking_plate, oven, kitchen_accessories, microwave_oven, refrigerator, sofa_bed, sound_insulation, private_entrance, safe, iron, ironing_board, river_view, city_view, mountain_view, garden_view, pets, dining_room, couch, seating_area, tv, flat_screen, satellite, cable, internet, lowered_washbin, object_adapted, elevator, parking, garage, childrens_tv, safety_for_babies, ac, has_heating, family_room, nonsmoking_room) VALUES ('$apartmentTitle', '$ownerID', '$address', '$city', '$size', '$size2', '$rooms', '$floors', '$heating', '$floorType', '$priceE', '$priceE2', '$pictures', '$washingMachine', '$dryer', '$toiletPaper', '$towels', '$bidet', '$bathtub', '$cabin', '$wc', '$wardrobeOrCloset','$wardrobe','$kitchenTable','$detergents','$cookingPlate','$oven','$kitchenAccessories','$microwaveOven','$refrigerator','$sofaBed','$soundInsulation','$privateEntrance', '$safe','$iron','$ironingBoard','$riverView','$cityView','$mountainView','$gardenView','$pets','$diningRoom','$couch','$seatingArea', '$tv','$flatScreen','$satellite','$cable','$internet','$loweredWashbasin','$objectAdapted','$elevator','$parking','$garage', '$childrenProgram','$safetyForBabies','$airConditioning','$has_heating','$familyRoom','$nonsmokingRoom')";

if(mysqli_query($conn, $sql)){
    $vals= "success";
} else {
    $vals= "error";
}

echo $vals;

?>