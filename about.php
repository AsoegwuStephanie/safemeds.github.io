<?php
	session_start();
    $db= mysqli_connect("localhost", "root", "", "drug") or die(mysqli_error($db));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/about.css">
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
            <h1>About Us</h1>
        </div>
    </section>

    <main>
        <div class="service-block">
            <img src="assets/about1.png" alt="">
            <div class="service">
                <h1>Our Story</h1>
                <div class="service-text">
                    Welcome to SafeMeds, your trusted source for authentic drug verification and pharmacy validation. Established in 2023, we are dedicated to ensuring the safety and reliability of pharmaceuticals for a healthier community.
                    Mission:At SafeMeds we are dedicated to ensuring the health and safety of individuals worldwide. Our mission is to empower consumers and healthcare professionals with a reliable platform for verifying the authenticity of drugs and registered pharmacies. By fostering transparency and trust, we strive to create a global community that can confidently access genuine medications and quality healthcare services. Committed to innovation and integrity, we work towards building a safer and more informed healthcare ecosystem for everyone.
                    Vision: A world where every individual has access to safe and genuine healthcare solutions.
                                    </div>
            </div>
        </div>
        <div class="service-block rev">
            <img src="assets/about2.png" alt="">
            <div class="service">
                <h1>Our Approach</h1>
                <div class="service-text">
                    At SafeMeds we are committed to ensuring that the drugs we present to users as safe are actually safe. That's why we take the following approaches:
                    We partner with trusted pharmacies and pharmaceutical manufacturers to ensure that the drugs we list on our website are authentic and meet high standards of quality and safety.
                    We use a variety of verification methods, including checking government databases, pharmacy databases, and manufacturer websites, to confirm the authenticity of the drugs we list.
                    We monitor for counterfeit drugs by staying up-to-date on the latest counterfeiting trends and using technology to identify counterfeit drugs.
                    We educate users about drug safety by providing information on how to spot counterfeit drugs, how to store and use drugs safely, and the dangers of drug interactions.                </div>
            </div>
        </div>
        <div class="service-block">
            <img src="assets/about3.png" alt="">
            <div class="service">
                <h1>Values</h1>
                <div class="service-text">
                    Safety: Our organization is committed to keeping our employees, customers, and the public safe.
                    Health Empowerment: We are committed to helping people achieve and maintain good health.
                    Innovation: We are constantly innovating to find new ways to improve our products, services, and operations.
                    Noble Responsibility: We believe that we have a responsibility to use our resources and capabilities to make a positive impact on the world.
                    Excellence: We strive to provide the highest quality products and services to our customers.
                    
                    These values are at the core of everything we do. They guide our decision-making and inform our actions. We are committed to living these values every day, and we believe that they make us a better organization.                </div>
            </div>
        </div>
        <div class="service-block rev">
            <img src="assets/about4.png" alt="">
            <div class="service">
                <h1>Accreditations</h1>
                <div class="service-text">
                    Proudly accredited by the following organizations for our unwavering commitment to pharmaceutical safety: 
                    Pharmacists Council of Nigeria (PCN)
                    National Agency for Food and Drug Administration and Control (NAFDAC)
                    Medical and Dental Council of Nigeria (MDCN)
                    National Health Insurance Scheme (NHIS)
                    Federal Ministry of Health (FMOH)
                    
                                    </div>
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
                    <a href="#">About Us</a>
                    <a href="#">Services</a>
                    <a href="#">Feedback</a>
                    <a href="#">Blog</a>
                    <a href="#">FAQ</a>
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