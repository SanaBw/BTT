<?php
session_start();

if(!isset($_SESSION) || !isset($_SESSION['name'])){


    header('Location: index.php');
    exit; 

} else {
    $name=$_SESSION['name'];
    $ID=$_SESSION['ID'];
    $email=$_SESSION['email']; 
    $phone=$_SESSION['phone'];   
}

?><!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link href="css/freelancer.min.css" rel="stylesheet">
        <link href="css/profileStyle.css" rel="stylesheet">  
        <script src="vendor/jquery/jquery.min.js"></script>

    </head>

    <body id="page-top" style="max-width:100%;">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php">BTT</a>
                <ul class="navbar-nav ml-auto">                        
                    <li class="nav-item mx-0 mx-lg-1" id="logOut" >
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger btn btn-danger"  href="logreg/logOut.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="content" style="margin-top: 150px;">
            <div class="container" style="max-width: 2000px;">
                <div class="row profile">
                    <div class="col-md-3" style="float: left; left: 5%;">
                        <div class="profile-sidebar">                  
                            <div class="profile-usertitle" style="text-align: center">
                                <div class="profile-usertitle-name">
                                    <h2 id="name"><?php echo $name;?></h2>
                                    <hr class="star-dark mb-5">
                                </div>                                
                            </div>                    
                            <div class="info">
                                <i class='fas fa-phone'><p id="phone"><?php echo $phone;?></p></i><br>
                                <i class='fas fa-mail-bulk'><p id="email"><?php echo $email;?></p></i><br><br>
                                <div id="addVehicle"><a href=php/vehicle.php class="btn btn-primary">Add vehicle</a></div><br>
                                <div id="addHotel"><a href=php/hotel.php class="btn btn-primary">Add hotel</a></div><br>
                                <div id="addApartment"><a href=php/apartment.php class="btn btn-primary">Add apartment</a></div>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-9" style="float: right; left: 10%">                       
                        <div class="tab">
                            <button class="tablinks" onclick="openTab(event, 'vehicles')" id="vehiclesBtn" ><h4>Vehicles</h4></button>
                            <button id="hotelsBtn" class="tablinks" onclick="openTab(event, 'hotels')"><h4>Hotels</h4></button>
                            <button id="extrasApartments" class="tablinks" onclick="openTab(event, 'apartments')"><h4>Apartments</h4></button>
                        </div>


                        <div id="vehicles" class="tabcontent" style="padding-bottom: 50px">
                            <div id="vehiclesInclude"> </div>   
                            
                        </div>

                        <div id="hotels" class="tabcontent" style="padding-bottom: 50px">
                             <div id="hotelsInclude"> </div>
                        </div>

                        <div id="apartments" class="tabcontent" style="padding-bottom: 50px">                           
                            <div id="apartmentsInclude"> </div>   
                            
                        </div>
                    </div>

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

        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/freelancer.min.js"></script>



        <!-- My scripts for this template -->
        <script src="js/profile.js"></script>    
        <script src="logreg/logreg.js"></script>

        <script> 
            jQuery(function(){
                jQuery("#apartmentsInclude").load("php/apartments.php"); 
                jQuery("#vehiclesInclude").load("php/vehicles.php");
                 jQuery("#hotelsInclude").load("php/hotels.php"); 
            });
        </script>



    </body>
</html>



