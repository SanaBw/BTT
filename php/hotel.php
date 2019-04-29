<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once('../logreg/connection.php');

if(!isset($_SESSION['name'])){

    header('Location: index.php');
    exit; 

} 


?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>BTT</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>jQuery.noConflict();</script>
        <script src="../js/jquery-ui.min.js"></script>
        <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Plugin CSS -->
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="../css/freelancer.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">


    </head>

    <body id="page-top">

        <!-- Navigation -->
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="../index.php">BTT</a>
                <ul class="navbar-nav ml-auto">                        
                    <li class="nav-item mx-0 mx-lg-1" id="logOut" >
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../logreg/logOut.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Portfolio Grid Section -->
        <section class="portfolio" id="hotel" style="text-align: left; ">
            <form id="hotelForm" class="form-group" onsubmit="javascript:return false" method="post">
                <div class="container">
                    <div class="row">

                        <!--HOTEL-->
                        <div class="col-md-12 col-lg-12 mx-auto" style="padding-top: 50px">
                            <hr class="star-dark mb-5">
                            <div class="tab">
                                <button class="tablinks" onclick="openTab(event, 'title')" id="defaultOpen">Title</button>
                                <button class="tablinks" onclick="openTab(event, 'info')" id="infoBtn" >Info</button>
                                <button id="priceBtn" class="tablinks" onclick="openTab(event, 'price')">Price and details</button>
                                <button id="extrasBtn" class="tablinks" onclick="openTab(event, 'extras')">Extras</button>
                                <button id="offersBtn" class="tablinks" onclick="openTab(event, 'offers')">Other offers</button>
                            </div>

                            <!--TITLE TAB-->
                            <div id="title" class="tabcontent" style="padding-bottom: 50px"><br>
                                <div class="form-group">
                                    <h3>What is the name of the hotel</h3>
                                    <p style="padding-bottom: 25px" id="hotelTitleP">Write official name like "Hotel BTT Sarajevo"</p>
                                    <input type="text" class="form-control col-lg-5 col-md-5" name="hotelTitle" id="hotelTitle" style="width: 100%"/><br><br>
                                    <h3>Number of stars</h3>
                                    <input type="radio" name="hotelStars" value="1" checked="true"> 1<br>
                                    <input type="radio" name="hotelStars" value="2"> 2<br>
                                    <input type="radio" name="hotelStars" value="3"> 3<br>
                                    <input type="radio" name="hotelStars" value="4"> 4<br>
                                    <input type="radio" name="hotelStars" value="5"> 5<br>
                                    <button id="hotelTitleNext" style="margin-top: 25px"><b>NEXT</b></button>
                                </div>
                            </div>

                            <!--INFO TAB-->
                            <div id="info" class="tabcontent"><br>
                                <br><h5>About hotel</h5><br>
                                <div class="container">                                
                                    <div class="row">                                        
                                        <div class="col-xs-12 col-sm-12 col-lg-7 col-md-7 mx-auto" >                                            
                                            <form>
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control" id="address" placeholder="Number, street, floor">
                                                </div>
                                                <div class="form-group">
                                                    <label for="city">City</label>
                                                    <input type="text" class="form-control" id="city" >
                                                </div>

                                                <div class="form-group">
                                                    <label for="zipCode">ZIP code</label>
                                                    <input type="number" class="form-control" id="zipCode">
                                                </div>
                                            </form>

                                            <label>Country/Region</label>
                                            <select class="form-control" id="country" name="country">
                                                <option value="bih">Bosnia and Herzegovina</option>
                                                <option value="serbia">Serbia</option>
                                                <option value="croatia">Croatia</option>
                                                <option value="slovenia">Slovenia</option>
                                                <option value="montenegro">Montenegro</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-xs-5 col-md-5 col-lg-5 mx-auto">
                                            <div style="border:1px solid lightblue;
                                                        margin-top:110px; max-width: 400px; text-align: center;" class="boxed">
                                                <h4>Importance of correct address</h4>
                                                <p>Please check your address information! It is very important to make sure every part is correct.</p>
                                            </div> 
                                        </div>
                                    </div><br><br>
                                    <div>
                                        <p id="hotelInfoP"></p>
                                    </div>
                                </div>
                                <button id="hotelInfoNext" style="margin-top: 25px"><b>NEXT</b></button>
                            </div>

                            <!--PRICE TAB-->
                            <div id="price" class="tabcontent"><br><br> 
                                <h5>Room options</h5>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mx-auto">
                                            <div class="form-group">                                               
                                                <br> Type of room <br>
                                                <select name="typeOfRoom" class="form-control col-lg-5 col-md-5" id="typeOfRoom">
                                                    <option value="" selected='selected'>Single</option>
                                                    <option value="">Double</option>
                                                    <option value="">Two separate beds</option>
                                                    <option value="">Double bedded</option>
                                                    <option value="">Triple</option>
                                                    <option value="">Quadruple</option>
                                                    <option value="">Family</option>
                                                    <option value="">Suite</option>
                                                    <option value="">Studio</option>
                                                    <option value="">Apartment</option>
                                                    <option value="">Bedroom</option>
                                                    <option value="">One bedded bedroom</option>
                                                    <option value="">Business double bedded with gym access</option>
                                                    <option value="">Deluxe double bedded</option>
                                                    <option value="">Deluxe double bedded with balcony</option>
                                                    <option value="">Deluxe with king sized bed</option>
                                                    <option value="">Deluxe with queen sized bed</option>
                                                    <option value="">Deluxe double bedded (1 adult + 2 kids)</option>
                                                    <option value="">Deluxe double bedded (1 adult + 1 kids)</option>
                                                    <option value="">Deluxe double bedded (2 adults + 1 kid)</option>
                                                    <option value="">Deluxe double bedded with sea view</option>
                                                    <option value="">Deluxe double bedded with mountain view</option>
                                                    <option value="">Deluxe double bedded with jacuzzi</option>
                                                    <option value="">Deluxe double bedded with secondary bed</option>
                                                    <option value="">Economy double bedded</option>
                                                    <option value="">Superior double bedded</option>
                                                    <option value="">Superior double bedded with queen size bed</option>
                                                    <option value="">Double bedded (1 adult + 2 kids)</option>
                                                    <option value="">Double bedded (1 adult + 1 kids)</option>
                                                    <option value="">Double bedded (2 adults + 1 kid)</option>
                                                    <option value="">Double bedded with sea view</option>
                                                    <option value="">Double bedded with mountain view</option>
                                                    <option value="">Double bedded with balcony</option>
                                                    <option value="">Double bedded with shared bathroom</option>
                                                    <option value="">Double bedded accessible to disabled people</option>
                                                    <option value="">Double bedded with balcony and sea view</option>
                                                    <option value="">Double bedded with jacuzzi</option>
                                                    <option value="">Small double bedded</option>
                                                    <option value="">Big double bedded</option>
                                                    <option value="">King sized double bedded with sea view</option>
                                                    <option value="">King sized double bedded with mountain view</option>
                                                    <option value="">King sized double bedded with jacuzzi</option>
                                                    <option value="">King sized double bedded with secondary bed</option>
                                                    <option value="">King sized double bedded with access for disabled people</option>
                                                    <option value="">Queen sized double bedded with sea view</option>
                                                    <option value="">Queen sized double bedded with mountain view</option>
                                                    <option value="">Queen sized double bedded with jacuzzi</option>
                                                    <option value="">Queen sized double bedded with secondary bed</option>
                                                    <option value="">Queen sized double bedded with access for disabled people</option>
                                                </select>
                                                <br> Is smoking allowed? <br>
                                                <input type="radio" name="smoking" value="Yes" checked="true"> Yes<br>
                                                <input type="radio" name="smoking" value="No"> No<br><br>

                                                Number of rooms (of this type)
                                                <input type="number" class="form-control col-lg-2 col-md-2" name="numberOfRooms" id="numberOfRooms"><br><br>
                                                Size of the room in &#x33A1;(not required)
                                                <input type="number" class="form-control col-lg-2 col-md-2" name="sizeOfRoom" id="sizeOfRoom">  

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h5>Bed options</h5><br> 
                                <div class="container">
                                    <p style="font-size: 15px;">Add information about beds in each room</p>
                                    <div class="row">                                        
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mx-auto">   
                                            <form class="form-group">
                                                Main bed<br>
                                                <select name="mainBedType" class="form-control" id="mainBedType">
                                                    <option value="One person bed/90-130 cm"  selected="selected">One person bed/90-130cm</option>
                                                    <option value="Double bed/131-150 cm">Double bed/131-150 cm širine</option>
                                                    <option value="King size/151-180 cm">King size/151-180 cm</option>
                                                    <option value="Super-king size/181-210 cm">Super-king size/181-210 cm</option>
                                                    <option value="Bunk bed">Bunk bed</option>
                                                    <option value="Sofa">Sofa</option>
                                                    <option value="Futon">Futon</option>
                                                </select>
                                                <br>
                                                Secondary bed<br>
                                                <select name="secBedType" class="form-control" id="secBedType">
                                                    <option value="One person bed/90-130 cm" selected="selected">One person bed/90-130cm</option>
                                                    <option value="Double bed/131-150 cm">Double bed/131-150 cm širine</option>
                                                    <option value="King size/151-180 cm">King size/151-180 cm</option>
                                                    <option value="Super-king size/181-210 cm">Super-king size/181-210 cm</option>
                                                    <option value="Bunk bed">Bunk bed</option>
                                                    <option value="Sofa">Sofa</option>
                                                    <option value="Futon">Futon</option>
                                                </select>
                                                <br> Maximum number of people <br>
                                                <input type="number" min="0" class="form-control  col-lg-5 col-md-5" name="numberOfPeople" id="numberOfPeople">
                                                <br>
                                            </form>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mx-auto">
                                            <form class="form-group">
                                                Number of main beds <br>
                                                <input class="form-control" type="number" min="0" name="numberOfMainBeds" id="numberOfMainBeds"><br>
                                                Number of secondary beds <br>
                                                <input class="form-control" type="number" min="0" name="numberOfSecBeds" id="numberOfSecBeds">
                                            </form>                                        
                                        </div> 
                                    </div>
                                </div>
                                <hr>
                                <h5> Price </h5>
                                <div class="container">                                 
                                    <div class="row"> 
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mx-auto">
                                            € per night<input type="number" min="0" class="form-control  col-lg-3 col-md-3" name="hotelPrice" id="hotelPrice"> <br>
                                            Do you offer discount for less than three people?<br>
                                            <input type="radio" name="discount" value="Yes" checked="true"> Yes<br>
                                            <input type="radio" name="discount" value="No"> No<br>
                                            <br>

                                            <div name="disc" id="disc">
                                                Discount <br>
                                                <input type="number" name="discountValue" id="discountValue" class="form-control  col-lg-3 col-md-3" value="0" style="width:50%;display: inline-block;">&nbsp;    <select style="width:30%;display: inline-block;" name="discountUnit" class="form-control col-lg-1 col-md-1" id="discountUnit">
                                                <option value="%" selected="selected">%</option>
                                                <option value="KM" >KM</option>
                                                </select> 
                                            </div> 
                                        </div>
                                    </div>
                                </div> <br><hr> 
                                <h5> Photos </h5>
                                <div class="container">
                                    <div class="row">
                                        <form class="form-group">
                                            <p style="font-style: italic">Upload photos of your objects</p>
                                            <input name="pictures" id="pictures" type="file" multiple><br>
                                        </form>
                                    </div>
                                </div>
                                <br><br>                                
                                <p style="padding:5px;text-align: center; width: 100%; object-position: center" id="hotelPriceP"></p>    
                                <button id="hotelPriceNext" ><b>NEXT</b></button><br><br>
                            </div> 


                            <!--EXTRAS TAB-->
                            <div id="extras" class="tabcontent">                                 
                                <br><br>
                                <h5>Internet access</h5>
                                <div class=container>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mx-auto">
                                            <p style="font-style: italic">Internet access is very important to guests. Free Wi-Fi is deciding point for many people.</p>                                
                                            Is Internet available?
                                            <select name="internet" class="form-control col-md-3 col-lg-3" id="internet" >
                                                <option value="Yes, it is free" selected="selected">Yes, it is free</option>
                                                <option value="Yes, but it is charged additionally" >Yes, but it is charged additionally</option>
                                                <option value="No" >No</option>
                                            </select><br> 
                                            <label for="internetType" id="l1">Type of connection</label>
                                            <select style="display: inline-block;" name="internetType" class="form-control col-xs-12 col-sm-12 col-md-3 col-lg-3 mx-auto" id="internetType">
                                                <option value="Wi-Fi" selected="selected">Wi-Fi</option>
                                                <option value="LAN" >LAN</option>
                                                <option value="3G hotspot" >3G hotspot</option>
                                                <option value="4G hotspot" >4G hotspot</option>
                                            </select> &nbsp;
                                            <label for="internetAvailability" id="l2">Available in</label>
                                            <select style="display:inline-block;" name="internetAvailable" class="form-control col-xs-12 col-sm-12 col-md-3 col-lg-3 mx-auto" id="internetAvailable">
                                                <option value="Shared spaces" selected="selected">Shared spaces</option>
                                                <option value="Each room" >Each Room</option>
                                            </select>&nbsp;
                                            <label for="internetPrice" id="l3">Price</label>
                                            <input style="display:inline-block;" name="internetPrice" class="form-control col-xs-12 col-sm-12 col-md-2 col-lg-2 mx-auto" id="internetPrice" type="number" placeholder="€">     <br>                             
                                        </div>  
                                    </div><br><hr>
                                </div>

                                <h5>Parking</h5>
                                <div class=container>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mx-auto">
                                            <p style="font-style: italic">These information are very important to people that travel with car</p>
                                            Do guests have parking space?
                                            <select name="parking" class="form-control col-md-3 col-lg-3" id="parking">
                                                <option value="Yes, it is free" selected="selected">Yes, it is free</option>
                                                <option value="Yes, but it is charged additionally" >Yes, but it is charged additionally</option>
                                                <option value="No" >No</option>
                                            </select><br>    
                                            <label for="parkingType" id="l4">Where is the parking</label>
                                            <select style="display: inline-block;" name="parkingType" class="form-control col-xs-12 col-sm-12 col-md-3 col-lg-3 mx-auto" id="parkingType">
                                                <option value="Within the hotel" selected="selected">Within the hotel</option>
                                                <option value="Outside the hotel" >Outside the hotel</option>
                                            </select> &nbsp; 
                                            <label for="reservationNeeded" id="l5">Parking reservation</label>
                                            <select style="display: inline-block;" name="reservationNeeded" class="form-control col-xs-12 col-sm-12 col-md-3 col-lg-3 mx-auto" id="reservationNeeded">
                                                <option value="Needs to be reserved before check-in" selected="selected">Needs to be reserved before check-in</option>
                                                <option value="Doesn't need to be reserved before check-in" >Doesn't need to be reserved before check-in</option>
                                            </select>&nbsp;
                                            <label for="parkingPrice" id="l6">Price</label>
                                            <input style="display: inline-block;" name="parkingPrice" class="form-control col-xs-12 col-sm-12 col-md-2 col-lg-2 mx-auto" id="parkingPrice" type="number" placeholder="€">     <br>                          </div>
                                    </div>
                                </div>
                                <br><hr>

                                <h5>Breakfast</h5> 
                                <div class=container>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mx-auto">
                                            Does your hotel serve breakfast?
                                            <select name="breakfast" class="form-control col-md-3 col-lg-3" id="breakfast">
                                                <option value="Yes, it is free" selected="selected">Yes, it is free</option>
                                                <option value="Yes, but it is charged additionally" >Yes, but it is charged additionally</option>
                                                <option value="No" >No</option>
                                            </select><br>    
                                            <label for="breakfastType" id="l7">Type of breakfast</label>
                                            <select style="display: inline-block;" name="breakfastType" class="form-control col-xs-12 col-sm-12 col-md-3 col-lg-3 mx-auto" id="breakfastType">
                                                <option value="Continental" selected="selected">Continental</option>
                                                <option value="American" >American</option>
                                                <option value="Buffet" >Buffet</option>
                                                <option value="A la cartel" >A la carte</option>
                                                <option value="Italian" >Italian</option>
                                                <option value="Full English/Irish" >Full English/Irish</option>
                                                <option value="Vegetarian" >Vegetarian</option>
                                                <option value="Vegan" >Vegan</option>
                                                <option value="Halal" >Halal</option>
                                                <option value="Gluten-free" >Gluten-free</option>
                                                <option value="Kosher" >Kosher</option>
                                                <option value="Asian" >Asian</option>
                                            </select> &nbsp; 
                                            <label for="breakfastPrice" id="l8">Price per person</label>
                                            <input style="display: inline-block;" name="breakfastPrice" class="form-control col-xs-12 col-sm-12 col-md-2 col-lg-2 mx-auto" id="breakfastPrice" type="number" placeholder="€"><br>         
                                        </div>
                                    </div>      
                                </div><br><hr>    

                                <h5>Languages</h5>  
                                <div class=container>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mx-auto">
                                            Which languages does your personnel speak?<br><br>
                                            <input type="checkbox" id="bhs"> BHS<br>
                                            <input type="checkbox" id="english" > English<br>
                                            <input type="checkbox" id="german"> German<br>
                                            <input type="checkbox" id="turkish"> Turkish<br>
                                            <input type="checkbox" id="arabian" > Arabian<br>
                                            <input type="checkbox" id="swedish" > Swedish<br>
                                            <input type="checkbox" id="other" name="other" onchange="check();"> Other
                                            <input type="text" class="form-control col-md-3 col-lg-3" style="display: inline-block;"id="languagesOther" name="languagesOther"> <br>
                                        </div>
                                    </div>
                                </div><hr>

                                <h5>Popular guest requests</h5>   
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4">
                                            <input type="checkbox" style="width:10%;display: inline-block;" name="restaurant" > Restaurant<br>
                                            <input type="checkbox" style="width:10%;display: inline-block;"  name="roomService"> Room service<br>
                                            <input type="checkbox" style="width:10%;display: inline-block;"  name="bar" > Bar<br>
                                            <input type="checkbox" style="width:10%;display: inline-block;"name="247Reception" > 24/7 reception<br>
                                            <input type="checkbox" style="width:10%;display: inline-block;" name="sauna"> Sauna<br>
                                            <input type="checkbox" style="width:10%;display: inline-block;" name="fitnessCenter" > Fitness Center
                                        </div>
                                        <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4">
                                            <input type="checkbox" style="width:10%;display: inline-block;" name="yard" > Yard<br>
                                            <input type="checkbox" style="width:10%;display: inline-block;"  name="terrace"> Terrace<br>
                                            <input type="checkbox" style="width:10%;display: inline-block;"  name="nonsmokingRooms" > Non-smoking rooms<br>
                                            <input type="checkbox" style="width:10%;display: inline-block;"name="airportRide" > Airport ride<br>
                                            <input type="checkbox" style="width:10%;display: inline-block;" name="skiing"> Skiing<br>
                                            <input type="checkbox" style="width:10%;display: inline-block;" name="familyRooms" > Family rooms
                                        </div>
                                        <div class="col-xm-12 col-sm-12 col-md-6 col-lg-4">
                                            <input type="checkbox" style="width:10%;display: inline-block;" name="spaCenter" > Spa center<br>
                                            <input type="checkbox" style="width:10%;display: inline-block;"  name="jacuzzi"> Jacuzzi<br>
                                            <input type="checkbox" style="width:10%;display: inline-block;"  name="ac" > AC<br>
                                            <input type="checkbox" style="width:10%;display: inline-block;"name="waterPark" > Water park<br>
                                            <input type="checkbox" style="width:10%;display: inline-block;" name="pool"> Pool<br>
                                            <input type="checkbox" style="width:10%;display: inline-block;" name="beach" > Beach
                                        </div>
                                    </div>
                                </div>

                                <br>                                
                                <p style="padding:5px;text-align: center; width: 70%; object-position: center" id="hotelExtrasP"></p>    
                                <button id="hotelExtrasNext" ><b>NEXT</b></button><br><br>
                            </div>


                            <!--OFFERS TAB-->
                            <div id="offers" class="tabcontent">   
                                <br><br>
                                <h5 onclick="showContent('roomContent');" style="text-decoration: underline;">Room Content</h5>
                                <div id="roomContent" hidden=true >
                                    <input type="checkbox" name="clothesHanger" > Clothes hanger<br>
                                    <input type="checkbox" name="clothesDryer"> Clothes dryer<br>
                                    <input type="checkbox"  name="sofa"> Sofa<br>
                                    <input type="checkbox"  name="closet"> Closet<br>
                                    <input type="checkbox" name="carpet"> Carpet<br>
                                    <input type="checkbox" name="longBed"> Long bed >2m <br>
                                    <input type="checkbox" name="roomFan"> Fan<br>
                                    <input type="checkbox" name="fireplace"> Fireplace<br>
                                    <input type="checkbox" name="mergedRooms"> Merged rooms<br>
                                    <input type="checkbox" name="iron"> Iron<br>
                                    <input type="checkbox" name="bugNet"> Bug net<br>
                                    <input type="checkbox" name="privateEntrance"> Private entrance<br>
                                    <input type="checkbox" name="safe"> Safe<br>
                                    <input type="checkbox" name="soundIsolation"> Sound isolation<br>
                                    <input type="checkbox" name="sittingRoom"> Sitting room<br>
                                    <input type="checkbox" name="pavedMarbleFloor"> Paved marble floor<br>
                                    <input type="checkbox" name="woodenFloor"> Wooden floor<br>
                                    <input type="checkbox" name="workingDesk"> Working desk<br>
                                </div><hr>

                                <h5 onclick="showContent('bathroom');" style="text-decoration: underline;">Bathroom</h5>
                                <div id="bathroom" hidden=true>
                                    <input type="checkbox" name="toiletPaper"> Toilet paper<br>
                                    <input type="checkbox" name="bath"> Bath<br>
                                    <input type="checkbox"  name="bidet"> Bidet<br>
                                    <input type="checkbox"  name="showerCabin"> Shower cabin<br>
                                    <input type="checkbox" name="bathrobe"> Bathrobe<br>
                                    <input type="checkbox" name="privateBathroom"> Private bathroom <br>
                                    <input type="checkbox" name="freeBathroomSupplies"> Free bathroom supplies<br>
                                    <input type="checkbox" name="fan"> Fan<br>
                                    <input type="checkbox" name="hydromassagingBath"> Hydro-massaging bath<br>
                                    <input type="checkbox" name="sharedBathroom"> Shared bathroom<br>
                                    <input type="checkbox" name="slippers"> Slippers<br>
                                    <input type="checkbox" name="wc"> WC<br>    
                                </div><hr>

                                <h5 onclick="showContent('media');" style="text-decoration: underline;">Media &amp; Technology</h5>
                                <div id="media" hidden=true>
                                    <input type="checkbox" name="computer"> Computer<br>
                                    <input type="checkbox" name="nitendoWii"> Nitendo Wii<br>
                                    <input type="checkbox"  name="ps2"> PS2<br>
                                    <input type="checkbox"  name="ps3"> PS3<br>
                                    <input type="checkbox" name="xbox360"> Xbox 360<br>
                                    <input type="checkbox" name="laptop"> Laptop<br>
                                    <input type="checkbox" name="ipad"> iPad<br>
                                    <input type="checkbox" name="cableTv"> Cable TV<br>
                                    <input type="checkbox" name="cdDvdReader"> CD/DVD reader<br>
                                    <input type="checkbox" name="faxMachine"> Fax machine<br>
                                    <input type="checkbox" name="flatScreenTv"> Flat screen TV<br>   
                                    <input type="checkbox" name="payPerViewChannels"> Pay-per-view channels<br>
                                    <input type="checkbox" name="radio"> Radio<br>
                                    <input type="checkbox" name="satelliteTv"> Satellite TV<br>
                                    <input type="checkbox" name="phone"> Phone<br>
                                    <input type="checkbox" name="tv"> TV<br>
                                    <input type="checkbox" name="bluRayReader"> Blu-ray reader<br>  
                                </div> <hr>                                   

                                <h5 onclick="showContent('food');" style="text-decoration: underline;">Food &amp; Drinks</h5>
                                <div id="food" hidden=true>
                                    <input type="checkbox" name="diningRoom"> Dining room<br>
                                    <input type="checkbox" name="barbecue"> Barbecue<br>
                                    <input type="checkbox"  name="cookingPlates"> Cooking plates<br>
                                    <input type="checkbox"  name="toaster"> Toaster<br>
                                    <input type="checkbox" name="kettle"> Kettle<br>
                                    <input type="checkbox" name="outsideDinningSpace"> Outside dinning space<br>
                                    <input type="checkbox" name="minibar"> Minibar<br>
                                    <input type="checkbox" name="kitchenware"> Kitchenware <br>
                                    <input type="checkbox" name="microwave"> Microwave<br>
                                    <input type="checkbox" name="fridge"> Fridge<br>
                                    <input type="checkbox" name="coffeeMachine"> Coffee machine<br>   
                                    <input type="checkbox" name="childrenSeats"> Children seats<br>
                                </div><hr>

                                <h5 onclick="showContent('extra');" style="text-decoration: underline;">Extra services &amp; items</h5>
                                <div id="extra" hidden=true>
                                    <input type="checkbox" name="alarm"> Alarm<br>
                                    <input type="checkbox" name="roomWakeUpService"> Room wake up service<br>
                                    <input type="checkbox"  name="bedclothes"> Bedclothes<br>
                                    <input type="checkbox"  name="towels"> Towels<br>
                                </div><hr>

                                <h5 onclick="showContent('yard');" style="text-decoration: underline;">Yard &amp; view</h5>
                                <div id="yard" hidden=true>
                                    <input type="checkbox" name="balcony"> Balcony<br>
                                    <input type="checkbox" name="pavedYard"> Paved yard<br>
                                    <input type="checkbox"  name="cityView"> City view<br>
                                    <input type="checkbox"  name="gardenView"> Garden view<br>
                                    <input type="checkbox"  name="lakeView"> Lake view<br>
                                    <input type="checkbox"  name="mountainView"> Mountain view<br>
                                    <input type="checkbox"  name="poolView"> Pool view<br>
                                    <input type="checkbox"  name="riverView"> River view<br>
                                    <input type="checkbox"  name="seaView"> Sea view<br>
                                </div><hr>

                                <h5 onclick="showContent('availability');" style="text-decoration: underline;">Availability</h5>
                                <div id="availability" hidden=true>
                                    <input type="checkbox" name="roomIsOnTheGroundFloor"> Room is on the ground floor<br>
                                    <input type="checkbox" name="accessibleToPeopleInWheelchairs"> Accssible to people in wheelchairs<br>
                                    <input type="checkbox"  name="upperFloorsAccessibleWithElevators"> Upper floors accesible with elevators<br>
                                    <input type="checkbox"  name="toiletWithHandles"> Toilet with handles<br>
                                </div><hr>

                                <h5 onclick="showContent('family');" style="text-decoration: underline;">Fun &amp; family activities</h5>
                                <div id="family" hidden=true>
                                    <input type="checkbox" name="safeForBabies"> Safe for babies <br>
                                    <input type="checkbox" name="games"> Games<br>
                                    <input type="checkbox"  name="booksDvdsOrMusic"> Books, DVDs or music<br>
                                    <input type="checkbox"  name="socketProtection"> Socket protection<br>
                                </div><hr>

                                <h5 onclick="showContent('pets');" style="text-decoration: underline;">Pets</h5>
                                <div id="pets" hidden=true>
                                    <input type="checkbox" name="pets"> Pets are allowed <br>
                                </div><hr>

                                <h5 onclick="showContent('terms');" style="text-decoration: underline;">Terms &amp; conditions</h5>                                    
                                <div id="terms" hidden=true>
                                    <p style="font-style: italic">Please define rules for canceling</p>
                                    How many days before check-in are guests allowed to cancel without any fee?
                                    <select name="cancel" class="form-control" id="cancel">
                                        <option value="5days" selected="selected">5 days</option>
                                        <option value="3days" >3 days</option>
                                        <option value="1day hotspot" >1 day</option>
                                        <option value="CheckInDayButBefore8" >Check-in day but before 8:00</option>
                                    </select><br>
                                    If they fail to do so, they are obliged to pay
                                    <select name="cancelFee" class="form-control" id="cancelFee">
                                        <option value="10perc" selected="selected">10% of the whole value of their reservation </option>
                                        <option value="30perc" >50% of the whole value of their reservation </option>
                                        <option value="1day hotspot" >100% of the whole value of their reservation </option>
                                        <option value="CheckInDayButBefore16" >Predefined fee</option>
                                    </select><br>

                                </div>
                                <br><br>                                
                                <p style="padding:5px;text-align: center; width: 100%; object-position: center" id="hotelOffersP"></p>    
                                <button id="hotelOffersNext" ><b>FINISH</b></button><br><br>
                            </div>
                        </div>    
                    </div>
                </div>
            </form>
        </section>

        <!-- Footer -->
        <div style="bottom: 0;width: 100%">
            <footer class="footer text-center" >
                <div class="container" >
                    <div class="row">
                        <div class="col-md-6 mb-6 mb-lg-0">
                            <h4 class="text-uppercase mb-4">Location</h4>
                            <p class="lead mb-0"> </p>
                        </div>
                        <div class="col-md-6 mb-6 mb-lg-0">
                            <h4 class="text-uppercase mb-4">Around the Web</h4>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                        <i class="fab fa-fw fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                        <i class="fab fa-fw fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                        <i class="fab fa-fw fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                        <i class="fab fa-fw fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                        <i class="fab fa-fw fa-dribbble"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

            <div class="copyright py-4 text-center text-white" >
                <div class="container" >
                    <small>Copyright &copy; BTT</small>
                </div>
            </div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
        <div class="scroll-to-top d-lg-none position-fixed ">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>



        <!-- Bootstrap core JavaScript -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="../js/jqBootstrapValidation.js"></script>
        <script src="../js/contact_me.js"></script>



        <!-- Custom scripts for this template -->
        <script src="../js/freelancer.min.js"></script>

        <!-- My scripts for this template -->
        <script src="../logreg/logreg.js"></script>
        <script src="../js/hotel.js"></script>
    </body>




</html>



