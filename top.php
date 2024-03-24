<?php
include 'connection.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

    <title> Home </title>

    <!-- animate.css-->
    <link href="assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- Load Screen -->
    <link href="assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="assets/custom/css/fables-icons.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet">
    <!-- portfolio filter gallery -->
    <link href="assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.css" rel="stylesheet">
    <!-- Video Background -->
    <link href="assets/vendor/video-background/video-background.css" rel="stylesheet">
    <!-- FANCY BOX -->
    <link href="assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet">
    <!-- RANGE SLIDER -->
    <link href="assets/vendor/range-slider/range-slider.css" rel="stylesheet">
    <!-- OWL CAROUSEL  -->
    <link href="assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="assets/custom/css/custom.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="assets/custom/css/custom-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <style>
        body {
            font-family: "Audiowide", sans-serif;
        }
    </style>

</head>


<body>

    <div class="search-section">
        <a class="close-search" href="#"></a>
        <div class="d-flex justify-content-center align-items-center h-100">
            <form method="post" action="#" class="w-50">
                <div class="row">
                    <div class="col-10">
                        <input type="search" value="" class="form-control palce bg-transparent border-0 search-input" placeholder="Search Here ..." />
                    </div>
                    <div class="col-2 mt-3">
                        <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i> </button>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <!-- Loading Screen -->
    <div id="ju-loading-screen">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>


    <!-- Start Top Header -->
    <div class="fables-forth-background-color fables-top-header-signin">
        <div class="container">
            <div class="row" id="top-row">
                <div class="col-12 col-sm-2 col-lg-5">
                    <div class="dropdown">
                        <!-- <button class="btn btn-secondary dropdown-toggle border-0 bg-transparent font-13 lang-dropdown-btn pl-0" type="button" id="dropdownLangButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   language
                  </button> -->
                        <!-- <div class="dropdown-menu p-0 fables-forth-background-color rounded-0 m-0 border-0 lang-dropdown" aria-labelledby="dropdownLangButton">
                        <a class="dropdown-item white-color font-13 fables-second-hover-color" href="#">
                        <img src="assets/custom/images/england.png" alt="england flag" class="mr-1"> English</a>
                        <a class="dropdown-item white-color font-13 fables-second-hover-color" href="#">
                        <img src="assets/custom/images/France.png" alt="england flag" class="mr-1"> French</a> 
                  </div> -->

                    </div>

                </div>
                <div class="col-12 col-sm-5 col-lg-4 text-right">
                    <!-- <p class="fables-third-text-color font-13"><span class="fables-iconphone"></span> Phone :  (888) 6000 6000 - (888) 6000 6000</p> -->
                </div>
                <div class="col-12 col-sm-5 col-lg-3 text-right">
                    <!-- <p class="fables-third-text-color font-13"><span class="fables-iconemail"></span> Email: Design@domain.com</p> -->
                </div>

            </div>
        </div>
    </div>

    <!-- /End Top Header -->
    <div id="google_translate_elements"></div>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: "en,hi,gu,ru",
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_elements');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <style>
        /* Hide the top Google banner frame */
        .VIpgJd-ZVi9od-ORHb-OEVmcd.skiptranslate {
            display: none !important;
        }

        /* Hide the "Powered by Google Translate" text */
        .VIpgJd-ZVi9od-aZ2wEe-wOHMyf {
            display: none !important;
        }

        .skiptranslate goog-te-gadget {
            display: none !important;
        }

        .skiptranslate.goog-te-gadget {
            background-color: #2C3E4F !important;
        }

        .goog-te-gadget-icon {
            display: none;
        }


        .goog-te-gadget-simple {
            background-color: #2C3E4F !important;
            border: 0 !important;
            font-size: 10pt;
            font-weight: 800;
            display: inline-block;
            padding: 5px 5px !important;
            cursor: pointer;
            zoom: 1;
        }

        .goog-te-gadget-simple span {
            color: #ffffff !important;

        }
    </style>
    <script>
        $(document).ready(function() {
            $('#google_translate_element').bind('DOMNodeInserted', function(event) {
                $('.goog-te-menu-value span:first').html('LANGUAGE');
                $('.goog-te-menu-frame.skiptranslate').load(function() {
                    setTimeout(function() {
                        $('.goog-te-menu-frame.skiptranslate').contents().find('.goog-te-menu2-item-selected .text').html('LANGUAGE');
                    }, 100);
                });
            });
        });
    </script>
    <!-- Start Fables Navigation -->
    <div class="fables-navigation fables-main-background-color py-3 py-lg-0">
        <div class="container">
            <div class="row"><h2>Ahmedabad Institute of Technology
