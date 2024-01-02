<?php
	session_start();
    include('db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/services.css">
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
                <a href="#">Verify</a>
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
            <h1>Our Services</h1>
        </div>
    </section>

    <main>
        <div class="service-block">
            <img src="assets/search.svg" alt="">
            <div class="service">
                <h1>Medication Verification</h1>
                <div class="service-text">
                At SafeMeds, we know that it's important to be able to trust the medications you're taking. That's why we offer medication verification services. With our medication verification services, you can be sure that the medications you're taking are authentic and safe.
To verify your medication, simply upload a photo of the medication to our website or enter the medication's NDC number. We will then compare your medication to a database of known counterfeit drugs. If your medication is not in the database, or if it is a known counterfeit drug, we will notify you immediately.                </div>
            </div>
        </div>
        <div class="service-block rev">
            <img src="assets/clinic.svg" alt="">
            <div class="service">
                <h1>Pharmacy Validation</h1>
                <div class="service-text">
                We also offer pharmacy validation services. With our pharmacy validation services, you can be sure that the pharmacy you're buying your medications from is reputable and trustworthy.
To validate a pharmacy, simply enter the pharmacy's name or address to our website. We will then check the pharmacy against a database of known fraudulent pharmacies. If the pharmacy is in the database, or if we have any other concerns about the pharmacy, we will notify you immediately.                </div>
            </div>
        </div>
        <div class="service-block">
            <img src="assets/document.svg" alt="">
            <div class="service">
                <h1>Expert Health Content</h1>
                <div class="service-text">
                At SafeMeds, we believe that everyone deserves access to accurate and up-to-date health information. That's why we offer expert health content on a variety of topics, including medication safety, nutrition, and fitness.
Our expert health content is written by healthcare professionals and is designed to help you make informed decisions about your health.                </div>
            </div>
        </div>
        <div class="service-block rev">
            <img src="assets/home-check.svg" alt="">
            <div class="service">
                <h1>Location Confirmation</h1>
                <div class="service-text">
                We also offer location confirmation services. With our location confirmation services, you can be sure that the pharmacy or healthcare provider you're looking for is actually located where they say they are.
To confirm the location of a pharmacy or healthcare provider, simply enter their name or address to our website. We will then check their location against our database of known businesses. If the business is not in the database, or if the location is incorrect, we will notify you immediately.                </div>
            </div>
        </div>
        <div class="service-block">
            <img src="assets/pills.svg" alt="">
            <div class="service">
                <h1>Medication Interaction Checking</h1>
                <div class="service-text">
                We also offer a medication interaction checking service. This service allows you to check for potential interactions between your medications. Medication interactions can be serious, and it's important to be aware of them so that you can avoid them.
To check for medication interactions, simply visit our website and enter the names of the medications you're taking. We will then check the medications against a database of known interactions. If there are any potential interactions, we will notify you immediately.
You can also use our medication interaction checking service to check for interactions between medications and food, supplements, and herbs.                </div>
            </div>
        </div>
        <div class="service-block rev">
            <img src="assets/delete-shield.svg" alt="">
            <div class="service">
                <h1>Side Effects Reporting</h1>
                <div class="service-text">
                We believe that it's important to report side effects from medications. Side effects can be serious, and it's important to track them so that we can identify potential safety concerns.
To report a side effect, simply visit our website and fill out our side effect reporting form. We will collect information about the side effect, the medication you were taking, and your medical history. We will then submit your report to the appropriate authorities.
Your report will help to identify potential safety concerns and may help to improve the safety of medications for everyone.                </div>
            </div>
        </div>
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