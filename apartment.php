<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once('logreg/connection.php');

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
        <script src="js/jquery-ui.min.js"></script>
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Plugin CSS -->
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="css/freelancer.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">


    </head>

    <body id="page-top">

        <!-- Navigation -->
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php">BTT</a>
                <ul class="navbar-nav ml-auto">                        
                    <li class="nav-item mx-0 mx-lg-1" id="logOut" >
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logreg/logOut.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Portfolio Grid Section -->
        <section class="portfolio" id="apartment" style="text-align: left; ">
            <form id="apartmentForm" onsubmit="javascript:return false" method="post">
                <div class="container">
                    <div class="row">

                        <!--HOTEL-->
                        <div class="col-md-12 col-lg-12 mx-auto" style="padding-top: 50px">
                            <hr class="star-dark mb-5">
                            <div class="tab">
                                <button class="tablinks" onclick="openTab(event, 'title')" id="defaultOpen">Title</button>
                                <button class="tablinks" onclick="openTab(event, 'info')" id="infoBtn" >Info</button>
                                <button id="priceBtn" class="tablinks" onclick="openTab(event, 'price')">Price and pics</button>
                                <button id="extrasBtn" class="tablinks" onclick="openTab(event, 'extras')">Extras</button>
                            </div>

                            <!--TITLE TAB-->
                            <div id="title" class="tabcontent" style="padding-bottom: 50px"><br>
                                <h3>What are You renting?</h3>
                                <p style="padding-bottom: 25px" id="apartmentTitleP">In this field write a title such as the name of the object with a short description</p>
                                <input name="apartmentTitle" id="apartmentTitle" style="width: 70%"/><br>
                                <button id="apartmentTitleNext" style="margin-top: 25px"><b>NEXT</b></button>
                            </div>

                            <!--INFO TAB-->
                            <div id="info" class="tabcontent"><br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">
                                            <label for="address">Address</label><br>
                                            <input name="address" id="address"/><br><br>
                                            <label for="city">City</label><br>
                                            <input name="city" id="city"/><br><br>
                                            <label for="size">Size in square meters</label><br>
                                            <input name="size" id="size" min="0" type="number"/><br><br>
                                            <label for="size2">Size of area around the object</label><br>
                                            <input name="size2" id="size2" min="0" type="number"/><br><br>
                                            <label for="rooms">Number of rooms</label><br>
                                            <input name="rooms" min="0" id="rooms" type="number"/><br><br>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">
                                            <label for="floors">Number of floors</label><br>
                                            <input name="floors" id="floors" min="0" type="number"/><br><br>
                                            <label for="heating">Heating</label><br>
                                            <select name="heating" id="heating">
                                                <option disabled selected value> </option>
                                                <option value="Central Heating">Central Heating</option>
                                                <option value="Natural Gas">Natural Gas</option>
                                                <option value="Electricity">Electricity</option>
                                                <option value="Other">Other</option>
                                            </select>   <br><br>
                                            <label for="floorType">Type of floor</label><br>
                                            <select name="floorType"  id="floorType">
                                                <option disabled selected value> </option>
                                                <option value="Hard Wood">Hard Wood</option>
                                                <option value="Tiles">Tiles</option>
                                                <option value="Laminate">Laminate</option>
                                                <option value="Other">Other</option>
                                            </select> <br><br>
                                            <button id="apartmentInfoNext" ><b>NEXT</b></button><br><br>
                                            <p style="padding: 10px; margin: 10px" id="apartmentInfoP"></p>
                                        </div>
                                    </div>
                                </div> 
                            </div>

                            <!--PRICE TAB-->
                            <div id="price" class="tabcontent">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 mx-auto"><br>  
                                            <h3>Price</h3><br>                                    
                                            <input name="priceE" id="priceE" type="number" min="0" step="0.1">
                                            <label for="priceE"> € (Euros)- during the season</label>
                                            <input name="priceE2" id="priceE2" type="number" min="0" step="0.1">
                                            <label for="priceE2"> € (Euros) - off season</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 mx-auto"><br>  
                                            <h3>Upload pictures</h3><br>
                                            <input name="pictures" id="pictures" type="file" multiple><br>
                                        </div>
                                    </div>
                                </div><br><br>
                                <button id="apartmentPriceNext" ><b>NEXT</b></button><br><br>
                                <p style="padding:5px;text-align: center; width: 20%; object-position: center" id="apartmentPriceP"></p>                            
                            </div>

                            <!--EXTRAS TAB-->
                            <div id="extras" class="tabcontent">
                                <h3>Check all that apply</h3>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12 mx-auto"><br>                                       
                                            <h5>Toilet</h5>     
                                            <input type="hidden" id="washingMachine" name="washingMachine" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="washingMachine">Washing Machine</label><br>                                          
                                            <input type="hidden" id="dryer" name="dryer" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="dryer">Dryer</label><br>

                                            <input type="hidden" id="toiletPaper" name="toiletPaper" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="toiletPaper">Toilet paper</label><br>

                                            <input type="hidden" id="towels" name="towels" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="towels">Towels</label><br>

                                            <input type="hidden" id="bidet" name="bidet" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="bidet">Bidet</label><br>

                                            <input type="hidden" id="bathub" name="bathub" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="bathub">Bathub</label><br>

                                            <input type="hidden" id="cabin" name="cabin" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="cabin">Cabin</label><br>

                                            <input type="hidden" id="wc" name="wc" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="wc">WC</label><br><br>

                                            <h5>Bedroom</h5>
                                            <input type="hidden" id="wardrobeOrCloset" name="wardrobeOrCloset" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="wardrobeOrCloset">Wardrobe or closet</label><br>

                                            <input type="hidden" id="wardrobe" name="wardrobe" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="wardrobe">Wardrobe</label>
                                            <br><br>

                                            <h5>Kitchen</h5>
                                            <input type="hidden" id="kitchenTable" name="kitchenTable" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="kitchenTable">Kitchen Table</label><br>

                                            <input type="hidden" id="detergents" name="detergents" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="detergents">Detergents</label><br>

                                            <input type="hidden" id="cookingPlate" name="cookingPlate" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="cookingPlate">Cooking plate</label><br>

                                            <input type="hidden" id="oven" name="oven" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="oven">Oven</label><br>

                                            <input type="hidden" id="kitchenAccessories" name="kitchenAccessories" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="kitchenAccessories">Kitchen accessories</label><br>

                                            <input type="hidden" id="microwaveOven" name="microwaveOven" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="microwaveOven">Microwave oven</label><br>

                                            <input type="hidden" id="refrigerator" name="refrigerator" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="refrigerator">Refrigerator</label><br><br>

                                            <h5>Content of room</h5>
                                            <input type="hidden" id="sofaBed" name="sofaBed" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="sofaBed"> Sofa Bed</label><br>

                                            <input type="hidden" id="soundInsulation" name="soundInsulation" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">           
                                            &nbsp;<label for="soundInsulation">Sound insulation</label><br>

                                            <input type="hidden" id="privateEntrance" name="privateEntrance" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="privateEntrance">Private entrance</label><br>

                                            <input type="hidden" id="safe" name="safe" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="safe">Safe</label><br>

                                            <input type="hidden" id="iron" name="iron" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="iron">Iron</label><br>

                                            <input type="hidden" id="ironingBoard" name="ironingBoard" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="ironingBoard">Ironing board</label><br><br>

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 mx-auto"><br> 

                                            <h5>Yard</h5>
                                            <input type="hidden" id="riverView" name="riverView" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="riverView">River view</label><br>

                                            <input type="hidden" id="cityView" name="cityView" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="cityView">City view</label><br>

                                            <input type="hidden" id="mountainView" name="mountainView" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="mountainView">Mountain view</label><br>

                                            <input type="hidden" id="gardenView" name="gardenView" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="gardenView">Garden view</label><br><br>

                                            <h5>Pets</h5>
                                            <input type="hidden" id="yes" name="yes" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="yes">Pets are allowed</label><br>

                                         

                                            <h5>Living room</h5>
                                            <input type="hidden" id="diningRoom" name="diningRoom" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="diningRoom">Dining room</label><br>

                                            <input type="hidden" id="couch" name="couch" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="couch">Couch</label><br>

                                            <input type="hidden" id="seatingArea" name="seatingArea" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="seatingArea">Seating area</label><br><br>

                                            <h5>Media and technology</h5>
                                            <input type="hidden" id="tv" name="tv" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="tv">TV</label><br>

                                            <input type="hidden" id="flatScreen" name="flatScreen" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="flatScreen">Flat screen</label><br>

                                            <input type="hidden" id="satellite" name="satellite" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="satellite">Satellite</label><br>

                                            <input type="hidden" id="cable" name="cable" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="cable">Cable</label><br><br>

                                            <h5>Internet</h5>
                                            <input type="hidden" id="internetYes" name="internetYes" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="internetYes">Internet access</label><br>


                                            <h5>Availability</h5>
                                            <input type="hidden" id="loweredWashbasin" name="loweredWashbasin" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="loweredWashbasin">Lowered washbasin</label><br>

                                            <input type="hidden" id="objectAdapted" name="objectAdapted" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="objectAdapted">Object adapted for people with disabilities</label><br>

                                            <input type="hidden" id="elevator" name="elevator" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="elevator">Upper floors available with an elevator</label><br>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 mx-auto"><br>

                                            <h5>Parking</h5><br>
                                            <label>Whether the house has a parking space?</label><br>
                                            <input type="hidden" id="parkingYes" name="parkingYes" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="parkingYes">Yes</label><br>

                                            <input type="hidden" id="parkingNo" name="parkingNo" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="parkingNo">No</label><br>

                                            <input type="hidden" id="garage" name="garage" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="garage">Garage</label><br><br>

                                            <h5>Entertainment and family content</h5>
                                            <input type="hidden" id="childrenProgram" name="childrenProgram" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="childrenProgram">Children's television program</label><br>

                                            <input type="hidden" id="safetyForBabies" name="safetyForBabies" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="safetyForBabies">Safety barrier for babies</label><br><br>

                                            <h5>Other</h5>
                                            <input type="hidden" id="airConditioning" name="airConditioning" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="airConditioning">Air conditioning</label><br>

                                            <input type="hidden" id="heatingCheck" name="heatingCheck" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="heatingCheck">Heating</label><br>

                                            <input type="hidden" id="familyRoom" name="familyRoom" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="familyRoom">Family room</label><br>

                                            <input type="hidden" id="nonsmokingRoom" name="nonsmokingRoom" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                                            &nbsp;<label for="nonsmokingRoom">Nonsmoking room</label><br>
                                        </div>
                                    </div>  <br><br>  
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-2 mx-auto" style="align-content: center;">
                                            <button type="submit" id="apartmentExtrasNext"><b>DONE</b></button><br><br>
                                            <p style="padding:5px;text-align: center; width: 20%; object-position: center" id="apartmentExtrasP"></p>
                                        </div>
                                    </div>
                                </div>                            
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
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>



        <!-- Custom scripts for this template -->
        <script src="js/freelancer.min.js"></script>

        <!-- My scripts for this template -->
        <script src="logreg/logreg.js"></script>
        <script src="js/apartment.js"></script>
    </body>




</html>