</h2>
                <div class="col-12 col-md-10 col-lg-9 pr-md-0">
                    <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">

                        <!-- <a class="navbar-brand pl-0" href="index.html"><img src="assets/custom/images/fables-logo.png" alt="Fables Template" class="fables-logo"></a> -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fables-iconmenu-icon text-white font-16"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="fablesNavDropdown">

                            <ul class="navbar-nav mx-auto fables-nav">
                                <!-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="sub-nav1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Home
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav1">
                                            <li><a class="dropdown-item" href="home1.html">Home 1</a></li>
                                            <li><a class="dropdown-item" href="home2.html">Home 2</a></li>
                                            <li><a class="dropdown-item" href="home3.html">Home 3</a></li>
                                            <li><a class="dropdown-item" href="home4.html">Home 4</a></li>
                                        </ul>
                                    </li> -->

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="sub-nav2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Daily Updates
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="sub-nav2" aria-haspopup="true" aria-expanded="false">
                                        Other notes
                                    </a>
                                </li>

                                  <li class="nav-item dropdown">
                                    <a class="nav-link" href="books.php" id="sub-nav2" aria-haspopup="true" aria-expanded="false">
                                       books
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Semesters
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav2">
                                        <?php
                                        // Fetch semesters
                                        $semesters_query = "SELECT * FROM sem";
                                        $semesters_result = mysqli_query($con, $semesters_query);

                                        // Fetch subjects
                                        $subjects_query = "SELECT * FROM subjects";
                                        $subjects_result = mysqli_query($con, $subjects_query);

                                        // Fetch assignments
                                        $assignments_query = "SELECT * FROM assignments";
                                        $assignments_result = mysqli_query($con, $assignments_query);

                                        // Initialize arrays to store semesters, subjects, and assignments
                                        $semesters = [];
                                        $subjects = [];
                                        $assignments = [];

                                        // Populate the arrays
                                        while ($row = mysqli_fetch_assoc($semesters_result)) {
                                            $semesters[$row['id']] = $row['sem'];
                                        }

                                        while ($row = mysqli_fetch_assoc($subjects_result)) {
                                            $subjects[$row['id']] = $row;
                                        }

                                        while ($row = mysqli_fetch_assoc($assignments_result)) {
                                            $assignments[$row['subjects_id']][] = $row;
                                        }

                                        // Generate the dynamic menu
                                        foreach ($semesters as $sem_id => $sem_name) {
                                            echo '<li><a class="dropdown-item dropdown-toggle" href="#" ondblclick="window.location.href=\'subjects.php?id=' . $sem_id . '&sem=' . urlencode($sem_name) . '\';">' . $sem_name . '</a>';
                                            echo '<ul class="dropdown-menu">';
                                            foreach ($subjects as $subject_id => $subject_info) {
                                                if ($subject_info['sem_id'] == $sem_id) {
                                                    echo '<li class="dropdown-submenu">';
                                                    echo '<a class="dropdown-item dropdown-toggle" href="#" ondblclick="window.location.href=\'assignments.php?subject_id=' . $subject_id . '&sem=' . urlencode($sem_name) . '&subjects=' . urlencode($subject_info['subjects']) . '\';">' . $subject_info['subjects'] . '</a>';
                                                    echo '<ul class="dropdown-menu">';
                                                    if (isset($assignments[$subject_id])) {
                                                        foreach ($assignments[$subject_id] as $assignment) {
                                                            echo '<li style="background-color: #2c3e4f; color: white;"><a class="dropdown-item" href="' . $assignment['assignment'] . '" target="_blank">' . $assignment['title'] . '</a></li>';
                                                        }
                                                    }
                                                    echo '</ul></li>';
                                                }
                                            }
                                            echo '</ul></li>';
                                        }
                                        ?>
                                    </ul>

                                </li>
                                <li>
                                    <a class="nav-link" href="contact.php" id="sub-nav2" aria-haspopup="true" aria-expanded="false">
                                        Contact
                                    </a>
                                </li>

                                <!-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="sub-nav3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            About
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav3">
                                            <li><a class="dropdown-item" href="about1.html">About 1</a></li>
                                            <li><a class="dropdown-item" href="about2.html">About 2</a></li>
                                            <li><a class="dropdown-item" href="about3.html">About 3</a></li> 
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="sub-nav4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Store
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav4">
                                            <li><a class="dropdown-item" href="store_grid_list.html">Product Category </a></li>
                                            <li><a class="dropdown-item" href="store_single.html">Product Single</a></li> 
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="sub-nav5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Blog
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav5">
                                            <li><a class="dropdown-item" href="blog-cat1.html">Blog Cat 1</a></li>
                                            <li><a class="dropdown-item" href="blog-cat2.html">Blog Cat 2</a></li>
                                            <li><a class="dropdown-item" href="blog-cat3.html">Blog Cat 3</a></li>
                                            <li><a class="dropdown-item" href="blog-cat-masonry.html">Blog Cat Masonry</a></li> 
                                            <li><a class="dropdown-item" href="blog-details1.html">Blog Details 1</a></li> 
                                            <li><a class="dropdown-item" href="blog-details2.html">Blog Details 2</a></li> 
                                            <li><a class="dropdown-item" href="blog-details3.html">Blog Details 3</a></li> 
                                            <li><a class="dropdown-item" href="blog-single-img.html">Blog Single image</a></li> 
                                            <li><a class="dropdown-item" href="blog-single-slider.html">Blog Single Slider</a></li>
                                            <li><a class="dropdown-item" href="blog-single-video.html">Blog Single Video</a></li> 
                                            <li><a class="dropdown-item" href="blog-timeLine.html">Blog Timeline</a></li>
                                        </ul>
                                    </li> 
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="sub-nav6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Pages
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav6">
                                            <li><a class="dropdown-item" href="404.html">404</a></li>
                                            <li><a class="dropdown-item" href="comming-soon.html">Comming Soon</a></li>
                                            <li><a class="dropdown-item" href="gallery.html">Gallery</a></li>
                                            <li><a class="dropdown-item" href="gallery-filter.html">Gallery Filter</a></li> 
                                            <li><a class="dropdown-item" href="gallery-filter-masonry.html">Gallery Filter Masonry</a></li>
                                            <li><a class="dropdown-item" href="gallery-history.html">Gallery History</a></li>
                                            <li><a class="dropdown-item" href="gallery-history2.html">Gallery History 2</a></li>
                                            <li><a class="dropdown-item" href="gallery-single.html">Gallery Single</a></li>
                                            <li><a class="dropdown-item" href="gallery-timeline.html">Gallery Timeline </a></li>
                                            <li><a class="dropdown-item" href="gallery-timeline2.html">Gallery Timeline 2</a></li>
                                        </ul>
                                    </li> 
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="sub-nav7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Contact Us
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav7">
                                            <li><a class="dropdown-item" href="contactus1.html">Contact Us 1</a></li>
                                            <li><a class="dropdown-item" href="contactus2.html">Contact Us 2</a></li>
                                            <li><a class="dropdown-item" href="contactus3.html">Contact Us 3</a></li> 
                                        </ul>
                                    </li>   -->
                            </ul>

                        </div>
                    </nav>
                </div>
                <!-- <div class="col-12 col-md-2 col-lg-3 pr-md-0 icons-header-mobile">
                       
                    <div class="fables-header-icons">
                        <div class="dropdown"> 
                                  <a href="#_" class="fables-third-text-color dropdown-toggle right px-3 px-md-2 px-lg-4 fables-second-hover-color top-header-link max-line-height position-relative" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <span class="fables-iconcart-icon font-20"></span>
                                       <span class="fables-cart-number fables-second-background-color text-center">3</span>
                                    </a>
 
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                     <div class="p-3 cart-block">
                                             <p class="fables-second-text-color semi-font mb-4 font-17">(2) Items in my cart</p>
                                             <div class="row mx-0 mb-3">
                                                 <div class="col-4 p-0">
                                                     <a href="#"><img src="assets/custom/images/sml1.jpg" alt="" class="w-100"></a>
                                                 </div>
                                                 <div class="col-8">
                                                     <h2><a href="#" class="fables-main-text-color font-13 d-block fables-main-hover-color">LUIS LEATHER DRIVING</a></h2>
                                                     <p class="fables-second-text-color font-weight-bold">$ 100.00</p>
                                                     <p class="fables-forth-text-color">QTY : 1</p>
                                                 </div>
                                             </div>
                                             <div class="row mx-0 mb-3">
                                                 <div class="col-4 p-0">
                                                     <a href="#"><img src="assets/custom/images/sml1.jpg" alt="" class="w-100"></a>
                                                 </div>
                                                 <div class="col-8">
                                                     <h2><a href="#" class="fables-main-text-color font-13 d-block fables-main-hover-color">LUIS LEATHER DRIVING</a></h2>
                                                     <p class="fables-second-text-color font-weight-bold">$ 100.00</p>
                                                     <p class="fables-forth-text-color">QTY : 1</p>
                                                 </div>
                                             </div>
                                             <span class="font-16 semi-font fables-main-text-color">TOTAL</span>
                                             <span class="font-14 semi-font fables-second-text-color float-right">$200.00</span>
                                             <hr>
                                             <div class="text-center">
                                                 <a href="#" class="fables-second-background-color fables-btn-rounded  text-center white-color py-2 px-3 font-14 bg-hover-transparent border fables-second-border-color fables-second-hover-color">View my cart</a> 
                                                <a href="#" class="fables-second-text-color border fables-second-border-color fables-btn-rounded text-center white-color p-2 px-4 font-14 fables-second-hover-background-color">Checkout</a>
                                             </div>
                                        </div>
                                  </div>
                         </div>
                         <a href="#" class="open-search fables-third-text-color right  top-header-link px-3 px-md-2 px-lg-4 fables-second-hover-color border-0 max-line-height">
                            <span class="fables-iconsearch-icon"></span>
                        </a>
                         <a href="signin.html" class="fables-third-text-color fables-second-hover-color font-13 top-header-link px-3 px-md-2 px-lg-4 max-line-height"><span class="fables-iconuser"></span></a>
                         
                         
                         
                    </div>
                   </div> -->
            </div>
        </div>
    </div>
    <!-- /End Fables Navigation -->

    <!--Video Section-->
    <!-- <section class="content-section video-section fables-after-overlay">
      <div class="pattern-overlay">
      <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=ir21tgn5hX4',containment:'.video-section', quality:'large',mute: 'true' ,autoPlay:true, opacity:1}">bg</a>
        <div class="container position-relative z-index">
           <div class="fables-video-caption text-center wow zoomIn" data-wow-delay="1s" data-wow-duration="2s">
              <h1 class="white-color font-weight-bold mt-6">We are a Uploading notes and assignments of AIT Students </h1>  
              <p class="fables-fifth-text-color mt-3 mb-4 font-18">
                  We are providing assignments of Information Technology students
              </p> -->
    <!-- <a data-fancybox href="https://www.youtube.com/watch?v=meBbDqAXago">
                 <span class="fables-iconplay fables-second-text-color fa-4x wow bounce"></span>
              </a>  -->

    <!-- </div>
        </div>
      </div>
    </section> -->
    <!--Video Section Ends Here-->


    <!-- Start page content -->
    <!-- <div class="container">
           <div class="row my-4 my-md-5">
                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
                    <h2 class="font-35 font-weight-bold fables-second-text-color mb-4">Our Services</h2>
                    <p class="fables-forth-text-color">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos reiciendis cum aliquid quam, consequatur.quisquam consectetur culpa commodi maxime in harum sunt nam.
                    </p>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 pt-3 pt-md-5 wow zoomIn" data-wow-delay=".4s" data-wow-duration="1.5s"> 
                    <div class="row text-center text-md-left">
                        <div class="col-12 col-md-3"> 
                            <span class="fables-iconhead-set-light fables-second-text-color fa-3x"></span>
                        </div>
                        <div class="col-12 col-md-9 pl-md-0">
                            <h2 class="fables-main-text-color font-20 my-2 mt-md-0 semi-font">Free Updates & Support</h2>
                            <div class="font-15 fables-forth-text-color">
                                Lorem ipsum dolor sit amet adipiscing elit. Aenean ac lorem pretium laoreet enim at.  
                            </div>

                        </div>
                    </div> 
                </div>
                <div class="col-12 col-sm-6 col-lg-4 pt-3 pt-md-5 wow zoomIn" data-wow-delay=".8s" data-wow-duration="1.5s">  
                    <div class="row text-center text-md-left">
                        <div class="col-12 col-md-3">
                            <span class="fables-iconscreen fables-second-text-color fa-3x"></span>
                        </div>
                        <div class="col-12 col-md-9 pl-md-0">
                           <h2 class="fables-main-text-color font-20 my-2 mt-md-0 semi-font">Highly Customizable</h2>
                           <div class="font-15 fables-forth-text-color">
                                Lorem ipsum dolor sit amet adipiscing elit. Aenean ac lorem pretium laoreet enim at.  
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-12 col-sm-6 col-lg-4 pt-3 pt-md-5 wow zoomIn" data-wow-delay="1.2s" data-wow-duration="1.5s"> 
                    <div class="row text-center text-md-left">
                        <div class="col-12 col-md-3">
                            <span class="fables-iconfile fables-second-text-color fa-3x"></span>
                        </div>
                        <div class="col-12 col-md-9 pl-md-0">
                           <h2 class="fables-main-text-color font-20 my-2 mt-md-0 semi-font">Drag & Drop Page Builder</h2>
                            <div class="font-15 fables-forth-text-color">
                                Lorem ipsum dolor sit amet adipiscing elit. Aenean ac lorem pretium laoreet enim at.   
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-12 col-sm-6 col-lg-4 pt-3 pt-md-5 wow zoomIn" data-wow-delay="1.6s" data-wow-duration="1.5s"> 
                    <div class="row text-center text-md-left">
                        <div class="col-12 col-md-3">
                            <span class="fables-iconhead-set-light fables-second-text-color fa-3x"></span>
                        </div>
                        <div class="col-12 col-md-9 pl-md-0">
                            <h2 class="fables-main-text-color font-20 my-2 mt-md-0 semi-font">Free Updates & Support</h2>
                            <div class="font-15 fables-forth-text-color">
                                Lorem ipsum dolor sit amet adipiscing elit. Aenean ac lorem pretium laoreet enim at.  
                            </div>

                        </div>
                    </div> 
                </div>
                <div class="col-12 col-sm-6 col-lg-4 pt-3 pt-md-5 wow zoomIn" data-wow-delay="2s" data-wow-duration="1.5s"> 
                    <div class="row text-center text-md-left">
                        <div class="col-12 col-md-3">
                            <span class="fables-iconscreen fables-second-text-color fa-3x"></span>
                        </div>
                        <div class="col-12 col-md-9 pl-md-0">
                           <h2 class="fables-main-text-color font-20 my-2 mt-md-0 semi-font">Highly Customizable</h2>
                           <div class="font-15 fables-forth-text-color">
                                Lorem ipsum dolor sit amet adipiscing elit. Aenean ac lorem pretium laoreet enim at.  
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-12 col-sm-6 col-lg-4 pt-3 pt-md-5 wow zoomIn" data-wow-delay="2.4s" data-wow-duration="1.5s"> 
                    <div class="row text-center text-md-left">
                        <div class="col-12 col-md-3">
                            <span class="fables-iconfile fables-second-text-color fa-3x"></span>
                        </div>
                        <div class="col-12 col-md-9 pl-md-0">
                           <h2 class="fables-main-text-color font-20 my-2 mt-md-0 semi-font">Drag & Drop Page Builder</h2>
                            <div class="font-15 fables-forth-text-color">
                                Lorem ipsum dolor sit amet adipiscing elit. Aenean ac lorem pretium laoreet enim at.   
                            </div>
                        </div>
                    </div> 
                </div>
          </div> 
       
           <h2 class="font-35 font-weight-bold text-center fables-second-text-color">Company</h2> 
           <div class="row mt-3 mt-lg-5">
               <div class="col-12 col-lg-6 mt-3 mt-lg-0 overflow-hidden">
                   <p class="fables-main-text-color font-25 mb-2 wow fadeInLeft">WHY</p>
                   <h2 class="fables-second-text-color font-35 font-weight-bold wow fadeInLeft">CHOOSE  <span class="fables-main-text-color">US</span></h2>
                   <p class="fables-forth-text-color mt-4 mb-4">
                       We care, we take a personalized approach to each customer, and our management team is never more than a phone call or email away. 
                   </p>  
                   <div class="position-relative mb-3 wow bounceInDown" data-wow-delay=".3s"> 
                       <p class="fables-fifth-text-color fables-dots-text">
                            <span class="fables-dots-circle fables-second-before fables-second-border-color"></span>
                               Lorem ipsum dolor sit amet adipiscing elit.tur adipiscing elit.
                       </p>
                   </div>
                   <div class="position-relative mb-3 wow bounceInDown" data-wow-delay=".6s">
                       <p class="fables-fifth-text-color fables-dots-text">
                            <span class="fables-dots-circle fables-second-before fables-second-border-color"></span>
                               Lorem ipsum dolor sit amet adipiscing elit.tur adipiscing elit.
                       </p>
                   </div>
                   <div class="position-relative mb-3 wow bounceInDown" data-wow-delay=".9s">
                       <p class="fables-fifth-text-color fables-dots-text">
                            <span class="fables-dots-circle fables-second-before fables-second-border-color"></span>
                               Lorem ipsum dolor sit amet adipiscing elit.tur adipiscing elit.
                       </p>
                   </div>
                   <div class="position-relative mb-3 wow bounceInDown" data-wow-delay="1.2s">
                       <p class="fables-fifth-text-color fables-dots-text">
                            <span class="fables-dots-circle fables-second-before fables-second-border-color"></span>
                               Lorem ipsum dolor sit amet adipiscing elit.tur adipiscing elit.
                       </p>
                   </div>
                   
                   
               </div>
               <div class="col-12 col-lg-6"> 
                   <div class="together-block">
                       <div class="fables-main-color-transparent p-4 p-lg-5 position-relative">
                           <img src="assets/custom/images/man-image.png" alt="" class="img-fluid together-abs-img wow fadeIn" >
                           <p class="white-color font-17 mb-2">Let's Grow</p>
                           <h2 class="white-color font-30 semi-font">Together</h2>
                           <p class="white-color font-14 together-details my-3">
                               Lorem ipsum dolor sit amet adipiscing elit. Aenean ac lorem pretium laoreet enim at 
                           </p>  
                           <a href="#" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded py-2 px-5 my-0 my-md-4">Learn More</a> 
                       </div>
                   </div>
                   
               </div>
           </div>
       </div> -->
    <!--        
       <div class="fables-testimonial fables-after-overlay py-4 py-md-5 my-4 my-lg-5 half-width-testimonial bg-rules">
            <div class="container z-index position-relative"> 
                <div class="row">
                    <div class="col-12 col-md-6 wow fadeIn" data-wow-duration="2.5s" data-wow-delay=".4s">  
                           <p class="white-color font-25 mb-2">See what</p>
                           <h2 class="fables-second-text-color font-35 font-weight-bold">others  <span class="white-color">are saying</span></h2>
                           <p class="fables-third-text-color mt-4 mb-4">
                               We care, we take a personalized approach to each customer, and our management team is never more than a phone call or email away. 
                           </p> 
                           <div class="owl-carousel owl-theme dots-0 nav-default" id="fables-testimonial-carousel">
                              <div class="text-center"> 
                                   <div>
                                      <div class="image-container shine-effect d-inline-block rounded-circle">
                                          <img src="assets/custom/images/testimonial-img.png" alt="Fables Template" class="fables-testimonial-carousel-img my-0 mx-auto rounded-circle">  
                                      </div>
                                      <h3 class="font-14 semi-font  white-color mt-3">Billy Richards</h3>
                                      <h3 class="font-13 font-italic white-color mt-2 mb-4">Chief Manager, Simba Co</h3>
                                   </div>
                                   <div class="fables-testimonial-carousel-item fables-rounded p-3">
                                        <div class="fables-testimonial-detail font-15 font-italic white-color position-relative"> 
                                            No matter what issue or questions pops up, you are always there to 
                                            assist me. Thank you so much for your excellent assistance and great 
                                            customer support through years.
                                        </div>
                                   </div>
                              </div>
                              <div class="text-center"> 
                                   <div>
                                      <div class="image-container shine-effect d-inline-block rounded-circle">
                                          <img src="assets/custom/images/testimonial-img.png" alt="Fables Template" class="fables-testimonial-carousel-img my-0 mx-auto rounded-circle">  
                                      </div>
                                      <h3 class="font-14 semi-font  white-color mt-3">Billy Richards</h3>
                                      <h3 class="font-13 font-italic white-color mt-2 mb-4">Chief Manager, Simba Co</h3>
                                   </div>
                                   <div class="fables-testimonial-carousel-item fables-rounded p-3">
                                        <div class="fables-testimonial-detail font-15 font-italic white-color position-relative"> 
                                            No matter what issue or questions pops up, you are always there to 
                                            assist me. Thank you so much for your excellent assistance and great 
                                            customer support through years.
                                        </div>
                                   </div>
                              </div>
                              
 
                     </div>
                    </div>
                    <div class="col-12 col-md-6 wow fadeIn mt-4 mt-md-5 mt-lg-0" data-wow-duration="2.5s" data-wow-delay=".4s">
                       <div class="position-relative image-container zoomIn-effect"> 
                              <img src="assets/custom/images/index-video.jpg" alt="" class="img-fluid">
                              <div class="demo-gallery-poster fables-main-gradient">
                                <a data-fancybox href="https://www.youtube.com/watch?v=meBbDqAXago">
                                   <img src="assets/custom/images/play-button.png" alt="play button" class="img-fluid">
                                </a> 
                             </div> 
                        </div>  
                         
                    </div>
                </div>
               
            </div>
       </div> -->
    <!-- <div class="container">
           <h2 class="fables-main-text-color font-35 font-weight-bold text-center my-4 my-lg-5">Select <span class="fables-second-text-color">a Plan</span> Now </h2>
           <p class="fables-main-text-color text-center mb-4 mb-md-5 font-19">To Get More Done.</p>
           <div class="row overflow-hidden mb-lg-5">
               <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-duration="2s" data-wow-delay=".4s">
                  <div class="table-block table-border-light py-5 fables-second-hover-border">
                      <h2 class="fables-second-text-color font-35 font-weight-bold position-relative">300 <span class="table-badge fables-fifth-text-color position-absolute">$</span></h2>
                      <p class="mb-4 fables-fifth-text-color font-13">Per month</p>
                      <h2 class="fables-forth-text-color text-center font-weight-bold table-title fables-third-after position-relative font-17">Team Plan</h2> 
                      <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
                           Wordpress ThemeFree 
                            Theme InstallationFree 
                            24/7 SupportFree
                      </p>
                      <a href="#" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-5 py-2  btn-bg-hover ">
                          <span class="white-color-hover">Get Started</span>
                      </a>
                  </div>
                   
               </div>
               <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-duration="2s" data-wow-delay=".8s">
                   <div class="table-block table-border-light py-5 fables-second-hover-border">
                       <h2 class="fables-second-text-color font-35 font-weight-bold position-relative">300 <span class="table-badge fables-fifth-text-color position-absolute">$</span></h2>
                      <p class="mb-4 fables-fifth-text-color font-13">Per month</p>
                      <h2 class="fables-forth-text-color text-center font-weight-bold table-title fables-third-after position-relative font-17">Team Plan</h2> 
                      <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
                           Wordpress ThemeFree 
                            Theme InstallationFree 
                            24/7 SupportFree
                      </p>
                      <a href="#" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-5 py-2">Get Started</a>
                       
                   </div>
                   
               </div>
               <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-duration="2s" data-wow-delay="1.2s">
                   <div class="table-block table-border-light py-5 fables-second-hover-border">
                       <h2 class="fables-second-text-color font-35 font-weight-bold position-relative">300 <span class="table-badge fables-fifth-text-color position-absolute">$</span></h2>
                      <p class="mb-4 fables-fifth-text-color font-13">Per month</p>
                      <h2 class="fables-forth-text-color text-center font-weight-bold table-title fables-third-after position-relative font-17">Small Business Plan</h2> 
                      <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
                           Wordpress ThemeFree 
                            Theme InstallationFree 
                            24/7 SupportFree
                      </p>
                      <a href="#" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-5 py-2">Get Started</a>
                   </div>
                  
               </div>
               <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-duration="2s" data-wow-delay="1.6s">
                   <div class="table-block table-border-light py-5 fables-second-hover-border">
                      <h2 class="fables-second-text-color font-35 font-weight-bold position-relative">300 <span class="table-badge fables-fifth-text-color position-absolute">$</span></h2>
                      <p class="mb-4 fables-fifth-text-color font-13">Per month</p>
                      <h2 class="fables-forth-text-color text-center font-weight-bold table-title fables-third-after position-relative font-17">Team Plan</h2> 
                      <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
                           Wordpress ThemeFree 
                            Theme InstallationFree 
                            24/7 SupportFree
                      </p>
                      <a href="#" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-5 py-2">Get Started</a>
                   </div>
                   
               </div>
           </div>
       </div>  -->
    <!-- <div class="fables-testimonial fables-after-overlay fables-about-caption py-5 bg-rules" style="background-image: url(assets/custom/images/index2-overlay.jpg);">
           <div class="container">
               <div class="row">
                   <div class="position-relative z-index col-12 col-md-8 offset-md-2 text-center wow zoomIn" data-wow-duration="2s"> 
                           <h3 class=" white-color mb-3 font-25 font-weight-bold">We are the best business consulting company ever!!</h3> 
                           <p class="font-weight-light fables-third-text-color">
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac lorem pretium laoreet enim at, malesuada Class aptent taciti sociosqu.
                           </p>
                           <a href="contactus1.html" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded  mt-4 py-2 px-5">Contact us</a>   
                   </div> 
               </div>
               
           </div>
       </div> -->


    <!-- <div class="container">
           <div class="fables-team">
                <h2 class="font-35 font-weight-bold text-center fables-main-text-color my-3 my-lg-5">Team</h2> 
                <div class="row overflow-hidden">
                    <div class="col-6 col-md-3 wow bounceInDown mb-3" data-wow-duration="2s" data-wow-delay=".4s">
                        <div class="card fables-team-block fables-second-hover-text-color">
                           <div class="image-container shine-effect">
                               <a href="#"><img class="w-100" src="assets/custom/images/team2-1.jpg" alt="Fables Template"></a> 
                           </div>
                          <div class="card-body">
                            <h5><a href="#" class="font-19 semi-font fables-main-text-color team-name">JOHN MARTIN</a></h5>
                            <p class="font-13 fables-fifth-text-color italic my-2">Programmer</p> 
                            <ul class="nav fables-team-social-links"> 
                                <li><a href="#" target="_blank"><span class="fables-iconlinkedin-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li> 
                                <li><a href="#" target="_blank"><span class="fables-icontwitter-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                                <li><a href="#" target="_blank"><span class="fables-iconinstagram-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li> 
                            </ul>
                          </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 wow bounceInDown mb-3" data-wow-duration="2s" data-wow-delay=".8s">
                        <div class="card fables-team-block fables-second-hover-text-color">
                          <div class="image-container shine-effect">
                               <a href="#"><img class="w-100" src="assets/custom/images/team2-2.jpg" alt="Fables Template"></a>
                           </div>
                          <div class="card-body">
                            <h5><a href="#" class="font-19 semi-font fables-main-text-color team-name">JOHN MARTIN</a></h5>
                            <p class="font-13 fables-fifth-text-color italic my-2">Programmer</p> 
                            <ul class="nav fables-team-social-links"> 
                                <li><a href="#" target="_blank"><span class="fables-iconlinkedin-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li> 
                                <li><a href="#" target="_blank"><span class="fables-icontwitter-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                                <li><a href="#" target="_blank"><span class="fables-iconinstagram-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li> 
                            </ul>
                          </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 wow bounceInDown mb-3" data-wow-duration="2s" data-wow-delay="1.2s">
                        <div class="card fables-team-block fables-second-hover-text-color">
                          <div class="image-container shine-effect">
                               <a href="#"><img class="w-100" src="assets/custom/images/team2-1.jpg" alt="Fables Template"></a>
                           </div>
                          <div class="card-body">
                            <h5><a href="#" class="font-19 semi-font fables-main-text-color team-name">JOHN MARTIN</a></h5>
                            <p class="font-13 fables-fifth-text-color italic my-2">Programmer</p> 
                            <ul class="nav fables-team-social-links"> 
                                <li><a href="#" target="_blank"><span class="fables-iconlinkedin-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li> 
                                <li><a href="#" target="_blank"><span class="fables-icontwitter-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                                <li><a href="#" target="_blank"><span class="fables-iconinstagram-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li> 
                            </ul>
                          </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 wow bounceInDown mb-3" data-wow-duration="2s" data-wow-delay="1.6s">
                        <div class="card fables-team-block fables-second-hover-text-color">
                          <div class="image-container shine-effect">
                              <a href="#"><img class="w-100" src="assets/custom/images/team2-2.jpg" alt="Fables Template"></a>
                           </div>
                          <div class="card-body">
                            <h5><a href="#" class="font-19 semi-font fables-main-text-color team-name">JOHN MARTIN</a></h5>
                            <p class="font-13 fables-fifth-text-color italic my-2">Programmer</p> 
                            <ul class="nav fables-team-social-links"> 
                                <li><a href="#" target="_blank"><span class="fables-iconlinkedin-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li> 
                                <li><a href="#" target="_blank"><span class="fables-icontwitter-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li>
                                <li><a href="#" target="_blank"><span class="fables-iconinstagram-icon fables-forth-text-color fables-fifth-border-color fables-team-social-icon"></span></a></li> 
                            </ul>
                          </div>
                        </div>
                    </div>
                </div>  
               
         </div> 
       </div> -->

    <!-- <div class="fables-index-products large-mb fables-after-overlay py-4 py-md-5 mt-md-5 bg-rules" style="background-image: url(assets/custom/images/index-products-overlay.jpg);">
           <div class="container z-index position-relative overflow-hidden"> 
               <div class="row"> -->
    <!-- <div class="col-12 col-md-7 wow fadeInLeft">
                       <h2 class="fables-second-text-color font-35 font-weight-bold">Our <span class="white-color">Products</span></h2>
                       <p class="fables-third-text-color mt-4 mb-md-5">
                           It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using 
                       </p>
                   </div> -->
    <!-- <div class="col-12 col-md-5 col-lg-3 text-right offset-lg-2 my-4 my-md-0 mt-md-5 mt-lg-0 text-center">
                       <a href="#" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-5 py-2">View all products</a>
                   </div> -->
    <!-- </div>    -->
    <!-- <div class="owl-carousel owl-theme dots-0 circle-nav carousel-items-4"> 
                     <div class="card rounded-0 mb-4 border-light wow fadeIn" data-wow-delay=".4s">
                       <div class="row">
                           <div class="fables-product-img col-12">
                              <img class="card-img-top w-100 rounded-0" src="assets/custom/images/index-product1.jpg" alt="dress fashion">
                              <div class="fables-img-overlay">                                          
                                  <ul class="nav fables-product-btns pr-3 mt-5 vertical-store-btns">
                                      <li><a href="" class="fables-product-btn"><span class="fables-iconeye"></span></a></li>
                                      <li><a href="" class="fables-product-btn"><span class="fables-iconcompare"></span></a></li>
                                      <li><button class="fables-product-btn"><span class="fables-iconheart"></span></button></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="card-body col-12">
                            <h5 class="card-title mx-3">
                                <a href="#" class="fables-main-text-color fables-store-product-title fables-second-hover-color">dress fashion</a>
                            </h5>
                            <p class="card-text fables-fifth-text-color font-15 mx-3">LUIS LEATHER DRIVING MOCCASINS FROM ... DOUBLE</p>
                            <p class="font-weight-bold fables-second-text-color my-2 mb-3 mx-3">$ 98.00</p>
                            <p class="fables-product-info"><a href="#" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-14 px-4 py-2">
                            <span class="fables-iconcart"></span> 
                            <span class="fables-btn-value">ADD TO CART</span></a></p>
                          </div>
                       </div>
                     </div>  
                     <div class="card rounded-0 mb-4 border-light wow fadeIn" data-wow-delay=".8s">
                       <div class="row">
                           <div class="fables-product-img col-12">
                              <img class="card-img-top rounded-0 w-100" src="assets/custom/images/index-product2.jpg" alt="dress fashion">
                              <div class="fables-img-overlay">                                          
                                  <ul class="nav fables-product-btns pr-3 mt-5 vertical-store-btns">
                                      <li><a href="" class="fables-product-btn"><span class="fables-iconeye"></span></a></li>
                                      <li><a href="" class="fables-product-btn"><span class="fables-iconcompare"></span></a></li>
                                      <li><button class="fables-product-btn"><span class="fables-iconheart"></span></button></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="card-body col-12">
                            <h5 class="card-title mx-3">
                                <a href="#" class="fables-main-text-color fables-store-product-title fables-second-hover-color">dress fashion</a>
                            </h5>
                            <p class="card-text fables-fifth-text-color font-15 mx-3">LUIS LEATHER DRIVING MOCCASINS FROM ... DOUBLE</p>
                            <p class="font-weight-bold fables-second-text-color my-2 mb-3 mx-3">$ 98.00</p>
                            <p class="fables-product-info"><a href="#" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-14 px-4 py-2">
                            <span class="fables-iconcart"></span> 
                            <span class="fables-btn-value">ADD TO CART</span></a></p>
                          </div>
                       </div>
                    </div> 
                     <div class="card rounded-0 mb-4 border-light wow fadeIn" data-wow-delay="1.2s">
                               <div class="row">
                                   <div class="fables-product-img col-12">
                                      <img class="card-img-top rounded-0 w-100" src="assets/custom/images/index-product1.jpg" alt="dress fashion">
                                      <div class="fables-img-overlay">                                          
                                          <ul class="nav fables-product-btns pr-3 mt-5 vertical-store-btns">
                                              <li><a href="" class="fables-product-btn"><span class="fables-iconeye"></span></a></li>
                                              <li><a href="" class="fables-product-btn"><span class="fables-iconcompare"></span></a></li>
                                              <li><button class="fables-product-btn"><span class="fables-iconheart"></span></button></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="card-body col-12">
                                    <h5 class="card-title mx-3">
                                        <a href="#" class="fables-main-text-color fables-store-product-title fables-second-hover-color">dress fashion</a>
                                    </h5>
                                    <p class="card-text fables-fifth-text-color font-15 mx-3">LUIS LEATHER DRIVING MOCCASINS FROM ... DOUBLE</p>
                                    <p class="font-weight-bold fables-second-text-color my-2 mb-3 mx-3">$ 98.00</p>
                                    <p class="fables-product-info"><a href="#" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-14 px-4 py-2">
                                    <span class="fables-iconcart"></span> 
                                    <span class="fables-btn-value">ADD TO CART</span></a></p>
                                  </div>
                               </div>
                    </div>  
                     <div class="card rounded-0 mb-4 border-light wow fadeIn" data-wow-delay="1.6s">
                               <div class="row">
                                   <div class="fables-product-img col-12">
                                      <img class="card-img-top rounded-0 w-100" src="assets/custom/images/index-product2.jpg" alt="dress fashion">
                                      <div class="fables-img-overlay">                                          
                                          <ul class="nav fables-product-btns pr-3 mt-5 vertical-store-btns">
                                              <li><a href="" class="fables-product-btn"><span class="fables-iconeye"></span></a></li>
                                              <li><a href="" class="fables-product-btn"><span class="fables-iconcompare"></span></a></li>
                                              <li><button class="fables-product-btn"><span class="fables-iconheart"></span></button></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="card-body col-12">
                                    <h5 class="card-title mx-3">
                                        <a href="#" class="fables-main-text-color fables-store-product-title fables-second-hover-color">dress fashion</a>
                                    </h5>
                                    <p class="card-text fables-fifth-text-color font-15 mx-3">LUIS LEATHER DRIVING MOCCASINS FROM ... DOUBLE</p>
                                    <p class="font-weight-bold fables-second-text-color my-2 mb-3 mx-3">$ 98.00</p>
                                    <p class="fables-product-info"><a href="#" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-14 px-4 py-2">
                                    <span class="fables-iconcart"></span> 
                                    <span class="fables-btn-value">ADD TO CART</span></a></p>
                                  </div>
                               </div>
                        </div>   
                     <div class="card rounded-0 mb-4 border-light">
                               <div class="row">
                                   <div class="fables-product-img col-12">
                                      <img class="card-img-top rounded-0 w-100" src="assets/custom/images/index-product1.jpg" alt="dress fashion">
                                      <div class="fables-img-overlay">                                          
                                          <ul class="nav fables-product-btns pr-3 mt-5 vertical-store-btns">
                                              <li><a href="" class="fables-product-btn"><span class="fables-iconeye"></span></a></li>
                                              <li><a href="" class="fables-product-btn"><span class="fables-iconcompare"></span></a></li>
                                              <li><button class="fables-product-btn"><span class="fables-iconheart"></span></button></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="card-body col-12">
                                    <h5 class="card-title mx-3">
                                        <a href="#" class="fables-main-text-color fables-store-product-title fables-second-hover-color">dress fashion</a>
                                    </h5>
                                    <p class="card-text fables-fifth-text-color font-15 mx-3">LUIS LEATHER DRIVING MOCCASINS FROM ... DOUBLE</p>
                                    <p class="font-weight-bold fables-second-text-color my-2 mx-3">$ 98.00</p>
                                    <p class="fables-product-info"><a href="#" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-14 px-4 py-2">
                                    <span class="fables-iconcart"></span> 
                                    <span class="fables-btn-value">ADD TO CART</span></a></p>
                                  </div>
                               </div>
                            </div>  
                     
                </div>   -->
    <!-- </div>
       </div>  -->
    <!--        
       <div class="fables-light-background-color py-4">
           <div class="container">
               <div class="owl-carousel owl-theme nav-0 carousel-items-6 dots-0">
                  <div> 
                      <img src="assets/custom/images/partner2-1.jpg" alt="Fables Template" class="fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="assets/custom/images/partner2-2.jpg" alt="Fables Template" class="fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="assets/custom/images/partner2-1.jpg" alt="Fables Template" class="fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="assets/custom/images/partner2-2.jpg" alt="Fables Template" class="fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="assets/custom/images/partner2-1.jpg" alt="Fables Template" class="fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="assets/custom/images/partner2-2.jpg" alt="Fables Template" class="fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="assets/custom/images/partner2-1.jpg" alt="Fables Template" class="fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="assets/custom/images/partner2-2.jpg" alt="Fables Template" class="fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="assets/custom/images/partner2-1.jpg" alt="Fables Template" class="fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="assets/custom/images/partner2-2.jpg" alt="Fables Template" class="fables-partner-carousel-img">  
                  </div>

                </div>  
           </div>
       </div> -->
    <!-- <div class="container">
           <div class="row">
              <div class="col-12">
                  <h2 class="font-35 font-weight-bold fables-main-text-color my-4 my-lg-5 text-center">Latest Blog</h2>
              </div>
               <div class="col-12 col-md-4 mb-4 mb-md-5 wow fadeIn" data-wow-delay=".6s">  
                     <div class="image-container zoomIn-effect">
                          <a href="#"><img src="assets/custom/images/magazine-2559842.jpg" alt=""></a> 
                      </div>
                      
                      <div class="above-date py-2 py-lg-3 fables-fifth-text-color float-left w-100 d-md-none d-lg-block">
                          <div class="float-left font-13">
                                 <span class="fables-iconcalender"></span> December 27, 2017  
                           </div> 
                           <div class="float-right font-13">
                               <span class="fables-iconnews"></span> Latest News 
                           </div>
                      </div>
                      <h2 class="font-weight-bold font-20 my-2"><a href="#" class="fables-main-text-color fables-second-hover-color">Grow Your Business</a></h2>
                       
                      <p class="fables-forth-text-color font-14">
                         When you need your company to have a new  website or if you venture on updating your old webpage with a new look and functionality. the
                      </p>
                      <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 mt-2">
                          <span class="underline">Read More</span>
                          <span class="fables-iconarrow-light ml-2"></span>
                      </a>  
              </div>
              <div class="col-12 col-md-4 mb-4 mb-md-5 wow fadeIn" data-wow-delay=".6s">  
                     <div class="image-container zoomIn-effect">
                          <a href="#"><img src="assets/custom/images/magazine-2559842.jpg" alt=""></a> 
                      </div>
                      <div class="above-date py-2 py-lg-3 fables-fifth-text-color float-left w-100 d-md-none d-lg-block">
                          <div class="float-left font-13">
                                 <span class="fables-iconcalender"></span> December 27, 2017  
                           </div> 
                           <div class="float-right font-13">
                               <span class="fables-iconnews"></span> Latest News 
                           </div>
                      </div>
                      <h2 class="font-weight-bold font-20 my-2"><a href="#" class="fables-main-text-color fables-second-hover-color">Grow Your Business</a></h2>
                       
                      <p class="fables-forth-text-color font-14">
                         When you need your company to have a new  website or if you venture on updating your old webpage with a new look and functionality. the
                      </p>
                      <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 mt-2">
                          <span class="underline">Read More</span>
                          <span class="fables-iconarrow-light ml-2"></span>
                      </a>  
              </div>
              <div class="col-12 col-md-4 mb-4 mb-md-5 wow fadeIn" data-wow-delay=".9s"> 
                     <div class="image-container zoomIn-effect">
                          <a href="#"><img src="assets/custom/images/magazine-2559842.jpg" alt=""></a> 
                      </div>
                      <div class="above-date py-2 py-lg-3 fables-fifth-text-color float-left w-100 d-md-none d-lg-block">
                          <div class="float-left font-13">
                                 <span class="fables-iconcalender"></span> December 27, 2017  
                           </div> 
                           <div class="float-right font-13">
                               <span class="fables-iconnews"></span> Latest News 
                           </div>
                      </div>
                      <h2 class="font-weight-bold font-20 my-2"><a href="#" class="fables-main-text-color fables-second-hover-color">Grow Your Business</a></h2>
                       
                      <p class="fables-forth-text-color font-14">
                          When you need your company to have a new  website or if you venture on updating your old webpage with a new look and functionality. the
                      </p>
                      <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 mt-2">
                          <span class="underline">Read More</span>
                          <span class="fables-iconarrow-light ml-2"></span>
                      </a>  
              </div>
           </div>
       </div> -->

    <!-- /End page content -->

    <!-- Start Footer 2 Background Image  -->