<!DOCTYPE html>

<html lang="en">

    <head>
        <title>Events at the Community Centre</title>
        <meta charset="UTF-8"/>
        <meta name="Events at the Community Centre Melbourne"
            content="events festival classes community centre melbourne connections education resources"/>
        <meta name="keywords"
            content="community centre website HTML PHP CSS"/>
        <meta name="author"
            content="Brianna Goanna"/>
        <link rel="stylesheet" type="text/css" href="../css/community_centre_main.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
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
                                    echo "<h5>Hi ".$_COOKIE[$cookie_name].", be a part of it or maybe start something... </h5>";
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
                                    <div class="card-link">EVENTS</div>
                                    <h4>Join In</h4>
                                    <p>Join a social club, take part in interest groups, join an exercise or meditation class, even take a short course to build your skills. We are always adding new events, so keep an eye on this page or contact us at the Centre to find out more.</p>
                                </div>
                            </div>

                        </div>
                        <!-- Image Card -->
                        <div class="card-col">

                            <div class="card image green H575">
                                <img src="../images/ReadingDoodle (3).png" alt="Illustration of girl reading a book">
                            </div>

                        </div>
                    </section>                

                    <!-- Full Width Card Image Right -->
                    <section class="card full-card right fawn">
                        <div class="card-text">
                            <div class="card-link">COFFEE CLUB</div>
                            <h4>Friendly Conversations</h4>
                            <p>Join a small group of locals as they tour the cafes of the community. This club is all about meeting new people, having friendly conversations, a short walk and enjoying a good cuppa!</p>
                            <p>Meet at the Centre every Wednesday at 12 noon, rain hail or shine.</p>
                        </div>
                        <img src="../images/CoffeeDoddle - Copy.png" alt="man holding huge coffee cup drawing">
                    </section>

                    <!-- Full Width Card Image Left -->
                    <section class="card full-card left blue">
                        <div class="card-text">
                            <div class="card-link">MEDITATION GROUP</div>
                            <h4>Find Balance</h4>
                            <p>Lead by an instructor trained in Mindful Meditation techniques, this casual group is all about finding a little peace and quiet in our busy lives. Join in every week or just when you feel the need.</p>
                            <p>Tuesdays 6 - 7pm</p>
                        </div>
                        <img src="../images/MeditatingDoodle (2).png" alt="Illustration of a woman meditating">
                    </section>

                    <!-- Full Width Card Image Right -->
                    <section class="card full-card right beige">
                        <div class="card-text">
                            <div class="card-link">ORGANISATION 101</div>
                            <h4>Get On Top Of It</h4>
                            <p>Need help with your life administration skills? Want to start a new habit? This short course is about learning simple skills that you can take home and start using immediately! Learn about habit forming and productivity techniques for everyday life.</p>
                        </div>
                        <img src="../images/MessyDoodle (3).png" alt="drawing of man chasing papers flying away">
                    </section>

                    <!-- Full Width Card Image Left -->
                    <section class="card full-card left brown">
                        <div class="card-text">
                            <div class="card-link">BOOK CLUB</div>
                            <h4>Literary Lovers</h4>
                            <p>Love a good book? We do too! Our Book Club members all recommend a book for the club to read and then lead a conversation about the topics in the book. But really, we just get together every week, share some food and drink and have a laugh!</p>
                        </div>
                        <img src="../images/ReadingDoodle (3).png" alt="Illustration of a woman meditating">
                    </section>

                <!-- Full Width Table -->
                <section class="card full-card table">
                    <h4>Upcoming Events</h4>
                             <table>
                                <tr>
                                    <th>Event</th>
                                    <th>Class/Group</th>
                                    <th>Venue</th>
                                    <th>Date</th>
                                    <th>Cost</th>
                                </tr>
                                <tr>
                                    <td>Coffee Club</td>
                                    <td>Group</td>
                                    <td>Arts House</td>
                                    <td>01 Jan 2022</td>
                                    <td>Free</td>                                    
                                </tr>
                                <tr>
                                    <td>Meditation Group</td>                                    
                                    <td>Group</td>
                                    <td>Community Centre</td>
                                    <td>21 Jan 2022</td>
                                    <td>Free</td>                                    
                                </tr>
                                <tr>
                                    <td>Organisation 101</td>
                                    <td>Class (5)</td>                                    
                                    <td>Community Centre</td>
                                    <td>25 Jan 2022</td>
                                    <td>$100.00</td>
                                </tr>
                                <tr>
                                    <td>Book Club</td>
                                    <td>Group</td>
                                    <td>Arts House</td>
                                    <td>31 Jan 2022</td>
                                    <td>Free</td>                                    
                                </tr>
                                <tr>
                                    <td>Meditation Group</td>                                    
                                    <td>Group</td>
                                    <td>Community Centre</td>
                                    <td>21 Jan 2022</td>
                                    <td>Free</td>                                    
                                </tr>
                                <tr>
                                    <td>Organisation 101</td>
                                    <td>Class (5)</td>                                    
                                    <td>Community Centre</td>
                                    <td>25 Jan 2022</td>
                                    <td>$100.00</td>
                                </tr>
                            </table>
 
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