<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <!-- normalize css -->
    <link rel="stylesheet" href="assets/css/normalize.css">

    <!-- reset css -->
    <link rel="stylesheet" href="assets/css/local.reset.css">

    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">

    <!-- Icofonts CSS -->
    <link rel="stylesheet" href="assets/css/icofont.min.css">

    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!-- Wow CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Source+Sans+Pro:wght@200;300;400&display=swap" rel="stylesheet">

    <!-- datepicker -->
    <link rel="stylesheet" href="assets/css/datepicker.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <title>NIFCL - Best infertility center</title>

    <link rel="icon" type="image/png" href="assets/img/favicon1.png">
</head>

<body>

    <!-- Preloader -->
    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Header Top -->
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-sm-8 col-md-7">
                    <div class="header-top-item">
                        <div class="header-top-left">
                            <ul>
                                <li>
                                    <a href="tel:01-5555499">
                                        <i class="icofont-ui-call"></i> Call : 01-5555499
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:hello@medsev.com">
                                        <i class="icofont-ui-message"></i> info@niflc.com.np
                                    </a>
                                </li>
                                <li>
                                    <i class="icofont-location-pin"></i> 5th Floor, Nidan Hospital Building, Pulchowk 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4 col-md-5">
                    <div class="header-top-item">
                        <div class="header-top-right">
                            <ul>
                                <li class="apt-btn"><a href="appointment.php"><i class="icofont-calendar mr-2"></i>Get Appointment </a></li>
                                <li class="facebook-ico">
                                    <a href="#">
                                        <i class="icofont-facebook"></i>
                                    </a>
                                </li>
                                <li class="twitter-ico">
                                    <a href="#">
                                        <i class="icofont-twitter"></i>
                                    </a>
                                </li>
                                <li class="insta-ico">
                                    <a href="#">
                                        <!-- <i class="icofont-instagram"></i> -->
                                        <img src="assets/img/insta.png"  alt="insta">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Start Navbar Area -->
    <div class="navbar-area sticky-top">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="index.php" class="logo">
                <img src="assets/img/logo-two.png" alt="Logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/logo.png" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav" id="navs">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link <?php if($page=='home'){echo 'active';}?>">Home</a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="about.php" class="nav-link <?php if($page=='about'){echo 'active';}?>">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="doctor.php" class="nav-link dropdown-toggle <?php if($page=='team'){echo 'active';}?>">Our Team</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="doctor.php" class="nav-link <?php if($page=='doctor'){echo 'active';}?>">Doctors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="team.php" class="nav-link <?php if($page=='team'){echo 'active';}?>">Teams</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="service.php" class="nav-link <?php if($page=='service'){echo 'active';}?>">Our Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="gallery.php" class="nav-link <?php if($page=='gallery'){echo 'active';}?>">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a href="blog.php" class="nav-link <?php if($page=='blog'){echo 'active';}?>">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link <?php if($page=='contact'){echo 'active';}?>">Contact Us</a>
                            </li>


                        </ul>
                        <div class="nav-srh">
                            <div class="search-toggle">
                                <button class="search-icon icon-search"><i class="icofont-search-1"></i></button>
                                <button class="search-icon icon-close"><i class="icofont-close"></i></button>
                            </div>
                            <div class="search-area">
                                <form>
                                    <input type="text" class="src-input" id="search-terms" placeholder="Search here..." />
                                    <button type="submit" name="submit" value="Go" class="search-icon"><i class="icofont-search-1"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->



