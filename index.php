<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    }

include_once('logreg/connection.php');

if(isset($_SESSION['name']) || !isset($_SESSION)){
    
        $name=$_SESSION['name'];
        $email=$_SESSION['email'];        
        $query = "SELECT * FROM users WHERE name='$name' AND email='$email'";

        $data = mysqli_query($conn, $query);
        $rows=mysqli_num_rows($data);

        if($rows==1){
            $row=mysqli_fetch_array($data);
            $first_name=$row['first_name'];
            $last_name=$row['last_name'];
            $username=$row['username'];
            header('Location: profile.php');
            exit; 
        } else {
            echo "none";
        }
} 


?>
<!DOCTYPE html>
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
        <link href="css/freelancer.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">BTT</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Login - register</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header -->
        <header class="masthead bg-primary text-white text-center" >
            <div class="container">
                <h1 class="text-uppercase mb-0"> </h1>
                <img class="img-fluid mb-5 d-block mx-auto" src="img/sebilj.png" alt="">
                <hr class="star-light">
                <h2 class="font-weight-light mb-0">About Us</h2>
            </div>
        </header>

        <!-- Portfolio Grid Section -->
        <section class="portfolio" id="portfolio" style="text-align: center; border-bottom: thin solid #26343F">
            <div class="container">
                <div class="row">

                    <!--LOGIN FORM-->
                    <div class="col-md-6 col-lg-4 mx-auto">
                        <h2 class="text-center text-uppercase text-secondary mb-0">log in</h2>
                        <hr class="star-dark mb-5">
                        <form method="post" id="loginForm" novalidate="true" >
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Your E-Mail</label>
                                    <input class="form-control" id="login-email" name="login-email" type="text" placeholder="Your E-Mail" required="required" data-validation-required-message="Please enter your mail.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Password</label>
                                    <input class="form-control" id="login-password" name="login-password" type="password" placeholder="Password" required="required" data-validation-required-message="Please enter your password">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>           
                            <br>
                            <div class="form-group" >
                                <button type="submit" class="btn btn-primary btn-xl" id="loginButton" name="loginButton">Log In</button>
                            </div>
                            <div id="loginSuccess" class="loginSuccess" style="border-radius: 5px;font-size: 20px; color:white"></div>
                        </form>
                    </div>
                    <div class="col-lg-1" style="border-right: 1px solid #26343F">
                    </div>

                    <!--REGISTER FORM-->
                    <div class="col-md-6 col-lg-4 mx-auto" >
                        <h2 class="text-center text-uppercase text-secondary mb-0">register</h2>
                        <hr class="star-dark mb-5"> 
                        <form method="post"  id="registerForm" novalidate="true"  >
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Full Name</label>
                                    <input name="register-name" class="form-control" id="register-name" type="text" placeholder="Full Name" required="required" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Phone Number</label>
                                    <input name="register-phone"class="form-control" id="register-phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>E-Mail</label>
                                    <input name="register-email"class="form-control" required="required" data-validation-required-message="Please enter your E-Mail"id="register-email" type="email" placeholder="E-Mail">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Password</label>
                                    <input name="register-password"class="form-control" id="register-password" type="password" placeholder="Password" required="required" data-validation-required-message="Please enter your password">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>             
                            <br>                            
                            <div class="form-group" >
                                <button type="submit"  class="btn btn-primary btn-xl" id="registerButton" style="background: #26343F; border-color: #26343F; color: white">Register</button>
                            </div>
                            <div id="registerSuccess" class="registerSuccess" style="border-radius: 5px;font-size: 20px; color:white">                       
                            </div>                     
                        </form>
                    </div>                  

                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" style="text-align: center">
            <div class="container">
                <h2 class="text-center text-uppercase text-secondary mb-0">Contact Us</h2>
                <hr class="star-dark mb-5">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <form name="sentMessage" id="contactForm" novalidate="novalidate" action="mail/contact_me.php" method="post">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">                            
                                    <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success">
                            </div>                                           
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer text-center">
            <div class="container">
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

        <div class="copyright py-4 text-center text-white">
            <div class="container">
                <small>Copyright &copy; BTT</small>
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
        <script src="logreg/logreg.js"></script>
    </body>




</html>
