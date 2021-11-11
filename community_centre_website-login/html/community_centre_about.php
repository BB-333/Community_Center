<!DOCTYPE html>

<html lang="en">

    <head>
        <title>About Community Centre</title>
        <meta charset="UTF-8"/>
        <meta name="About Community Centre Melbourne"
            content="about us community centre melbourne connections education resources"/>
        <meta name="keywords"
            content="community centre website HTML PHP CSS"/>
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
                                        <a href="community_centre_events.php">EVENTS</a>
                                        <a href="community_centre_festival.php">FESTIVAL</a>
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
                    <div class="greeting">
                    <?php
                            $cookie_name="member_login";            

                            //Verify Cookie set on login
                            if(isset($_COOKIE[$cookie_name]))
                            {
                                echo "<h5>Hi ".$_COOKIE[$cookie_name].", read on below to learn more about us. </h5>";
                            }
                            else
                            {
                                  header('location:community_centre_login.php');
                            }                            
                    ?>
                </div>
                </header>

                    <!-- Text Image Set -->
                    <!-- Text Card -->
                    <section class="card-container">
                        <div class="card-col">

                            <div class="card text">
                                <div class="card-text">
                                    <div class="card-link">ABOUT</div>
                                    <h4>Your Local Meeting Place</h4>
                                    <p>The Community Centre was founded in 1974 and has been bringing locals together ever since!</p>
                                    <p>We organise social clubs, exercise classes, skill building short courses and even an annual festival. All to bring people together and share ideas, knowledge and resources.</p>
                                    <p>We are a small team but regularly call on local volunteers to help facilitate our programs, read on below to learn more about the team at the Community Centre.</p>
                                    </div>
                            </div>

                        </div>
                        <!-- Image Card -->
                        <div class="card-col">

                            <div class="card image green H575">
                                <img src="../images/DancingDoodle - Copy.png" alt="dancing with headphones Illustrations">
                            </div>

                        </div>
                    </section>

                    <!-- Full Width Card Image Left -->
                    <section class="card full-card left fawn">
                        <div class="card-text">
                            <div class="card-link">DIRECTOR</div>
                            <h4>Jane Smith</h4>
                            <p>Jane has lead community organisations for many years. She enjoys the atmosphere of the local area and is a regular at many of the local restaurants. When she is not working, she takes care of her, ever growing, collection of plants.</p>
                        </div>
                        <img src="../images/PlantDoodle (3).png" alt="woman carrying a plant Illustration">
    
                    </section>

                    <!-- Full Width Card Image Right -->
                    <section class="card full-card right blue">
                        <div class="card-text">
                            <div class="card-link">COMMUNITY COORDINATOR</div>
                            <h4>James Green</h4>
                            <p>James is your go to person for anything event related, he loves bringing people together and seeing the connections grow. If you have an idea for a local club or regular social event, he is the person who can make it happen at the Centre.</p>
                        </div>
                        <img src="../images/DoogieDoodle (2).png" alt="man patting a dog illstration">
                    </section>

                    <!-- Full Width Card Image Left -->
                    <section class="card full-card left beige">
                        <div class="card-text">
                            <div class="card-link">EDUCATION COORDINATOR</div>
                            <h4>Sophie Yang</h4>
                            <p>Sophie has been involved in education her whole working life. She truly believes that quality education builds healthy communities and is always ready to hear ideas about what sorts of skills the locals would like to learn. She also loves icecream!</p>
                        </div>
                        <img src="../images/IceCreamDoodle (2).png" alt="woman carrying an oversized icecream illustration">
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