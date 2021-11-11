<!DOCTYPE html>

<html lang="en">

    <head>
        <title>Community Center Login</title>
        <meta charset="UTF-8"/>
        <meta name="description"
            content="SEO description of page here"/>
        <meta name="keywords"
            content="HTML CSS"/>
        <meta name="author"
            content="First Last"/>
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

                <div class="greeting">
                    <?php
                            $cookie_name="member_login";             

                            //Verify Cookie set on login
                            if(isset($_COOKIE[$cookie_name]))
                            {
                                echo "<h4>Welcome ".$_COOKIE[$cookie_name]."! </h4>";
                                header('location:community_centre_home.php');
                            }
                            else
                            {
                                // echo "<h5>Hi, this site is restricted to members only, please log in below to access. </h5>";
                            }                            
                    ?>
                </div>


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

                    <section class="card full-card form login">
                    <?php echo $_GET['Message'];?>
                        <h4>Member Login</h4>
                        <form  name="memberLogin" action="cc_login.php" method="POST" autocomplete="on">

                            <div>
                                <label for="givenName" class="title">Given Name</label>
                                <input type="text" id="givenName" name="givenName" placeholder="" required/>
                            </div>
                            <div>
                                <label for="familyName" class="title">Family Name</label>
                                <input type="text" id="familyName" name="familyName" placeholder="" required/>
                            </div>
                            <div>
                                <label for="email" class="title">Email</label>
                                <input type="email" id="email" name="email" placeholder="email@domain.com" required/>
                            </div>
                            <div>
                                <label for="password" class="title">Password</label>
                                <input type="password" id="password" name="password" placeholder="" required/>
                            </div>

                            <div class="submit">
                                <input type="submit" value="Login" name="login"/>
                            </div>

                        </form>
                    </section>

<!--                 </section>  Main Container -->
                
            
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