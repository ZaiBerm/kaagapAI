<?php
session_start();
include("../php/function-class/connection.php");
include("../php/function-class/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/onboarding.css">
    <link rel="icon" type="image/x-icon" href="../images/fav.ico">
    <title>kaagapAI</title>
</head>

<body>
    <div class="splash" style = "z-index: 200">
        <h1 class="logo-header">
            <span class="logo">kaagap</span><span class="logo">AI</span>
        </h1>
    </div>

    <header>
        <form action="../php/onboarding.php" method="post" class="wrapper">
            <nav>
                <div class="nav-logo">kaagap<span class = "AI-span">AI</span></div>
                <ul class="nav_list">
                    <li class="nav_item">
                        <a href="#Hero" class="nav_link">Home</a>
                    </li>
                    <li class="nav_item">
                        <a href="#About" class="nav_link">About</a>
                    </li>
                    <li class="nav_item">
                        <a href="#Contact" class="nav_link">Contact Us</a>
                    </li>
                    <li class="nav_item">
                        <a href="../php/function-class/onboarding-func.php" class="nav_link" name="login">Login</a>
                    </li>
                </ul>
            </nav>

            <!-- -->
            <!-- -->
            <img src="../images/menu-navigation-icon.png" id="navii">
            <!-- -->
            <!-- -->

        </form>
    </header>


    <!-- -->
    <!-- -->
    <div id="side-bar">
        <ul class="nav_list">
            <li class="nav_item" id="side">
                <a href="#Hero" class="nav_link">Home</a>
            </li>
            <li class="nav_item" id="side">
                <a href="#About" class="nav_link">About</a>
            </li>
            <li class="nav_item" id="side">
                <a href="#Contact" class="nav_link">Contact Us</a>
            </li>
            <li class="nav_item" id="side">
                <a href="../php/function-class/onboarding-func.php" class="nav_link" name="login">Login</a>
            </li>
        </ul>
    </div>
    <!-- -->
    <!-- -->


    <main>
        <section class="hero-container" id="Hero">
            <div class="wrapper">
                <div class="hero-contents">
                    <div class="message">
                        <h1 class="title">Welcome!</h1>
                        <h3 class="hero-message">
                            kaagapAI is your trusted digital companion, empowering minds and
                            nurturing hearts through AI-powered conversations
                        </h3>

                        <div class="cta">
                            <a href="chat.php?bot_id=2
                            " class="cta-link">GET STARTED</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="info-container" id="About">
            <div class="wrapper">
                <div class="about-contents">
                    <div class="about-lower-part">

                        <h1 class="about-h1">NEED OUR ASSISTANCE?</h1>
                        <div class="photo-banner-bots">

                            <div class="bot-container">
                                <img src="../images/Emran.png" class = "info-emran">
                                <div class="tooltip">
                                    <h3>Hello, I am <span>Emran<span></h3>
                                    <p>I can be your smart and reliable assistant.</p>
                                </div>
                            </div>
                            
                            <div class="bot-container">
                                <img src="../images/An.png" class = "info-emran">
                                <div class="tooltip">
                                    <h3>Hello, I am <span>An<span></h3>
                                    <p>I am your kind and sweet assistant, I am always here if you need some helpful advice.</p>
                                </div>
                            </div>
                            
                            <div class="bot-container">
                                <img src="../images/Akachi.png" class = "info-emran">
                                <div class="tooltip">
                                    <h3>Hello, I am <span>Akachi<span></h3>
                                    <p>Your cool and artistic assistant, you can always count on me!</p>
                                </div>
                            </div>
        
                            <div class="bot-container">
                                <img src="../images/Karabo.png" class = "info-emran">
                                <div class="tooltip">
                                    <h3>Hello, I am <span>Karabo<span></h3>
                                    <p>My name means "An Answer from God". I'm here if you need a friend that you can share your burdens with.</p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="about-message">
                        <h3 class="h3-message">
                            Welcome to kaagapAI, your compassionate companion in the digital realm. Our website is
                            dedicated to providing a lifeline of support for individuals facing mental and emotional
                            challenges. Powered by advanced artificial intelligence, our chatbot serves as a trusted
                            confidant, offering empathetic conversations and valuable guidance. With kaagapAI, you can
                            find solace, understanding, and practical assistance whenever you need it, fostering a sense
                            of connection and empowerment. Join us on this transformative journey towards improved
                            well-being, as we prioritize the mental health of every individual.
                        </h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="contacts-container" id="Contact" tag>
            <div class="wrapper">
            <ion-icon id="left" class="icon" name="chevron-back">
                <
            </ion-icon>
                <div class="contact-contents">
                    <div class="header"><h2>MEET OUR TEAM</h2></div>
                    <ul class="developers">
                        <li class="dev">
                            <div class="profile"><img src="../images/devs/sophia.jpg" draggable="false"></div>
                            <h3 class="dev-name">Sophia Granado</h3>
                            <span class="position">Lead Programmer</span>
                        </li>
                        <li class="dev">
                            <div class="profile"><img src="..//images/devs/richter.jpeg" draggable="false"></div>
                            <h3 class="dev-name">Richter Lapig</h3>
                            <span class="position">System Analys</span>
                        </li>
                        <li class="dev">
                            <div class="profile"><img src="../images/devs/anna.jpg" draggable="false"></div>
                            <h3 class="dev-name">Anna Marie German</h3>
                            <span class="position">Project Manager</span>
                        </li>
                        <li class="dev">
                            <div class="profile"><img src="../images/devs/rochelle.jpg" draggable="false"></div>
                            <h3 class="dev-name">Rochelle Cruz</h3>
                            <span class="position">Documentation Head</span>
                        </li>
                        <li class="dev">
                            <div class="profile"><img src="../images/devs/joanna.jpg" draggable="false"></div>
                            <h3 class="dev-name">Joanna Mae Bello</h3>
                            <span class="position">Head Designer</span>
                        </li>
                        <li class="dev">
                            <div class="profile"><img src="../images/devs/gab.jpg" draggable="false"></div>
                            <h3 class="dev-name">Gabrielle Gonzales</h3>
                            <span class="position">Designer</span>
                        </li>
                        <li class="dev">
                            <div class="profile"><img src="../images/devs/angelica.jpeg" draggable="false"></div>
                            <h3 class="dev-name">Angelica Hubahib</h3>
                            <span class="position">Documentation</span>
                        </li>
                        <li class="dev">
                            <div class="profile"><img src="../images/devs/melanie.jpg" draggable="false"></div>
                            <h3 class="dev-name">Melanie Cruz</h3>
                            <span class="position">Documentation</span>
                        </li>
                        <li class="dev">
                            <div class="profile"><img src="../images/devs/jam.jpg" draggable="false"></div>
                            <h3 class="dev-name">Jamaica Centeno</h3>
                            <span class="position">Documentation</span>
                        </li>
                        <li class="dev">
                            <div class="profile"><img src="../images/devs/mark.jpg" draggable="false"></div>
                            <h3 class="dev-name">Mark Angelo Alcera</h3>
                            <span class="position">Documentation</span>
                        </li>
                        <li class="dev">
                            <div class="profile"><img src="../images/devs/lhoyd.jpg" draggable="false"></div>
                            <h3 class="dev-name">Lhoyd Andrew Bernabe</h3>
                            <span class="position">Documentation</span>
                        </li>
                    </ul>
                    <ion-icon id="right" class="icon" name="chevron-forward">
                        >
                    </ion-icon>
                </div>
            </div>
        </section>
    </main>





    <!-- Script -->
    <script src="../js/onboarding.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>