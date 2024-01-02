<?php
	session_start();
    include('db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/faq.css">
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
            <h1>Frequently Asked Questions</h1>
            <div>Find Answers to Your Queries: Frequently Asked Questions about Our Services, Verification Process, and More!</div>
        </div>
    </section>


    <main>
        <div class="qa">
            <img src="assets/ellipses.svg" alt="...">
            <div class="qua question">
                <span><img src="assets/question.svg" alt="."></span>
                <div class="question-text">What is the purpose of this website?</div>
            </div>
            <div class="qua answer">
                <span><img src="assets/answer.svg" alt="."></span>
                <div class="answer-text">Our website is dedicated to verifying the authenticity of drugs and the registration status of pharmacies, ensuring your safety and trust in the pharmaceutical products you use</div>
            </div>
        </div>
        <div class="qa">
            <img src="assets/ellipses.svg" alt="...">
            <div class="qua question">
                <span><img src="assets/question.svg" alt="."></span>
                <div class="question-text">How does the verification process work?</div>
            </div>
            <div class="qua answer">
                <span><img src="assets/answer.svg" alt="."></span>
                <div class="answer-text">To verify a drug or pharmacy, navigate to the 'Verify' page, enter the relevant details, and our system will provide you with real-time information regarding the authenticity and registration status.</div>
            </div>
        </div>
        <div class="qa">
            <img src="assets/ellipses.svg" alt="...">
            <div class="qua question">
                <span><img src="assets/question.svg" alt="."></span>
                <div class="question-text">Can I trust the information provided by this website?</div>
            </div>
            <div class="qua answer">
                <span><img src="assets/answer.svg" alt="."></span>
                <div class="answer-text">Absolutely! We source our data from reliable databases and official sources to ensure accuracy and credibility in the information presented.</div>
            </div>
        </div>
        <div class="qa">
            <img src="assets/ellipses.svg" alt="...">
            <div class="qua question">
                <span><img src="assets/question.svg" alt="."></span>
                <div class="question-text">What information do I need for drug verification?</div>
            </div>
            <div class="qua answer">
                <span><img src="assets/answer.svg" alt="."></span>
                <div class="answer-text">For drug verification, provide details such as the drug name, batch number, and manufacturing date. The more accurate the information, the more precise the verification results.</div>
            </div>
        </div>
        <div class="qa">
            <img src="assets/ellipses.svg" alt="...">
            <div class="qua question">
                <span><img src="assets/question.svg" alt="."></span>
                <div class="question-text">How often is the database updated?</div>
            </div>
            <div class="qua answer">
                <span><img src="assets/answer.svg" alt="."></span>
                <div class="answer-text">Our database is regularly updated to provide you with the latest information on drug authenticity and pharmacy registration. We strive to ensure that you access the most recent and accurate data.</div>
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