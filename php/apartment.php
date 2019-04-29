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
        <section class="portfolio" id="apartment" style="text-align: left; ">
            <form class="form-group" id="apartmentForm" onsubmit="javascript:return false" method="post">
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
                                <input class="form-control" name="apartmentTitle" id="apartmentTitle" style="width: 100%"/><br>
                                <button id="apartmentTitleNext" style="margin-top: 25px"><b>NEXT</b></button>
                            </div>

                            <!--INFO TAB-->
                            <div id="info" class="tabcontent"><br><br>
                                <h5>About apartment</h5><br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input class="form-control"name="address" id="address"/>
                                            </div>   
                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <input class="form-control"name="city" id="city"/></div>
                                            <div class="form-group">
                                                <label for="size">Size in square meters</label>
                                                <input class="form-control"name="size" id="size" min="0" type="number"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="size2">Size of area around the object</label>
                                                <input class="form-control"name="size2" id="size2" min="0" type="number"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="rooms">Number of rooms</label>
                                                <input class="form-control" name="rooms" min="0" id="rooms" type="number"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mx-auto">
                                            <div class="form-group">
                                                <label for="floors">Number of floors</label>
                                                <input class="form-control" name="floors" id="floors" min="0" type="number"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="heatingSelect">Heating</label>
                                                <select class="form-control" name="heatingSelect" id="heatingSelect">
                                                    <option disabled selected value> </option>
                                                    <option value="Central Heating">Central Heating</option>
                                                    <option value="Natural Gas">Natural Gas</option>
                                                    <option value="Electricity">Electricity</option>
                                                    <option value="Other">Other</option>
                                                </select>  
                                            </div>
                                            <div class="form-group">
                                                <label for="floorType">Type of floor</label>
                                                <select class="form-control" name="floorType"  id="floorType">
                                                    <option disabled selected value> </option>
                                                    <option value="Hard Wood">Hard Wood</option>
                                                    <option value="Tiles">Tiles</option>
                                                    <option value="Laminate">Laminate</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                 
                                <p style="padding: 10px; margin: 10px" id="apartmentInfoP"></p>
                                <button id="apartmentInfoNext" ><b>NEXT</b></button><br><br>
                            </div>

                            <!--PRICE TAB-->
                            <div id="price" class="tabcontent">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 mx-auto"><br><br>  
                                            <h5>Price</h5><br>                                    
                                            <input class="form-control" name="priceE" id="priceE" type="number" min="0" step="0.1">
                                            <label for="priceE"> € (Euros)- during the season</label>
                                            <input class="form-control" name="priceE2" id="priceE2" type="number" min="0" step="0.1">
                                            <label for="priceE2"> € (Euros) - off season</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 mx-auto"><br><br>  
                                            <h5>Upload pictures</h5><br>                                            
                                                <input name="pictures" id="pictures" type="file" multiple><br>                                            
                                        </div>
                                    </div>
                                </div><br><br>
                                <button id="apartmentPriceNext" ><b>NEXT</b></button><br><br>
                                <p style="padding:5px;text-align: center; width: 100%; object-position: center" id="apartmentPriceP"></p>                            
                            </div>

                            <!--EXTRAS TAB-->
                            <div id="extras" class="tabcontent"><br><br>
                                <h5>Check all that apply</h5>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12 mx-auto"><br>                                       
                                            <h5>Toilet</h5>     
                                            <input type="checkbox" id="washingMachine" name="washingMachine">&nbsp;<label for="washingMachine">Washing machine</label><br>    
                                            <input type="checkbox" id="dryer" name="dryer">&nbsp;<label for="dryer">Dryer</label><br>    
                                            <input type="checkbox" id="toiletPaper" name="toiletPaper">&nbsp;<label for="toiletPaper">Toilet paper</label><br>    
                                            <input type="checkbox" id="towels" name="towels">&nbsp;<label for="towels">Towels</label><br> 
                                            <input type="checkbox" id="bidet" name="bidet">&nbsp;<label for="bidet">Bidet</label><br>
                                            <input type="checkbox" id="cabin" name="cabin">&nbsp;<label for="cabin">Cabin</label><br>
                                            <input type="checkbox" id="bathtub" name="bathtub">&nbsp;<label for="bathtub">Bathtub</label><br>    
                                            <input type="checkbox" id="wc" name="wc">&nbsp;<label for="wc">WC</label><br> <br>

                                            <h5>Bedroom</h5>
                                            <input type="checkbox" id="wardrobeOrCloset" name="wardrobeOrCloset">&nbsp;<label for="wardrobeOrCloset">Wardrobe or closet</label><br>    
                                            <input type="checkbox" id="wardrobe" name="wardrobe">&nbsp;<label for="wardrobe">Wardrobe</label><br>    
                                            <br>

                                            <h5>Kitchen</h5>

                                            <input type="checkbox" id="kitchenTable" name="kitchenTable">&nbsp;<label for="kitchenTable">Kitchen table</label><br>    
                                            <input type="checkbox" id="detergents" name="detergents">&nbsp;<label for="detergents">Detergents</label><br>    
                                            <input type="checkbox" id="cookingPlate" name="cookingPlate">&nbsp;<label for="cookingPlate">CookingPlate</label><br>    
                                            <input type="checkbox" id="oven" name="oven">&nbsp;<label for="oven">Oven</label><br>    
                                            <input type="checkbox" id="kitchenAccessories" name="kitchenAccessories">&nbsp;<label for="kitchenAccessories">Kitchen accessories</label><br>    
                                            <input type="checkbox" id="microwaveOven" name="microwaveOven">&nbsp;<label for="microwaveOven">Microwave oven</label><br>    
                                            <input type="checkbox" id="refrigerator" name="refrigerator">&nbsp;<label for="refrigerator">Refrigerator</label><br> <br>

                                            <h5>Content of room</h5>
                                            <input type="checkbox" id="sofaBed" name="sofaBed">&nbsp;<label for="sofaBed">Sofa bed</label><br>    
                                            <input type="checkbox" id="soundInsulation" name="soundInsulation">&nbsp;<label for="soundInsulation">Sound insulation</label><br>    
                                            <input type="checkbox" id="privateEntrance" name="privateEntrance">&nbsp;<label for="privateEntrance">Private entrance</label><br>    
                                            <input type="checkbox" id="safe" name="safe">&nbsp;<label for="safe">Safe</label><br>    
                                            <input type="checkbox" id="iron" name="iron">&nbsp;<label for="iron">Iron</label><br>    
                                            <input type="checkbox" id="ironingBoard" name="ironingBoard">&nbsp;<label for="ironingBoard">Ironing board</label><br>    <br>

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 mx-auto"> <br>

                                            <h5>Yard</h5>
                                            <input type="checkbox" id="riverView" name="riverView">&nbsp;<label for="riverView">River view</label><br>    
                                            <input type="checkbox" id="cityView" name="cityView">&nbsp;<label for="cityView">City view</label><br>    
                                            <input type="checkbox" id="mountainView" name="mountainView">&nbsp;<label for="mountainView">Mountain view</label><br>    
                                            <input type="checkbox" id="gardenView" name="gardenView">&nbsp;<label for="gardenView">Garden view</label><br> <br>

                                            <h5>Pets</h5>
                                            <input type="checkbox" id="pets"  name="pets">
                                            &nbsp;<label for="pets">Pets are allowed</label><br><br>

                                            <h5>Living room</h5>
                                            <input type="checkbox" id="diningRoom" name="diningRoom">&nbsp;<label for="diningRoom">Dining room</label><br>    
                                            <input type="checkbox" id="couch" name="couch">&nbsp;<label for="couch">Couch</label><br>    
                                            <input type="checkbox" id="seatingArea" name="seatingArea">&nbsp;<label for="seatingArea">Seating area</label><br>    <br>

                                            <h5>Media and technology</h5>
                                            <input type="checkbox" id="tv" name="tv">&nbsp;<label for="tv">TV</label><br> 
                                            <input type="checkbox" id="flatScreen" name="flatScreen">&nbsp;<label for="flatScreen">Flat screen</label><br>    
                                            <input type="checkbox" id="satellite" name="satellite">&nbsp;<label for="satellite">Satellite</label><br>    
                                            <input type="checkbox" id="cable" name="cable">&nbsp;<label for="cable">Cable</label><br>    

                                            <h5>Internet</h5>
                                            <input type="checkbox" id="internet" name="internet" >
                                            &nbsp;<label for="internet">Internet access</label><br><br>


                                            <h5>Availability</h5>
                                            <input type="checkbox" id="loweredWashbasin" name="loweredWashbasin">&nbsp;<label for="loweredWashbasin">Lowered washbasin</label><br>    
                                            <input type="checkbox" id="objectAdapted" name="objectAdapted">&nbsp;<label for="objectAdapted">Object adapted</label><br>    
                                            <input type="checkbox" id="elevator" name="elevator">&nbsp;<label for="elevator">Elevator</label><br>  <br>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 mx-auto"><br>

                                            <h5>Parking</h5>
                                            <label>Whether the house has a parking space?</label><br>
                                            <input type="checkbox" id="parking" name="parking">
                                            &nbsp;<label for="parking">Yes</label><br>
                                            <input type="checkbox"> &nbsp;<label for="parkingNo">No</label><br>
                                            <input type="checkbox" id="garage" name="garage">
                                            &nbsp;<label for="garage">Garage</label><br><br>

                                            <h5>Entertainment and family content</h5>
                                            <input type="checkbox" id="childrenProgram" name="childrenProgram">&nbsp;<label for="childrenProgram">Children program</label><br>    
                                            <input type="checkbox" id="safetyForBabies" name="safetyForBabies">&nbsp;<label for="safetyForBabies">Safety for babies</label><br>    <br>

                                            <h5>Other</h5>
                                            <input type="checkbox" id="airConditioning" name="airConditioning">&nbsp;<label for="airConditioning">Air conditioning</label><br>    
                                            <input type="checkbox" id="heatingCheck" name="heatingCheck">&nbsp;<label for="heatingCheck">Heating</label><br>    
                                            <input type="checkbox" id="familyRoom" name="familyRoom">&nbsp;<label for="familyRoom">Family room</label><br>    
                                            <input type="checkbox" id="nonsmokingRoom" name="nonsmokingRoom">&nbsp;<label for="nonsmokingRoom">Nonsmoking room</label><br>    
                                            <br>
                                        </div>
                                    </div>  <br><br> 

                                    <button type="submit" id="apartmentExtrasNext"><b>FINISH</b></button><br><br>
                                    <p style="padding:5px;text-align: center; width: 100%; object-position: center" id="apartmentExtrasP"></p>


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
        <script src="../js/apartment.js"></script>
    </body>




</html>



