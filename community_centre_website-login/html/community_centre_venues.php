<!DOCTYPE html>

<html lang="en">

    <head>
        <title>Venues Community Centre</title>
        <meta charset="UTF-8"/>
        <meta name="Community Centre Venues Melbourne"
            content="contact the community centre melbourne connections education resources"/>
        <meta name="keywords"
            content="venues community centre website HTML CSS"/>
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
                                    echo "<h5>Hi ".$_COOKIE[$cookie_name].", we can take you on a tour of the venues too, just get in touch :) </h5>";
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
                                    <div class="card-link">VENUES</div>
                                    <h4>Available for Hire</h4>
                                    <p>Our venues are home to many of our regular events, clubs and classes. But when they are not being used for those, they are available to hire.</p>
                                    <p>Each of our venues offers slightly different facilities, read on below for more details or submit the form underneath if you have a specific enquiry related to venue hire.</p>
                                </div>
                            </div>

                        </div>
                        <!-- Image Card -->
                        <div class="card-col">

                            <div class="card image fawn H575">
                                <img src="../images/UnboxingDoodle.png" alt="">
                            </div>
                        </div>
                    </section>

                    <!-- Full Width Card iFrame Left -->
                    <section class="card full-card left beige">
                        <div class="card-text">
                            <div class="card-link">ARTS HOUSE</div>
                            <h4>Location</h4>
                            <p>1234 Lorem ipsum dolor sit amet, consectetur VIC 3000.</p>
                            <p>Phone Number (03) 0000-0000</p>
                        </div>
                        <div class="card-text">
                            <div class="card-link">FACILITIES</div>
                            <div>
                                <ul>
                                    <li>Kitchen</li>
                                    <li>Bathrooms</li>
                                    <li>WiFi</li>
                                    <li>AV Equipment</li>
                                    <li>Flexible furniture</li>
                                </ul>
                            </div>
                            <p>Modern facilities in a heritage building. Well suited to education and exercise classes.</p>
                        </div>
                        <iframe src="https://www.google.com/maps/d/embed?mid=1I-wBlhhTEiE42Tgp9QdIuQGjt7E&hl=en" height="300"></iframe>
                    </section>
                    
                    <!-- Full Width Card iFrame Right -->
                    <section class="card full-card left green">
                        <div class="card-text">
                            <div class="card-link">COMMUNITY CENTRE</div>
                            <h4>Location</h4>
                            <p>1234 Lorem ipsum dolor sit amet, consectetur VIC 3000.</p>
                            <p>Phone Number (03) 0000-0000</p>                        </div>
                        <div class="card-text">
                            <div class="card-link">FACILITIES</div>
                            <div>
                                <ul>
                                    <li>Bathrooms</li>
                                    <li>WiFi</li>
                                    <li>Kitchenette</li>
                                    <li>Whiteboards</li>
                                </ul>
                            </div>
                            <p>Small rooms best suited to meetings, small groups or conversation style clubs.</p>
                        </div>
                            <iframe src="https://www.google.com/maps/d/embed?mid=1I-wBlhhTEiE42Tgp9QdIuQGjt7E&hl=en" height="300"></iframe>
                    </section> 

                    <!-- Full Width Card iFrame Left -->
                    <section class="card full-card left blue">
                        <div class="card-text">
                            <div class="card-link">COMMUNITY LIBRARY</div>
                            <h4>Location</h4>
                            <p>1234 Lorem ipsum dolor sit amet, consectetur VIC 3000.</p>
                            <p>Phone Number (03) 0000-0000</p>                        </div>
                        <div class="card-text">
                            <div class="card-link">FACILITIES</div>
                            <div>
                                <ul>
                                    <li>Bathrooms</li>
                                    <li>Wheelchair Access</li>
                                    <li>WiFi</li>
                                    <li>AV Equipment</li>
                                    <li>Kitchenette</li>
                                </ul>
                            </div>
                            <p>Peaceful, bright rooms; a range of sizes and suits a range of needs.</p>
                        </div>
                        <iframe src="https://www.google.com/maps/d/embed?mid=1I-wBlhhTEiE42Tgp9QdIuQGjt7E&hl=en" height="300"></iframe>
                    </section> 

                <!-- Full Width Form -->
                <section class="card full-card form">
                    <h4>Venue Hire Enquiry</h4>
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
                            <label for="date"class="title">Which date do you require the venue?</label>
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
                            <label for="enquiryType" class="title">Which venue does your enquiry relate to?</label>
                            <label class="check-container"><input type="checkbox" name="Arts House" value="Arts House"/>Arts House</label>
                            <label class="check-container"><input type="checkbox" name="Community Centre" value="Community Centre"/>Community Centre</label>
                            <label class="check-container"><input type="checkbox" name="Community Library" value="Community Library"/>Community Library</label>
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
                        <a href="../index.html">&copy; 2021 Community Centre</a>
                        
                        <a class="privacy" href="../index.html">Privacy Policy</a>
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