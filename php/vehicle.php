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
        <section class="portfolio" id="vehicle" style="text-align: left; ">
            <form id="vehicleForm" class="form-group" onsubmit="javascript:return false" method="post">
                <div class="container">
                    <div class="row">

                        <!--VEHICLE-->
                        <div class="col-md-12 col-lg-12 mx-auto" style="padding-top: 50px">
                            <hr class="star-dark mb-5">
                            <div class="tab">
                                <button class="tablinks" onclick="openTab(event, 'title')" id="defaultOpen">Model</button>
                                <button class="tablinks" onclick="openTab(event, 'info')" id="infoBtn" >Info</button>
                                <button id="priceBtn" class="tablinks" onclick="openTab(event, 'price')">Price and pictures</button>
                            </div>

                            <!--TITLE TAB-->
                            <div id="title" class="tabcontent" style="padding-bottom: 50px"><br>
                                <div class="form-group">
                                    <h3>Car brand</h3>
                                    <p style="padding-bottom: 5px">Write car manufacturer like "Audi","BMW"...</p>
                                    <input type="text" class="form-control col-lg-5 col-md-5" name="vehicleBrand" id="vehicleBrand" style="width: 100%"/><br><br>
                                    <h3>Model</h3>
                                    <p style="padding-bottom: 5px">Write car model such as "A6", "M5"</p>
                                    <input type="text" class="form-control col-sm-3 col-xs-3 col-lg-5 col-md-5" name="vehicleModel" id="vehicleModel" style="width: 80%;display:inline-block;"/>
                                    <input type="text" class="form-control col-sm-1 col-xs-1 col-lg-3 col-md-3" name="vehicleYear" id="vehicleYear" placeholder="Year" style="width: 20%;display:inline-block;"/><br><br>
                                    <p id="vehicleTitleP" style="object-position: center;"></p>
                                    <button id="vehicleTitleNext" style="margin-top: 25px"><b>NEXT</b></button>
                                </div>
                            </div>

                            <!--INFO TAB-->
                            <div id="info" class="tabcontent"><br>
                                <br><h5>About vehicle</h5><br>
                                <div class="container">                                
                                    <div class="row form-group">                                        
                                        <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4 mx-auto" >                                            
                                            <label for="seats">Number of seats</label>
                                            <input type="number" class="form-control" name="seats" id="seats">
                                        </div>   
                                        <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4 mx-auto" >                                            
                                            <label for="maxPeople">Max number of people</label>
                                            <input type="number" class="form-control" name="maxPeople" id="maxPeople">
                                        </div> 
                                        <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4 mx-auto" >                                            
                                            <label for="maxBags">Max number of bags</label>
                                            <input type="number" class="form-control" name="maxBags" id="maxBags">
                                        </div> 
                                    </div><br>                               
                                    <input type="checkbox" name="ac" id="ac">&nbsp;<label for="ac">AC</label>   <br>  
                                    <input type="checkbox" name="babySeat" id="babySeat">&nbsp;<label for="babySeat">Baby seat</label>
                                </div><br>
                                <div class="row form-group">                                        
                                    <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4 mx-auto" >                                            
                                        <label for="insurance">Type of insurance</label>
                                        <input type="text" class="form-control" name="insurance" id="insurance">
                                    </div>   
                                    <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4 mx-auto" >                                            
                                        <label for="theftProtection">Type of theft protection</label>
                                        <input type="text" class="form-control" name="theftProtection" id="theftProtection">
                                    </div> 
                                    <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4 mx-auto" >                                          

                                    </div> 
                                </div><br>  
                                <div class="row form-group">                                        
                                    <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4 mx-auto" >   
                                        <label for="driver">Driver</label>
                                        <select name="driver" class="form-control" id="driver" >
                                            <option value="Yes, driver is available" selected="selected">Yes, driver is available</option>
                                            <option value="Yes, but it is charged additionally" >Yes, but it is charged additionally</option>
                                            <option value="No" >No, driver is not available</option>
                                        </select> 
                                        <p id="infoDriver" class="text-primary">Driver has to be aware that guests are arriving at the airport and he/she has to wait for them!</p>
                                       <br>
                                        <label for="address" id="l1">Address (where is the vehicle)</label>
                                        <input type="text" class="form-control" name="address" id="address">
                                    </div>   
                                    <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4 mx-auto" >                                            
                                        <label for="priceDriver" id="l2">Price per hour in €</label>
                                        <input type="number" class="form-control" name="priceDriver" id="priceDriver">
                                    </div> 
                                    <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4 mx-auto" >  </div>
                                </div><br>  
                                <p id="vehicleInfoP" style="object-position: center"></p>
                                <button id="vehicleInfoNext" style="margin-top: 25px"><b>NEXT</b></button>
                            </div>

                            <!--PRICE TAB-->
                          <div id="price" class="tabcontent">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 mx-auto"><br><br>  
                                            <h5>Price per day</h5><br>                                    
                                            <input class="form-control" name="priceE" id="priceE" type="number" min="0">
                                            <label for="priceE"> € (Euros)- during the season</label>
                                            <input class="form-control" name="priceE2" id="priceE2" type="number" min="0">
                                            <label for="priceE2"> € (Euros) - off season</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 mx-auto"><br><br>  
                                            <h5>Upload pictures</h5><br>
                                            <input name="pictures" id="pictures" type="file" multiple><br>
                                        </div>
                                    </div>
                                </div><br><br>
                                <button id="vehiclePriceNext" ><b>FINISH</b></button><br><br>
                                <p style="padding:5px;text-align: center; width: 100%; object-position: center" id="vehiclePriceP"></p>                            
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
        <script src="../js/vehicle.js"></script>
    </body>




</html>



