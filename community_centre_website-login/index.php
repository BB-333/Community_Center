<!DOCTYPE html>

<html lang="en">

    <head>
        <title>Community Centre</title>
        <meta charset="UTF-8"/>
        <meta name="Community Centre Melbourne"
            content="community centre melbourne connections education resources"/>
        <meta name="keywords"
            content="community centre website HTML CSS"/>
        <meta name="author"
            content="Brianna Goanna"/>
        <link rel="stylesheet" type="text/css" href="../css/community_centre_main.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    </head>

    <body>
        <!-- Main Container -->
        <div class="container">
            <!-- Site Header -->
            <header>
                <!-- Header Navigation -->
                <nav>
                    <a href="community_centre_home.php"><img src="../images/DoubleCCircleGrey.png" alt="community centre logo" width="100" height=""/></a>
                
                    <!-- Navigation Menu -->
                    <div class="nav-menu">
                        
                                <a href="community_centre_home.php" class="current">HOME</a>
                                <div class="sub-nav">
                                    <button class="sub-btn">MEMBERS <i class="fas fa-angle-down"></i></button>
                                    <div class="sub-nav-opt">
                                        <a href="community_centre_login.php">LOGIN</a>
                                        <form method="POST" action="cc_login.php"> 
                                            <input class="sub-btn" type="submit" value="LOGOUT" name="logout"/>
                                         </form>
                                    </div>
                                </div>
                                <div class="sub-nav">
                                    <button class="sub-btn">EVENTS <i class="fas fa-angle-down"></i></button>
                                    <div class="sub-nav-opt">
                                        <a href="community_centre_events.php">CLASSES & GROUPS</a>
                                        <a href="community_centre_festival.php">SPRING FESTIVAL</a>
                                    </div>
                                </div>
                                <div class="sub-nav">
                                    <button class="sub-btn">ABOUT <i class="fas fa-angle-down"></i></button>
                                    <div class="sub-nav-opt">
                                        <a href="community_centre_about.php">ABOUT US</a>
                                        <a href="community_centre_volunteer.php">VOLUNTEER</a>
                                    </div>
                                </div>
                                <a href="community_centre_contact.php">CONTACT</a>
                        
                    </div>
                </nav>


            </header>

            <section class="body container">

                <!-- Page Header -->
                <header class="page-header">
                    <h1>Community Center</h1>
                    <div class="page-blurb">
                    <p>connections learning people</p>
                    </div>
                </header>

                <!-- Main Container -->
                <section class="card-container">
                    <!-- Left Column -->
                    <div class="card-col">

                        <a class="card beige H575" href="community_centre_about.php">
                            <div class="card-text">
                                <div class="card-link">ABOUT</div>
                                <h4>Your Local Meeting Place</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus magni corporis aut?</p>
                            </div>
                            <img src="../images/CoffeeDoddle (3).png" alt="person with coffee illustration">
                        </a>
    
                        <a class="card blue H285" href="community_centre_contact.php">
                            <div class="card-text">
                                <div class="card-link">CONTACT</div>
                                <h4>Get In Touch</h4>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            </div>
                            <img src="../images/SelfieDoodle (2).png" alt="person saying HI on video call">

                        </a>

                    </div>
                    <!-- Right Column -->
                    <div class="card-col">

                        <a class="card fawn H285" href="community_centre_events.php">
                            <div class="card-text">
                                <div class="card-link">EVENTS</div>
                                <h4>Join In</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis sapiente consequatur amet similique reprehenderit!</p>
                            </div>
                            <img src="../images/MeditatingDoodle - Copy.png" alt="person meditating illustration">
                        </a>
        
                        <a class="card green H575" href="community_centre_volunteer.php">
                            <div class="card-text">
                                <div class="card-link">VOLUNTEER</div>
                                <h4>Share the Love</h4>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, repudiandae.</p>
                            </div>
                            <img src="../images/LovingDoodle.png" alt="">

                        </a>

                    </div>
                </section>
               <!-- Bottom Card -->
                <section>
                    <a class="card full-card beige" id="anchor" href="community_centre_festival.php">
                        <div class="card-text">
                            <div class="card-link">FESTIVAL</div>
                            <h4>Let's Celebrate</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero veritatis vitae explicabo. Suscipit consequuntur obcaecati sapiente quam, natus saepe consequatur.</p>
                        </div>
                        <img src="../images/RollerSkatingDoodle (3).png" alt="">
                    </a>
                </section>

            </section> <!-- Main Container -->
                
            
            <!-- Footer -->
            <footer class="footer container">

                <!-- Footer Left Column -->
                <div class="footer-col lsection">
                    <!-- Quote -->
                    <div class="footer-quote">
                        <q>Alone we can do so little; together, we can do so much. </q>
                        <h4>Helen Keller</h4>
                    </div>

                    <!-- Copyright & Privacy -->
                    <div class="footer-copy-privacy">
                        <a href="../index.php">&copy; 2021 Community Centre</a>
                        
                        <a class="privacy" href="../index.php">Privacy Policy</a>
                        <a class="attribution" href="https://twitter.com/pablostanley">Illustrations by Pablo Stanley</a>
                    </div>

                </div>
                <!-- Footer Right Column -->
                <div class="footer-col rsection">

                    <div class="footer-contact-header">
                        <h4>contact us</h4>
                    </div>

                    <div class="footer-address">
                        <p>123 Main Street, Melbourne VIC 3000</p>
                    </div>

                    <div class="footer-contact-links">
                        <a href="tel:614-0000-0000">+614-0000-0000</a>
                        <a href="mailto:email@communitycentre.com.au&subject=General email enquiry from website">email@communitycentre.com.au</a>
                        
                    </div>
                    <div class="footer-social-links">
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-linkedin"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </div>



                </div>


            </footer>

        </div>

    </body>

</html>