<?php
session_start();
include_once('../logreg/connection.php');

$ownerID = $_SESSION['ID'];

$hotelTitle=mysqli_real_escape_string($conn, ($_POST['hotelTitle']));
$stars=mysqli_real_escape_string($conn, ($_POST['stars']));
$hotelAddress=mysqli_real_escape_string($conn, ($_POST['hotelAddress']));
$city=mysqli_real_escape_string($conn, ($_POST['city']));
$zip=mysqli_real_escape_string($conn, ($_POST['zip']));
$country=mysqli_real_escape_string($conn, ($_POST['country']));
$mainBedType=mysqli_real_escape_string($conn, ($_POST['mainBedType']));
$secBedType=mysqli_real_escape_string($conn, ($_POST['secBedType']));
$numberOfMainBeds=mysqli_real_escape_string($conn, ($_POST['numberOfMainBeds']));
$numberOfSecBeds=mysqli_real_escape_string($conn, ($_POST['numberOfSecBeds']));
$numberOfPeople=mysqli_real_escape_string($conn, ($_POST['numberOfPeople']));
$typeOfRoom=mysqli_real_escape_string($conn, ($_POST['typeOfRoom']));
$smoking=mysqli_real_escape_string($conn, ($_POST['smoking']));
$numberOfRooms=mysqli_real_escape_string($conn, ($_POST['numberOfRooms']));
$sizeOfRoom=mysqli_real_escape_string($conn, ($_POST['sizeOfRoom']));
$hotelPrice=mysqli_real_escape_string($conn, ($_POST['hotelPrice']));
$discount=mysqli_real_escape_string($conn, ($_POST['discount']));
$discountValue=mysqli_real_escape_string($conn, ($_POST['discountValue']));
$discountUnit=mysqli_real_escape_string($conn, ($_POST['discountUnit']));
$internet=mysqli_real_escape_string($conn, ($_POST['internet']));
$internetAvailable=mysqli_real_escape_string($conn, ($_POST['internetAvailable']));
$internetType=mysqli_real_escape_string($conn, ($_POST['internetType']));
$internetPrice=mysqli_real_escape_string($conn, ($_POST['internetPrice']));
$parking=mysqli_real_escape_string($conn, ($_POST['parking']));
$parkingType=mysqli_real_escape_string($conn, ($_POST['parkingType']));
$reservationNeeded=mysqli_real_escape_string($conn, ($_POST['reservationNeeded']));
$parkingPrice=mysqli_real_escape_string($conn, ($_POST['parkingPrice']));
$breakfast=mysqli_real_escape_string($conn, ($_POST['breakfast']));
$breakfastType=mysqli_real_escape_string($conn, ($_POST['breakfastType']));
$breakfastPrice=mysqli_real_escape_string($conn, ($_POST['breakfastPrice']));
$bhs=mysqli_real_escape_string($conn, ($_POST['bhs']));
$english=mysqli_real_escape_string($conn, ($_POST['english']));
$german=mysqli_real_escape_string($conn, ($_POST['german']));
$turkish=mysqli_real_escape_string($conn, ($_POST['turkish']));
$arabian=mysqli_real_escape_string($conn, ($_POST['arabian']));
$swedish=mysqli_real_escape_string($conn, ($_POST['swedish']));
$other=mysqli_real_escape_string($conn, ($_POST['other']));
$languagesOther=mysqli_real_escape_string($conn, ($_POST['languagesOther']));
$restaurant=mysqli_real_escape_string($conn, ($_POST['restaurant']));
$roomService=mysqli_real_escape_string($conn, ($_POST['roomService']));
$bar=mysqli_real_escape_string($conn, ($_POST['bar']));
$reception247=mysqli_real_escape_string($conn, ($_POST['reception247']));
$sauna=mysqli_real_escape_string($conn, ($_POST['sauna']));
$fitnessCenter=mysqli_real_escape_string($conn, ($_POST['fitnessCenter']));
$yard=mysqli_real_escape_string($conn, ($_POST['yard']));
$terrace=mysqli_real_escape_string($conn, ($_POST['terrace']));
$nonsmokingRooms=mysqli_real_escape_string($conn, ($_POST['nonsmokingRooms']));
$airportRide=mysqli_real_escape_string($conn, ($_POST['airportRide']));
$skiing=mysqli_real_escape_string($conn, ($_POST['skiing']));
$familyRooms=mysqli_real_escape_string($conn, ($_POST['familyRooms']));
$spaCenter=mysqli_real_escape_string($conn, ($_POST['spaCenter']));
$jacuzzi=mysqli_real_escape_string($conn, ($_POST['jacuzzi']));
$ac=mysqli_real_escape_string($conn, ($_POST['ac']));
$waterPark=mysqli_real_escape_string($conn, ($_POST['waterPark']));
$pool=mysqli_real_escape_string($conn, ($_POST['pool']));
$beach=mysqli_real_escape_string($conn, ($_POST['beach']));
$clothesHanger=mysqli_real_escape_string($conn, ($_POST['clothesHanger']));
$clothesDryer=mysqli_real_escape_string($conn, ($_POST['clothesDryer']));
$sofa=mysqli_real_escape_string($conn, ($_POST['sofa']));
$closet=mysqli_real_escape_string($conn, ($_POST['closet']));
$carpet=mysqli_real_escape_string($conn, ($_POST['carpet']));
$longBed=mysqli_real_escape_string($conn, ($_POST['longBed']));
$roomFan=mysqli_real_escape_string($conn, ($_POST['roomFan']));
$fireplace=mysqli_real_escape_string($conn, ($_POST['fireplace']));
$mergedRooms=mysqli_real_escape_string($conn, ($_POST['mergedRooms']));
$iron=mysqli_real_escape_string($conn, ($_POST['iron']));
$bugNet=mysqli_real_escape_string($conn, ($_POST['bugNet']));
$privateEntrance=mysqli_real_escape_string($conn, ($_POST['privateEntrance']));
$safe=mysqli_real_escape_string($conn, ($_POST['safe']));
$soundIsolation=mysqli_real_escape_string($conn, ($_POST['soundIsolation']));
$sittingRoom=mysqli_real_escape_string($conn, ($_POST['sittingRoom']));
$pavedMarbleFloor=mysqli_real_escape_string($conn, ($_POST['pavedMarbleFloor']));
$woodenFloor=mysqli_real_escape_string($conn, ($_POST['woodenFloor']));
$workingDesk=mysqli_real_escape_string($conn, ($_POST['workingDesk']));
$toiletPaper=mysqli_real_escape_string($conn, ($_POST['toiletPaper']));
$bath=mysqli_real_escape_string($conn, ($_POST['bath']));
$bidet=mysqli_real_escape_string($conn, ($_POST['bidet']));
$showerCabin=mysqli_real_escape_string($conn, ($_POST['showerCabin']));
$bathrobe=mysqli_real_escape_string($conn, ($_POST['bathrobe']));
$privateBathroom=mysqli_real_escape_string($conn, ($_POST['privateBathroom']));
$freeBathroomSupplies=mysqli_real_escape_string($conn, ($_POST['freeBathroomSupplies']));
$fan=mysqli_real_escape_string($conn, ($_POST['fan']));
$hydromassagingBath=mysqli_real_escape_string($conn, ($_POST['hydromassagingBath']));
$sharedBathroom=mysqli_real_escape_string($conn, ($_POST['sharedBathroom']));
$slippers=mysqli_real_escape_string($conn, ($_POST['slippers']));
$wc=mysqli_real_escape_string($conn, ($_POST['wc']));
$computer=mysqli_real_escape_string($conn, ($_POST['computer']));
$nitendoWii=mysqli_real_escape_string($conn, ($_POST['nitendoWii']));
$ps2=mysqli_real_escape_string($conn, ($_POST['ps2']));
$ps3=mysqli_real_escape_string($conn, ($_POST['ps3']));
$xbox360=mysqli_real_escape_string($conn, ($_POST['xbox360']));
$laptop=mysqli_real_escape_string($conn, ($_POST['laptop']));
$ipad=mysqli_real_escape_string($conn, ($_POST['ipad']));
$cableTv=mysqli_real_escape_string($conn, ($_POST['cableTv']));
$cdDvdReader=mysqli_real_escape_string($conn, ($_POST['cdDvdReader']));
$faxMachine=mysqli_real_escape_string($conn, ($_POST['faxMachine']));
$flatScreenTv=mysqli_real_escape_string($conn, ($_POST['flatScreenTv']));
$payPerViewChannels=mysqli_real_escape_string($conn, ($_POST['payPerViewChannels']));
$radio=mysqli_real_escape_string($conn, ($_POST['radio']));
$satelliteTv=mysqli_real_escape_string($conn, ($_POST['satelliteTv']));
$phone=mysqli_real_escape_string($conn, ($_POST['phone']));
$tv=mysqli_real_escape_string($conn, ($_POST['tv']));
$bluRayReader=mysqli_real_escape_string($conn, ($_POST['bluRayReader']));
$diningRoom=mysqli_real_escape_string($conn, ($_POST['diningRoom']));
$barbecue=mysqli_real_escape_string($conn, ($_POST['barbecue']));
$cookingPlates=mysqli_real_escape_string($conn, ($_POST['cookingPlates']));
$toaster=mysqli_real_escape_string($conn, ($_POST['toaster']));
$kettle=mysqli_real_escape_string($conn, ($_POST['kettle']));
$outsideDinningSpace=mysqli_real_escape_string($conn, ($_POST['outsideDinningSpace']));
$minibar=mysqli_real_escape_string($conn, ($_POST['minibar']));
$kitchenware=mysqli_real_escape_string($conn, ($_POST['kitchenware']));
$microwave=mysqli_real_escape_string($conn, ($_POST['microwave']));
$fridge=mysqli_real_escape_string($conn, ($_POST['fridge']));
$coffeeMachine=mysqli_real_escape_string($conn, ($_POST['coffeeMachine']));
$childrenSeats=mysqli_real_escape_string($conn, ($_POST['childrenSeats']));
$alarm=mysqli_real_escape_string($conn, ($_POST['alarm']));
$roomWakeUpService=mysqli_real_escape_string($conn, ($_POST['roomWakeUpService']));
$bedclothes=mysqli_real_escape_string($conn, ($_POST['bedclothes']));
$towels=mysqli_real_escape_string($conn, ($_POST['towels']));
$balcony=mysqli_real_escape_string($conn, ($_POST['balcony']));
$pavedYard=mysqli_real_escape_string($conn, ($_POST['pavedYard']));
$cityView=mysqli_real_escape_string($conn, ($_POST['cityView']));
$gardenView=mysqli_real_escape_string($conn, ($_POST['gardenView']));
$lakeView=mysqli_real_escape_string($conn, ($_POST['lakeView']));
$mountainView=mysqli_real_escape_string($conn, ($_POST['mountainView']));
$poolView=mysqli_real_escape_string($conn, ($_POST['poolView']));
$riverView=mysqli_real_escape_string($conn, ($_POST['riverView']));
$seaView=mysqli_real_escape_string($conn, ($_POST['seaView']));
$roomIsOnTheGroundFloor=mysqli_real_escape_string($conn, ($_POST['roomIsOnTheGroundFloor']));
$accessibleToPeopleInWheelchairs=mysqli_real_escape_string($conn, ($_POST['accessibleToPeopleInWheelchairs']));
$upperFloorsAccessibleWithElevators=mysqli_real_escape_string($conn, ($_POST['upperFloorsAccessibleWithElevators']));
$toiletWithHandles=mysqli_real_escape_string($conn, ($_POST['toiletWithHandles']));
$safeForBabies=mysqli_real_escape_string($conn, ($_POST['safeForBabies']));
$games=mysqli_real_escape_string($conn, ($_POST['games']));
$booksDvdsOrMusic=mysqli_real_escape_string($conn, ($_POST['booksDvdsOrMusic']));
$socketProtection=mysqli_real_escape_string($conn, ($_POST['socketProtection']));
$pets=mysqli_real_escape_string($conn, ($_POST['pets']));


