<!-- <?php
    $to      = 'ijasahmediku987@gmail.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: webmaster@example.com'       . "\r\n" .
                 'Reply-To: webmaster@example.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
?> -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Asistencia - Contact</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke">
                <h1>
                    <a class="navbar-brand d-flex align-items-center" href="index.html">
                        <span class="lostyle-1">A</span>
                        sistencia
                    </a>
                </h1>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//header-->

    <!-- inner banner -->
    <section class="inner-banner">
        <div class="w3l-breadcrumb py-5">
            <div class="container py-xl-5 py-md-4 mt-5">
                <h4 class="inner-text-title font-weight-bold mb-sm-2">Contact Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- contact -->
    <section class="w3l-contact-info-main py-5" id="contact">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center mb-5">
                <div class="col-md-6 section-heading">
                    <h5 class="small-title-2">Write Message</h5>
                    <h3 class="title-style-2">Get in Touch</h3>
                </div>
                
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-address p-4">
                        <div class="contact-icon d-flex align-items-center">
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                            <div class="ml-3">
                                <h5 class="contact-text">Visit Us:</h5>
                                <p>CCSIT CU Campus</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="contact-address p-4">
                        <div class="contact-icon d-flex align-items-center">
                            <i class="fas fa-phone-alt" aria-hidden="true"></i>
                            <div class="ml-3">
                                <h5 class="contact-text">Call Us:</h5>
                                <a href="tel:+91 83010 31485">+91 83010 31485</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="contact-address p-4">
                        <div class="contact-icon d-flex align-items-center">
                            <i class="fas fa-envelope-open-text" aria-hidden="true"></i>
                            <div class="ml-3">
                                <h5 class="contact-text">Mail Us:</h5>
                                <a href="mailto:ijasahmediku987@gmail.com"> asistencia@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-w3pvt-form mt-5 pt-lg-4">
                <form method="post" class="w3layouts-contact-fm">
                    <div class="row main-cont-sec">
                        <div class="col-md-6 left-cont-contact">
                            <div class="form-group mb-3">
                                <label for="w3lName">Your Name</label>
                                <input class="form-control" type="text" name="w3lName" id="w3lName" placeholder=""
                                    required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="w3lSender">Your Email</label>
                                <input class="form-control" type="email" name="w3lSender" id="w3lSender" placeholder=""
                                    required="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="w3lSubject">Subject</label>
                                <input class="form-control" type="text" name="w3lSubject" id="w3lSubject" required="">
                            </div>
                        </div>
                        <div class="col-md-6 right-cont-contact">
                            <div class="form-group">
                                <label for="w3lSubject">Write Message</label>
                                <textarea class="form-control" name="w3lMessage" id="w3lMessage" placeholder=""
                                    required=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mt-3 text-right">
                        <button type="submit" class="btn btn-style" href="mailto:ijasahmediku987@gmail.com">Submit Form</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="map-contact">
        <iframe class="map-w3layouts"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d553.242294527626!2d75.88859325775655!3d11.13606865024286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba651d1ff78a761%3A0xbecb73aedde745b6!2sCCSIT%20and%20Dept.%20of%20Computer%20Science!5e0!3m2!1sen!2sin!4v1668431743840!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
    </div>
    <!-- //contact -->

    <!-- footer -->
    <footer class="w3l-footer-22 py-5">
        
        <!-- copyright -->
        <div class="copyright-footer text-center">
            <div class="container">
                <div class="columns">
                    <p>@2022 Alright Reserved By
                        <a href="index.html" target="_blank"> Asistencia</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- //copyright -->
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script src="assets/js/goToTop.js">
        
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    

    
    <!-- Dark/Light Mode -->
    <script src="assets/js/theme-change.js"></script>
    <!-- //Dark/Light Mode -->

    <!-- MENU-JS -->
    <script src="assets/js/menu.js">
        
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script src="assets/js/scroll.js">
        
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>