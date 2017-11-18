<?php 
include_once 'connect.php';
?>
<!DOCTYPE html>
<!-- ==============================
    Project:        Metronic "Aironepage" Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
    Version:        1.0
    Author:         KeenThemes
    Primary use:    Corporate, Business Themes.
    Email:          support@keenthemes.com
    Follow:         http://www.twitter.com/keenthemes
    Like:           http://www.facebook.com/keenthemes
    Website:        http://www.keenthemes.com
    Premium:        Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
    ================================== -->
    <html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>WORLD WAR II</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css">

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="index.html">
                                <img class="logo-img logo-img-main" src="img/logo.png" alt="Asentus Logo">
                                <img class="logo-img logo-img-active" src="img/logo.png" alt="Asentus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">Home</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#products">Timeline</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#work">Important person</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        <div class="promo-block">
            <div class="container">
                <div class="margin-b-40">
                    <h1 class="promo-block-title">WORLD WAR II.</h1>
                    <p class="promo-block-text">Look how our history is going...</p>
                </div>
                <a class="js_popup-youtube btn-theme btn-theme-md btn-white-bg text-uppercase" href="vid/intro.mp4" title="Intro Video"><i class="btn-icon icon-control-play"></i> Watch Intro Video</a>
                <p></p>
                <form action="search.php" method="POST">
                    <input type="text" name="search" placeholder="Search">
                    <button type="submit" name="submit-search">SUBMIT</button>
                </form>

                <div class="people-container">
                    <?php 
                    $sql = "SELECT * FROM `info`;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                }}
                ?>
                </div>
        </div>
    </div>
    <!--========== SLIDER ==========-->

    <!--========== PAGE LAYOUT ==========-->
    <!-- Products -->
    <div id="products">
        <div class="container content-lg">
            <div class="row text-center margin-b-40">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2>When the war was going...</h2>
                    <p>The unfairness of the Treaty of Versailles and other peace agreements. Which was made after the First World War. They were forced to sign contracts that were at a disadvantage</p>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <!-- Latest Products -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <img class="img-responsive wow fadeIn" src="img/970x647/01.jpg" alt="Latest Products Image" data-wow-duration=".3" data-wow-delay=".1s">
                    </div>
                    <h4>Cause <span class="text-uppercase margin-l-20">They took so far.</span></h4>
                    <p>The unfairness of the Treaty of Versailles and other peace agreements. Which was made after the First World War. They were forced to sign contracts that were at a disadvantage, such as the loss of colonial territories. And pay huge amounts of reparations. This ia a reason for the cancellation of the terms of the agreement.</p>
                </div>
                <!-- End Latest Products -->

                <!-- Latest Products -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <img class="img-responsive wow fadeIn" src="img/970x647/02.jpg" alt="Latest Products Image" data-wow-duration=".3" data-wow-delay=".2s">
                    </div>
                    <h4>War Slate <span class="text-uppercase margin-l-20">The peace no longer!</span></h4>
                    <p>In World War II Germany lost its territory to Poland under the Treaty of Versailles. And the Polish insurgents divided the territory of Germany into two parts. West Prussia and East Prussia. Hitler asked to build a road through Poland to East Prussia. Britain and France oppose Hitler canceled the agreement that Germany would not offend Poland. And do not offend the Soviet Union. Germany started the war with the invasion of Poland on September 1, 1939</p>
                </div>
                <!-- End Latest Products -->

                <!-- Latest Products -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <img class="img-responsive wow fadeIn" src="img/970x647/03.jpg" alt="Latest Products Image" data-wow-duration=".3" data-wow-delay=".3s">
                    </div>
                    <h4>End of war <span class="text-uppercase margin-l-20">It's over.</span></h4>
                    <p>The war ended with the victory of the Allies. The results of the war have changed the political and social structure of the world. The United Nations is established. To promote international cooperation and to prevent future conflicts. The United States and the Soviet Union stepped up as the world's protagonists, a contender. Leading to conflict on the stage of the Cold War. It continued for 46 years after the war.</p>
                </div>
                <!-- End Latest Products -->
            </div>
            <!--// end row -->
        </div>

        <div class="container-full-width">
            <div class="row row-space-2">
                <div class="col-sm-6 sm-margin-b-4">
                    <img class="img-responsive" src="img/970x647/01.jpg" alt="Image">
                </div>
                <div class="col-sm-6">
                    <img class="img-responsive" src="img/970x647/03.jpg" alt="Image">
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Products -->

    <!-- Work -->
    <div id="work">
        <div class="content-md container">
            <!-- Masonry Grid -->
            <div class="masonry-grid row row-space-2">
                <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8 margin-b-4">
                    <!-- Work -->
                    <div class="work work-popup-trigger">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="img/800x400/01.jpg" alt="Portfolio Image">
                        </div>
                        <div class="work-popup-overlay">
                            <div class="work-popup-content">
                                <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                <div class="margin-b-30">
                                    <h3 class="margin-b-5">Art Of Coding</h3>
                                    <span>Clean &amp; Minimalistic Design</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                            <ul class="list-inline work-popup-tag">
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                            <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                            <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                            <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-4">
                    <!-- Work -->
                    <div class="work work-popup-trigger">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="img/397x400/01.jpg" alt="Portfolio Image">
                        </div>
                        <div class="work-popup-overlay">
                            <div class="work-popup-content">
                                <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                <div class="margin-b-30">
                                    <h3 class="margin-b-5">Art Of Coding</h3>
                                    <span>Clean &amp; Minimalistic Design</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                            <ul class="list-inline work-popup-tag">
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                            <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                            <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                            <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-4">
                    <!-- Work -->
                    <div class="work work-popup-trigger">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="img/397x300/01.jpg" alt="Portfolio Image">
                        </div>
                        <div class="work-popup-overlay">
                            <div class="work-popup-content">
                                <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                <div class="margin-b-30">
                                    <h3 class="margin-b-5">Art Of Coding</h3>
                                    <span>Clean &amp; Minimalistic Design</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                            <ul class="list-inline work-popup-tag">
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                            <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                            <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                            <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-4">
                    <!-- Work -->
                    <div class="work work-popup-trigger">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="img/397x300/02.jpg" alt="Portfolio Image">
                        </div>
                        <div class="work-popup-overlay">
                            <div class="work-popup-content">
                                <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                <div class="margin-b-30">
                                    <h3 class="margin-b-5">Art Of Coding</h3>
                                    <span>Clean &amp; Minimalistic Design</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                            <ul class="list-inline work-popup-tag">
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                            <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                            <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                            <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                    <!-- Work -->
                    <div class="work work-popup-trigger">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="img/397x300/03.jpg" alt="Portfolio Image">
                        </div>
                        <div class="work-popup-overlay">
                            <div class="work-popup-content">
                                <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                <div class="margin-b-30">
                                    <h3 class="margin-b-5">Art Of Coding</h3>
                                    <span>Clean &amp; Minimalistic Design</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                            <ul class="list-inline work-popup-tag">
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                            <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                            <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                            <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Work -->
                </div>
            </div>
            <!-- End Masonry Grid -->
        </div>
    </div>
    <!-- End Work -->

    <!-- Promo Banner -->
    <div class="promo-banner">
        <div class="container-sm content-lg">
            <h2 class="promo-banner-title">The Result</h2>
            <p class="promo-banner-text">Allies of World War II is the winner of the war and the peace is coming back again...</p>
        </div>
    </div>
    <!-- End Promo Banner -->

    <!-- Contact -->
    <div id="contact">
        <!-- Google Map -->
        <div class="gmap">
            <div id="map" class="map height-400"></div>
            <address class="gmap-address">
                <p class="color-heading margin-b-0">Faculty of Information Technology</p>
            </address>
        </div>
        <!-- End Google Map -->
    </div>
    <!-- End Contact -->
    <!--========== END PAGE LAYOUT ==========-->

    <!--========== FOOTER ==========-->
    <footer class="footer">
        <!-- Links -->
        <div class="section-seperator">
            <div class="content-md container">
                <div class="row">
                    <div class="col-sm-2 sm-margin-b-30">
                        <!-- List -->
                        <ul class="list-unstyled footer-list">
                            <li class="footer-list-item"><a href="#">Home</a></li>
                            <li class="footer-list-item"><a href="#">About</a></li>
                            <li class="footer-list-item"><a href="#">Work</a></li>
                            <li class="footer-list-item"><a href="#">Contact</a></li>
                        </ul>
                        <!-- End List -->
                    </div>
                    <div class="col-sm-2 sm-margin-b-30">
                        <!-- List -->
                        <ul class="list-unstyled footer-list">
                            <li class="footer-list-item"><a href="#">Twitter</a></li>
                            <li class="footer-list-item"><a href="#">Facebook</a></li>
                            <li class="footer-list-item"><a href="#">Instagram</a></li>
                            <li class="footer-list-item"><a href="#">YouTube</a></li>
                        </ul>
                        <!-- End List -->
                    </div>
                    <div class="col-sm-3">
                        <!-- List -->
                        <ul class="list-unstyled footer-list">
                            <li class="footer-list-item"><a href="#">Subscribe to Our Newsletter</a></li>
                            <li class="footer-list-item"><a href="#">Privacy Policy</a></li>
                            <li class="footer-list-item"><a href="#">Terms &amp; Conditions</a></li>
                        </ul>
                        <!-- End List -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Links -->

        <!-- Copyright -->
        <div class="content container">
            <div class="row">
                <div class="col-xs-6">
                    <img class="footer-logo" src="img/logo-dark.png" alt="WWII">
                </div>
                <div class="col-xs-6 text-right">
                    <p class="margin-b-0">World War II Presented by: ITF-Group</p>
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End Copyright -->
    </footer>
    <!--========== END FOOTER ==========-->

    <!-- Back To Top -->
    <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

    <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- CORE PLUGINS -->
    <script src="vendor/jquery.min.js" type="text/javascript"></script>
    <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- PAGE LEVEL PLUGINS -->
    <script src="vendor/jquery.easing.js" type="text/javascript"></script>
    <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
    <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
    <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
    <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U&amp;callback=initMap" async defer></script>

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="js/layout.min.js" type="text/javascript"></script>
    <script src="js/components/wow.min.js" type="text/javascript"></script>
    <script src="js/components/swiper.min.js" type="text/javascript"></script>
    <script src="js/components/maginific-popup.min.js" type="text/javascript"></script>
    <script src="js/components/masonry.min.js" type="text/javascript"></script>
    <script src="js/components/gmap.min.js" type="text/javascript"></script>

</body>
<!-- END BODY -->
</html>