$sql = "INSERT INTO 
hotel (owner_ID, hotel_title, stars, hotel_address, city, zip, country, main_bed_type, sec_bed_type, number_of_main_beds, number_of_sec_beds, number_of_people, type_of_room, smoking, 
number_of_rooms, size_of_room, hotel_price, discount, discount_value, discountUnit, internet, internet_available, internet_type, internet_price, parking, parking_type, reservation_needed, 
parking_price, breakfast, breakfast_type, breakfastPrice, bhs, english, german, turkish, arabian, swedish, other, languages_other, restaurant, room_service, bar, 
reception247, sauna, fitness_center, yard, terrace, nonsmoking_rooms, airport_ride, skiing, family_rooms, spa_center, jacuzzi, ac, water_park, pool, beach, clothes_hanger, 
clothes_dryer, sofa, closet, carpet, long_bed, room_fan, fireplace, merged_rooms, iron, bug_net, private_entrance, safe, sound_isolation, sitting_room, paved_marble_floor, 
wooden_floor, working_desk, toilet_paper, bath, bidet, shower_cabin, bathrobe, private_bathroom, free_bathroom_supplies, fan, hydromassaging_bath, shared_bathroom, slippers, wc, 
computer, nitendo_wii, ps2, ps3, xbox360, laptop, ipad, cable_tv, cd_dvd_reader, fax_machine, flat_screen_tv, pay_per_view_channels, radio, satellite_tv, phone, tv, blu_ray_reader, 
dining_room, barbecue, cooking_plates, toaster, kettle, outside_dinning_space, minibar, kitchenware, microwave, fridge, coffee_machine, children_seats, alarm, room_wake_up_service, 
bedclothes, towels, balcony, paved_yard, city_view, garden_view, lake_view, mountain_view, pool_view, river_view, sea_view, room_is_on_the_ground_floor, accessible_to_people_in_wheelchairs, upper_floors_accessible_with_elevators, toilet_with_handles, safe_for_babies, games, books_dvds_or_music, socket_protection, pets) 
VALUES ('$ownerID', '$hotelTitle','$stars','$hotelAddress','$city','$zip','$country','$mainBedType','$secBedType','$numberOfMainBeds','$numberOfSecBeds','$numberOfPeople','$typeOfRoom','$smoking', '$numberOfRooms','$sizeOfRoom','$hotelPrice','$discount','$discountValue','$discountUnit','$internet','$internetAvailable','$internetType','$internetPrice','$parking','$parkingType','$reservationNeeded','$parkingPrice','$breakfast','$breakfastType','$breakfastPrice','$bhs','$english','$german','$turkish','$arabian','$swedish','$other','$languagesOther','$restaurant','$roomService','$bar',
'$reception247','$sauna','$fitnessCenter','$yard','$terrace','$nonsmokingRooms','$airportRide','$skiing','$familyRooms','$spaCenter','$jacuzzi','$ac','$waterPark','$pool','$beach','$clothesHanger',
'$clothesDryer','$sofa','$closet','$carpet','$longBed','$roomFan','$fireplace','$mergedRooms','$iron','$bugNet','$privateEntrance','$safe','$soundIsolation','$sittingRoom','$pavedMarbleFloor',
'$woodenFloor','$workingDesk','$toiletPaper','$bath','$bidet','$showerCabin','$bathrobe','$privateBathroom','$freeBathroomSupplies','$fan','$hydromassagingBath','$sharedBathroom','$slippers','$wc',
'$computer','$nitendoWii','$ps2','$ps3','$xbox360','$laptop','$ipad','$cableTv','$cdDvdReader','$faxMachine','$flatScreenTv','$payPerViewChannels','$radio','$satelliteTv','$phone','$tv','$bluRayReader',
'$diningRoom','$barbecue','$cookingPlates','$toaster','$kettle','$outsideDinningSpace','$minibar','$kitchenware','$microwave','$fridge','$coffeeMachine','$childrenSeats','$alarm','$roomWakeUpService',
'$bedclothes','$towels','$balcony','$pavedYard','$cityView','$gardenView','$lakeView','$mountainView','$poolView','$riverView','$seaView','$roomIsOnTheGroundFloor','$accessibleToPeopleInWheelchairs',
'$upperFloorsAccessibleWithElevators','$toiletWithHandles','$safeForBabies','$games','$booksDvdsOrMusic','$socketProtection','$pets')";

if(mysqli_query($conn, $sql)){
    $vals= "success";
} else {
    $vals= "error";
}

echo $vals;


?>