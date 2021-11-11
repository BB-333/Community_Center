<!DOCTYPE html>

<html lang="en">

    <head>
        <title>Volunteer Community Centre</title>
        <meta charset="UTF-8"/>
        <meta name="Community Centre Melbourne"
            content="community centre melbourne connections education resources"/>
        <meta name="keywords"
            content="community centre website HTML CSS"/>
        <meta name="author"
            content="Brianna Goanna"/>
        <link rel="stylesheet" type="text/css" href="../css/community_centre_main.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
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
                                    echo "<h5>Hi ".$_COOKIE[$cookie_name].", maybe you have some time or skills to share? Or know someone... </h5>";
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
                                    <div class="card-link">VOLUNTEER</div>
                                    <h4>Share the Love</h4>
                                    <p>Would you like to get involved? Meeting new people, making connections in your community and sharing your knowledge, time and skills is very rewarding.</p>
                                    <p>We are always interested to hear from potential volunteers and will be in touch when new opportunities open up.</p> 
                                    <p>Submit the form below or get in touch directly to have a conversation.</p>
                                </div>
                            </div>

                        </div>
                        <!-- Image Card -->
                        <div class="card-col">

                            <div class="card image green H575">
                                <img src="../images/LovingDoodle.png" alt="">
                            </div>

                        </div>
                    </section>

                    <!-- Full Width Card Tabs -->
                        <section class="full-card tabs" id="">
                            <ul class="tab-title">
                                <li><a data-id="tutor" class="tab-item current" href="#" role="tab">Homework Tutor</a></li>
                                <li><a data-id="eventcoord" class="tab-item" href="#" role="tab">Event Coordinator</a></li>
                                <li><a data-id="festival" class="tab-item" href="#" role="tab">Festival Support</a></li>
                              </ul>
                              <div id="tutor" class="tab-inner current">
                                <p class="tab-text">Do you have teaching experience? Or a passion for education and early learning?</p>
                                <p class="tab-text">Our Homework Club is a weekly group for primary and highschool students to find support with their homework. Our tutors are there to guide and support the students through their schoolwork.</p>
                            </div>
                              <div id="eventcoord" class="tab-inner">
                                <p class="tab-text">Events can take a lot of time to organise and bring together. This is a varied role which works for varied schedules.</p>
                                <p class="tab-text">We often call a list of volunteers to see who is able to step in and help out when the need arises.</p>
                            </div>
                              <div id="festival" class="tab-inner">
                                <p class="tab-text">Our annual festival takes place in September and it is 'all hands on deck'! Many things to organise, coordinate, set up, troubleshoot and pack down.</p>
                                <p class="tab-text">If you have energy and time to spare at the beginning of spring, we want to hear from you!</p>
                            </div>
        
                        </section>

                <!-- Full Width Form -->
                <section class="card full-card form">
                    <h4>Volunteer Expression of Interest</h4>
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
                            <label for="date"class="title">Birthdate</label>
                            <input type="date" name="date"/>
                        </div>
                        <br />
                        <div class="radio-buttons">
                            <span class="title">Have you volunteered with the Community Centre before?</span>
                            <input type="radio" name="experienceY" id="experienceY" value="expVolunteer"/>
                            <label for="labelA">Yes</label>
                            
                            <input type="radio" name="experienceN" id="experienceN" value="newVolunteer"/>
                            <label for="labelA">No, this is my first time.</label>
                        </div>
                        <br />
                        <div>
                            <label for="enquiryType" class="title">Which role are you interested in?</label>
                            <label class="check-container"><input type="checkbox" name="homeworkTutor" value="homeworkTutor"/>Homework Tutor</label>
                            <label class="check-container"><input type="checkbox" name="eventCoord" value="eventCoord"/>Event Coordinator</label>
                            <label class="check-container"><input type="checkbox" name="festivalSupport" value="festivalSupport"/>Festival Support</label>
                            <label class="check-container"><input type="checkbox" name="generalVol" value="generalVol"/>General Volunteering</label>
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
                        <br />
                        <!-- File Upload Button & Table -->
                        <div class="fileUpload">
                            <label class="fileBtn">
                                <input type="file" id="files" name="files[]" multiple onchange="fileUploadHandler(event)"/>
                                Upload Files
                            </label>
                            <br />
                            <table class="fileTable" id="fileDetails">
                                <tr>
                                    <th>Files Uploaded</th>
                                </tr>
                            </table>
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

        <script>
            $(function () {

                const tabItem = $(".tab-item");
                const tabInner = $(".tab-inner");

                tabItem.on("click", function () {
                    tabItem.removeClass("current");
                    $(this).addClass("current");

                    tabInner.removeClass("current");

                    $("#" + $(this).data("id")).addClass("current");

                    return false;
                });
            });

        </script>

    </body>

</html>