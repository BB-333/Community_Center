<!DOCTYPE html>

<html lang="en">

    <head>
        <title>Festival Community Centre</title>
        <meta charset="UTF-8"/>
        <meta name="Festival Community Centre Melbourne"
            content="community centre melbourne connections education resources"/>
        <meta name="keywords"
            content="community centre website HTML CSS"/>
        <meta name="author"
            content="Brianna Goanna"/>
        <link rel="stylesheet" type="text/css" href="../css/community_centre_main.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
        <script language="javascript" src="../javascript/community_centre_main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                                    echo "<h5>Hi ".$_COOKIE[$cookie_name].", it happens every year, rain, hail or shine! </h5>";
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
                                    <div class="card-link">FESTIVAL</div>
                                    <h4>Let's Celebrate!</h4>
                                    <p>Every September we get together in Main Street to celebrate! </p>
                                    <p>Local performers and entertainers put on shows, there are a collection of food stalls showcasing the cuisine from local restaurants. Even the local schools get involved!</p>
                                    <p>This has become a tradition that locals look forward to and planning has become a months long project for our team. If you would like to get involved, we would love to hear from you.</p>
                                </div>
                            </div>

                        </div>
                        <!-- Image Card -->
                        <div class="card-col">

                            <div class="card image beige H575">
                                <img src="../images/DancingDoodle - Copy.png" alt="">
                            </div>
                        </div>
                    </section>

                <!-- Full Width Card Trio -->
                <section class="card full-card trio">
                    <div class="trio-img">
                        <img src="../images/food-stall-pexels-clem-onojeghuo-375889.jpg" alt="">
                    </div>

                    <div class="trio-img">
                        <img src="../images/costume-pexels-joy-anne-pura-1186116.jpg" alt="">
                    </div>

                    <div class="trio-img">
                        <img src="../images/lights-pexels-melissa-698907.jpg" alt="">
                    </div>

                </section>


                <section class="card full-card form">
                    <h4>Festival Expression of Interest</h4>
                    <form  name="contactForm" action="URL" method="post" autocomplete="on">
                        <div>
                            <label for="givenName" class="title">Given Name</label>
                            <input type="text" id="givenName" name="givenName" placeholder="" required/>
                        </div>
                        <div>
                            <label for="familyName" class="title">Family Name</label>
                            <input type="text" id="familyName" name="familyName" placeholder="" required/>
                        </div>
                        <div>
                            <label for="busOrgName" class="title">Business / Organisation</label>
                            <input type="text" id="busOrgName" name="busOrgName" placeholder="if applicable"/>
                        </div>
                        <div>
                            <label for="email" class="title">email</label>
                            <input type="email" id="email" name="email" placeholder="email@domain.com" required/>
                        </div>
                        <br />
                        <div class="radio-buttons">
                            <span class="title">Have you taken part in the Community Centre Festival before?</span>
                            <input type="radio" name="existFestival" id="existFestival" value="existFestival"/>
                            <label for="labelA">Yes!</label>
                            
                            <input type="radio" name="newFestival" id="newFestival" value="newFestival"/>
                            <label for="labelA">No, this is the first time.</label>
                            <br />
                        </div>
                        <br />
                        <div>
                            <label for="enquiryType" class="title">Which best describes what you or your organisation do?</label>
                            <label class="check-container"><input type="checkbox" name="localCGroup" value="localCGroup"/>Local Community Group</label>
                            <label class="check-container"><input type="checkbox" name="localBusOrg" value="localBusOrg"/>Local Business</label>
                            <label class="check-container"><input type="checkbox" name="festFoodVendor" value="festFoodVendor"/>Festival Food Vendor</label>
                            <label class="check-container"><input type="checkbox" name="other" value="other"/>Other - please add details below</label>
                        
                        </div>
                        <br />
                        <div>
                            <label for="preferContact" class="title">How would you like to take part?</label>
                            <select>
                                <option value="optA">Sponsorship</option>
                                <option value="optB">Volunteering</option>
                                <option value="optC">Exhibition / Festival Stand</option>
                                <option value="optD">Other</option>
                            </select>
                        </div>
                        <br />
                        <div>
                            <label for="" class="title">Any other details you might like to add?</label>
                            <textarea rows="4" cols="50" placeholder="type here"></textarea>
                        </div>
                        <div class="submit">
                            <input type="submit" value="Send Enquiry" id="submitBtn" onclick="return changeText('submitBtn');"/>
                        </div>

                    </form>
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
                <!-- Change Card Opacity on Hover -->
                <script>
                    $(document).ready(function(){
                        $('.card').hover(function(){
                            $('.full-card.trio').css('opacity', '0.5');
                        },
                        function(){
                            $(".full-card.trio").css('opacity', '1.0');
                        });
                    });
                </script>
    </body>

</html>