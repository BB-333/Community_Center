<!DOCTYPE html>

<html lang="en">

    <head>
        <title>Contact Us</title>
        <meta charset="UTF-8"/>
        <meta name="Community Centre Melbourne"
            content="contact the community centre melbourne connections education resources"/>
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
                                echo "<h5>Hi ".$_COOKIE[$cookie_name].", we would love to hear from you... </h5>";
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
                                    <div class="card-link">CONTACT</div>
                                    <h4>Get in Touch</h4>
                                    <p>Visitors are always welcome! Find us in person and online. Or have a chat by phone or email. We are always eager to hear how we can help connect our community.</p>
                                    <ul>
                                        <li>visit us</li>
                                        <li>call</li>
                                        <li>email</li>
                                        <li>connect on social media</li>
                                        <li>using the form below</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!-- Image Card -->
                        <div class="card-col">

                            <div class="card image green H575">
                                <img src="../images/SelfieDoodle (3).png" alt="">
                            </div>
                        </div>
                    </section>
                    <!-- Full Width Card iFrame Right -->
                    <section class="card full-card right blue">
                        <div class="card-text">
                            <h4>Find Us Here</h4>
                            <p>123 Main Street, Melbourne VIC 3000</p>
                            <br />
                            <a href="tel:614-0000-0000">+614-0000-0000</a>
                            <a href="mailto:email@communitycentre.com.au&subject=General email enquiry from website">email@communitycentre.com.au</a>
                            <br /><br />
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>                        </div>
                        <iframe src="https://www.google.com/maps/d/embed?mid=1I-wBlhhTEiE42Tgp9QdIuQGjt7E&hl=en" height="300"></iframe>
                    </section>
                    
                    <!-- Full Width Card Anchor Image Left -->
                        <a class="card full-card left fawn" href="community_centre_venues.php">
                                <div class="card-text">
                                    <div class="card-link">VENUES</div>
                                    <h4>Available for hire</h4>
                                    <p>Need a place to hold a club or a celebration or a meeting or... you get the idea. We have several venues which are available to hire for regular or one-off occasions. </p>
                                    <p>Click here to find out more details or submit an enquiry.</p>
                                                                    </div>
                            <img src="../images/UnboxingDoodle.png" alt="">
                        </a>                        

                <!-- Full Width Form -->
                <section class="card full-card form">
                    <h4>Contact Form</h4>
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
                            <label for="email" class="title">email</label>
                            <input type="email" id="email" name="email" placeholder="email@domain.com" required/>
                        </div>
                        <div>
                            <label for="date"class="title">Select today's date</label>
                            <input type="date" name="date"/>
                        </div>
                        <br />
                        <div class="radio-buttons">
                            <span class="title">Would you like to receive our e-newsletter updates?</span>
                            <input type="radio" name="" id="labelA" value="SUBSCRIBE"/>
                            <label for="labelA">Yes Please!</label>
                            
                            <input type="radio" name="" id="labelA" value="NOT MAILING LIST"/>
                            <label for="labelA">No Thankyou</label>
                            <br />
                        </div>
                        <br />
                        <div>
                            <label for="enquiryType" class="title">What does your enquiry relate to?</label>
                            <label class="check-container"><input type="checkbox" name="" value="Community Groups"/>Community Groups</label>
                            <label class="check-container"><input type="checkbox" name="" value="Education"/>Education Programs</label>
                            <label class="check-container"><input type="checkbox" name="" value="Volunteer"/>Volunteering</label>
                            <label class="check-container"><input type="checkbox" name="" value="Festival"/>Spring Festival</label>
                            <label class="check-container"><input type="checkbox" name="" value="Miscellaneous"/>Other (please write details below)</label>                        
                        </div>
                        <br />
                        <div>
                            <label for="preferContact" class="title">How did you hear about us?</label>
                            <select>
                                <option value="optA">Local paper</option>
                                <option value="optB">Word of mouth</option>
                                <option value="optC">I am a regular!</option>
                                <option value="optD">Other</option>
                            </select>
                        </div>
                        <br />
                        <div>
                            <label for="" class="title">Any other details you might like to add?</label>
                            <textarea rows="4" cols="50" placeholder="type here"></textarea>
                        </div>
                        <div class="submit">
                            <input type="submit" value="Send Enquiry" id="submit"/>
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

    </body>

</html>