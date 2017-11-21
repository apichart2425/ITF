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
                <form action="index.php" method="POST">
                    <input type="text" name="search" placeholder="Search">
                    <button type="submit" name="submit-search">SUBMIT</button>
                </form>

                <div class="people-container">
    <?php 
        if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM people WHERE name LIKE '%$search%' OR surname LIKE '%$search%' OR fullname LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            
            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div id=\"products\">
                            <div class=\"container content-lg\">
                                <div class=\"row text-center margin-b-40\">
                                    <div class=\"col-sm-6 col-sm-offset-3\">
                                        <p><h2><font color=\"white\">".$row['fullname']."</font></h2></p>";
                                        echo '<p><img src="data:image/jpg;base64,'.base64_encode($row['pic']).'"heigh="300" width="300"/></p>';
                                        echo "<div><div align=\"justify\"><p><font color=\"white\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .$row['information']."</font></p></div></div>
                                    </div>
                                </div>
                            </div>
                    </div>";
                }
            } else {
                echo "<div id=\"products\">
                            <div class=\"container content-lg\">
                                <div class=\"row text-center margin-b-40\">
                                    <div class=\"col-sm-6 col-sm-offset-3\">
                                        '<p><h1><font color=\"white\">There are no results matching your search</font></h2></p>'
                                    </div>
                                </div>
                            </div>
                    </div>";

            }
        }
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
                        <div align="justify"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The unfairness of the Treaty of Versailles and other peace agreements. Which was made after the First World War. They were forced to sign contracts that were at a disadvantage, such as the loss of colonial territories. And pay huge amounts of reparations. This is a reason for the cancellation of the terms of the agreement.</p></div>
                    </div>
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <img class="img-responsive wow fadeIn" src="img/970x647/02.jpg" alt="Latest Products Image" data-wow-duration=".3" data-wow-delay=".2s">
                        </div>
                        <h4>War Slate <span class="text-uppercase margin-l-20">The peace no longer!</span></h4>
                        <div align="justify"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In World War II Germany lost its territory to Poland under the Treaty of Versailles. And the Polish insurgents divided the territory of Germany into two parts. West Prussia and East Prussia. Hitler asked to build a road through Poland to East Prussia. Britain and France oppose Hitler canceled the agreement that Germany would not offend Poland. And do not offend the Soviet Union. Germany started the war with the invasion of Poland on September 1, 1939</p></div>
                    </div>
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <img class="img-responsive wow fadeIn" src="img/970x647/03.jpg" alt="Latest Products Image" data-wow-duration=".3" data-wow-delay=".3s">
                        </div>
                        <h4>End of war <span class="text-uppercase margin-l-20">It's over.</span></h4>
                        <div align="justify"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The war ended with the victory of the Allies. The results of the war have changed the political and social structure of the world. The United Nations is established. To promote international cooperation and to prevent future conflicts. The United States and the Soviet Union stepped up as the world's protagonists, a contender. Leading to conflict on the stage of the Cold War. It continued for 46 years after the war.</p></div>
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
                                        <h3 class="margin-b-5">Adolf Hitler</h3>
                                        <span>Leader of the Nazi Party Chancellor of Germany</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0"><div align="justify">
                                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hitler was a World War I veteran who was awarded the Iron Cross. Hitler later joined the German Workers Party in 1919, a political party before the Nazi party. In 1921, he attempted a coup. It was also known as the Beer Brewery Rebels in Munich on November 8-9, 1923. Hitler was sentenced to one year in prison. In the meantime, he wrote his memoirs, Mein Kampf (My Battle).</p>
                                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;After being released on December 20, 1924, he was supported by the public by attacking the treaty. Versailles And the proposed German ideology. Anti-Semitism And anti-communism With fascinating rhetoric and Nazi propaganda. After being appointed Prime Minister on January 30, 1933, he changed the Weimar Republic into a Third Reich empire. Dictatorial state Under the Nazi ideology of totalitarian and autocratic dictatorship His goal is New World Order The Nazi occupation of Europe completely dominated continental Europe.</p>
                                            </div></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong>Born:</strong> 20 April 1889</p>
                                                <p class="margin-b-5"><strong>Died:</strong> 30 April 1945</p>
                                                <p class="margin-b-5"><strong>Citizenship:</strong> Austrian, German</p>
                                                <p class="margin-b-5"><strong>Political party:</strong> National Socialist German Workers' Party</p>
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
                                        <h3 class="margin-b-5">Benito Amilcare Andrea Mussolini</h3>
                                        <span>Leader of the National Fascist Party</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0"><div align="justify">
                                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mussolini joined the founding of the Fasc Italiani di Combattimento or the Fascist Party in preparation for the Revolutionary War. The "parade of Rome" came to the year 2468, he established himself as a full-fledged dictator. Forced to abolish the parliamentary replacement system with "Corporate State" and formalize the system. Create Vatican City Invasion of Abyssinia (Now Ethiopia) and Albania (1939) in possession. With the advent of the Axis and Adolf. Hitler of Germany.</p></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong>Born:</strong> 29 July 1883</p>
                                                <p class="margin-b-5"><strong>Died:</strong> 28 April 1945</p>
                                                <p class="margin-b-5"><strong>Citizenship:</strong> Italian</p>
                                                <p class="margin-b-5"><strong>Political party:</strong> National Fascist Party</p>
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
                                        <h3 class="margin-b-5">Joseph Vissarionovich Stalin</h3>
                                        <span>Leader of Communist Party of the Soviet Union</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0"><div align="justify">
                                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;He was born in Gorya, Georgia. The city is located on the hills of the Caucasus Mountains. One of the states of the Russian Empire. He was born Georgian by the name of Stalin, he was working for the Communist Party (stalin in Russian, meaning steel).</p>
                                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the beginning of World War II, Stalin had a non-aggression treaty with Nazi Germany. This led to the separation of powers in Eastern Europe in the 1940s. Leader of the Soviet Union He was called Father of the Soviet Union. When religion is illegal in communist states The role of God was played by Stalin. He brought the communist system to use. Everyone was forbidden to have private property. Everything, including a party or party. The protesters were sent to concentration camps and killed about 10 million people. There were no demographic surveys that led to the death of a Soviet leader during the revolution.</p>
                                            </div></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong>Born:</strong> 18 December 1878</p>
                                                <p class="margin-b-5"><strong>Died:</strong> 5 March 1953</p>
                                                <p class="margin-b-5"><strong>Citizenship:</strong> Soviet (Russian)</p>
                                                <p class="margin-b-5"><strong>Political party:</strong> Communist Party of the Soviet Union</p>
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
                                        <h3 class="margin-b-5">Franklin D. Roosevelt</h3>
                                        <span>The 32nd President of the United States</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0"><div align="justify">
                                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Franklin Delano Roosevelt was an American statesman and political leader who served as the 32nd President of the United States from 1933 until his death in 1945. A Democrat, he won a record four presidential elections and emerged as a central figure in world events during the mid-20th century. He directed the United States government during most of the Great Depression, implementing his New Deal domestic agenda in response to the worst economic crisis in U.S. history. As a dominant leader of his party, he built the New Deal Coalition, realigning American politics into the Fifth Party System and defining American liberalism throughout the middle third of the 20th century. His third and fourth terms were dominated by World War II. He is often rated by scholars as one of the three greatest U.S. Presidents, along with George Washington and Abraham Lincoln.</p>
                                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Roosevelt ran for re-election in 1940, and his victory made him the first and only president to serve for more than two terms. With World War II looming after 1938 with the Japanese invasion of China and the aggression of Nazi Germany, Roosevelt gave strong diplomatic and financial support to China, the United Kingdom, and the Soviet Union while remaining officially neutral.</p></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong>Born:</strong> 30 January 1882</p>
                                                <p class="margin-b-5"><strong>Died:</strong> 12 April 1945</p>
                                                <p class="margin-b-5"><strong>Citizenship:</strong> American</p>
                                                <p class="margin-b-5"><strong>Political party:</strong> Democratic</p>
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
                                        <h3 class="margin-b-5">Sir Winston Leonard Spencer-Churchill</h3>
                                        <span>The British statesman</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0"><div align="justify">
                                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Winston was born into an aristocratic family descended from the Dukes of Marlborough. One branch of the Spencer family. His father is Lord Rundal Churchill, politician who holds the post of treasury secretary His mother was Jenny Giorgio, an American social worker. While still a young soldier He undertook missions in British India and Sudan, and in the Second Boer War. He gained a reputation as a war correspondent and wrote a book about his operations.</p>
                                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the 1930s, Winston returned to politics again when Nazi Germany began to regain its military presence and threatened the British. And then the sudden emergence of World War II. He was appointed Minister of Justice again. And after the resignation of Prime Minister Neil Sham Berlin on May 10, 1940, Winston became Prime Minister. His unqualified declaration of invincibility prompted the British to oppose Nazi Germany. Especially in the early war, which was a difficult time, when the British and British colonies were the only opponents to stand up against Adolf Hitler. Winston gave his speeches through radio broadcasting. Wake up the British morale. He was the leader of Britain until he could overthrow Nazi Germany. But the victory has to do with the loss of the world's superpower to the United States. The occupied colonies of India, Malaysia, Burma, and so on all claim independence, sovereignty must fall into place, causing the British Empire to collapse and become a Commonwealth of Nations.</p>
                                            </div></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong>Born:</strong> 30 November 1874</p>
                                                <p class="margin-b-5"><strong>Died:</strong> 24 January 1965</p>
                                                <p class="margin-b-5"><strong>Citizenship:</strong> British</p>
                                                <p class="margin-b-5"><strong>Political party:</strong> Conservative</p>
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
                                <li class="footer-list-item"><a href="#body">Home</a></li>
                                <li class="footer-list-item"><a href="#products">Timeline</a></li>
                                <li class="footer-list-item"><a href="#work">Important person</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-2 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a>About us</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-3">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="#">Kunyarat Inta</a></li>
                                <li class="footer-list-item"><a href="#">Niti Jirakarnwuttikrai</a></li>
                                <li class="footer-list-item"><a href="#">Thitikorn Padungwatsawat</a></li>
                                <li class="footer-list-item"><a href="#">Supawach Klinkajohn</a></li>
                                <li class="footer-list-item"><a href="#">Apichart Chainarongrat</a></li>
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