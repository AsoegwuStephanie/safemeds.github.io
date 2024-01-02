<?php
	session_start();
    include('db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Page</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/feedback.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="hero" style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/hero1.jpg');  background-repeat: no-repeat; background-size: cover; box-sizing: content-box; margin-bottom: 4rem;">
        <header>
            <span class="logo">
                <img src="assets/logo.svg" alt="Logo">
                SafeMeds
            </span>
            <nav>
                <a href="homepage.php">Home</a>
                <a href="about.php">About</a>
                <a href="services.php">Services</a>
                <a href="verifydrug.php">Verify</a>
                <a href="blog.php">Blog</a>
                <a href="faq.php">FAQ's</a>
                <a href="feedback.php">Feedback</a>
                <a href="contact.php">Contact</a>
                <a href="signup.php">Signup</a>
                <!-- <div>
                    <img src="assets/profile-pic.png" alt=".">
                </div> -->
            </nav>
        </header>
        <div class="intro">
            <h1>Feedback</h1>
            <div>See what our users are saying about our services</div>
        </div>
    </section>


    <main>
        <div class="qa">
            <img src="assets/ellipses.svg" alt="...">
            <div class="qua question">
                <span><img src="assets/ivan-raluchi.png" alt="."></span>
                <div class="question-text">I'm so glad I found this website! I was really worried about buying counterfeit drugs online, but now I know that I can trust the pharmacies that are listed here</div>
            </div>
            <div class="qua answer">
                <span><img src="assets/peter-parker.png" alt="."></span>
                <div class="answer-text">I've used this website to verify the authenticity of my medications several times, and it's always been accurate. I highly recommend it to anyone who wants to make sure that they're taking safe and effective medication</div>
            </div>
        </div>
        <form action="" method="post">
            <input type="email" name="" id="" placeholder="Have any questions not already listed on this page? Please enter them here">
            <button id="sub-btn">Send</button>
        </form>
    </main>


    <section class="foot">
        <footer>
            <div>
                <span class="logo">
                    <img src="assets/logo.png" alt="Logo">
                    SafeMeds
                </span>
            </div>
            <div id="footer-layout">
                <div>
                    <strong>Address</strong>
                    <span>18 Osbourne Way, Admirality road, Lekki Phase1, Lagos, Nigeria.</span>
                    <strong>Phone</strong>
                    <span>+234 902 3422 653</span>
                    <span>+234 902 3422 654</span>
                    <strong>Email</strong>
                    <a href="#">info@safemeds.com</a>
                </div>
                <div>
                    <a href="about.php">About Us</a>
                    <a href="services.php">Services</a>
                    <a href="feedback.php">Feedback</a>
                    <a href="blog.php">Blog</a>
                    <a href="faq.php">FAQ's</a> <a href="about.php">About Us</a>
                    <a href="services.php">Services</a>
                    <a href="feedback.php">Feedback</a>
                    <a href="blog.php">Blog</a>
                    <a href="faq.php">FAQ's</a>
                </div>
                <div>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <div id="socials">
                        <a href="#"><img src="assets/facebook-icon.svg" alt=""></a>
                        <a href="#"><img src="assets/instagram-icon.svg" alt=""></a>
                        <a href="#"><img src="assets/x-icon.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div id="copyright">
                Copyright &copy; 2023 SafeMeds. All rights reserved.
            </div>
        </footer>
    </section>
</body>
</html>