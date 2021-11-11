<!DOCTYPE html>

<?php
    $cookie_name="member_login";            

    //Verify Cookie set on login
    if(!isset($_COOKIE[$cookie_name]))
    {
        header('location:community_centre_login.php');
    }
                           
?>

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> 

    </head>

    <body>
        <!-- Full Screen Modal Message -->
        <div id="fullScreen">
            <div id="dialog" class="message">
                Community Centre Melbourne acknowledges the Traditional Owners, the Wurundjeri and Boon Wurrung people of the Kulin Nation, on whose land we meet, share and work. We pay our respects to Elders past and present and extend our respect to Aboriginal and Torres Strait Islander people from all nations of this land.
                <div id="msgClose"><a href="#" class="close"><i class="fas fa-arrow-down"></i></a></div>
            </div>
            <div id="mask"></div>
        </div>

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
                    <div class="greeting">
                        <?php
                                $cookie_name="member_login";            

                                //Verify Cookie set on login
                                if(isset($_COOKIE[$cookie_name]))
                                {
                                    echo "<h4>Welcome ".$_COOKIE[$cookie_name]."! </h4>";
                                }                         
                        ?>
                    </div>
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
                                <p>Our small team bring people together to share ideas, learning and resources.</p>
                            </div>
                            <img src="../images/CoffeeDoddle (3).png" alt="person with coffee illustration">
                        </a>
    
                        <a class="card blue H285" href="community_centre_contact.php">
                            <div class="card-text">
                                <div class="card-link">CONTACT</div>
                                <h4>Get In Touch</h4>
                                <p>Visit us in person at the Centre, find us online, even contact us by phone!</p>
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
                                <p>Meet people from your local community at social clubs, interest groups, short courses and exercise get togethers.</p>
                            </div>
                            <img src="../images/MeditatingDoodle - Copy.png" alt="person meditating illustration">
                        </a>
        
                        <a class="card green H575" href="community_centre_volunteer.php">
                            <div class="card-text">
                                <div class="card-link">VOLUNTEER</div>
                                <h4>Share the Love</h4>
                                <p>Help out at events, meet your neighbours and share your skills.</p>
                            </div>
                            <img src="../images/LovingDoodle.png" alt="big heart illustration">

                        </a>

                    </div>
                </section>
               <!-- Bottom Card -->
                <section>
                    <a class="card full-card brown" id="anchor" href="community_centre_festival.php">
                        <div class="card-text">
                            <div class="card-link">FESTIVAL</div>
                            <h4>Let's Celebrate</h4>
                            <p>Held annually the festival celebrates the cultures, talent and skills of the people of our local area. Colourful, entertaining and delicious!</p>
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

        <!-- Full Screen Message Page Load -->
        <script>
            $(document).ready(function() {	

                var id = '#dialog';
                    
                    var maskHeight = $(document).height();
                    var maskWidth = $(window).width();
                        
                    $('#mask').css({'width':maskWidth,'height':maskHeight});

                    $('#mask').fadeIn(500);	
                    $('#mask').fadeTo("slow",0.9);	
                        
                    var winH = $(window).height();
                    var winW = $(window).width();
                                
                    $(id).css('top',  winH/2-$(id).height()/2);
                    $(id).css('left', winW/2-$(id).width()/2);
                        
                    $(id).fadeIn(2000); 	
                        
                    $('.message .close').click(function (e) {
                    e.preventDefault();

                    $('#mask').hide();
                    $('.message').hide();
                    });

                    $('#mask').click(function () {
                    $(this).hide();
                    $('.message').hide();
                });

            });
                    
            </script>

    </body>

</html>