<?php
	session_start();
    include('db_connect.php');
    // $select = mysqli_query($db,"SELECT * FROM signup") or die(mysqli_error($db));   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>SafeMeds</title>
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
            <h1>Elevate your health journey with <span class="highlight">SafeMeds</span>.</h1>
            <div>Discover authentic medications, verified pharmacies, and expert health insights. Your trusted partner for safe and informed healthcare. Join us in building a healthier tomorrow</div>
            <button id="verify"><a href="login.php" style="color: white; text-decoration:none;"> Verify</a> </button> 
        </div>
    </section>


    <main>
        <article>
            <img src="assets\stock-img.png" alt="">
            <div id="home-about">
                <div style="font-size: 1.5rem;">
                    <span>- <em class="highlight">Who Are We?</em></span>
                </div>
                <h1>Our Mission</h1>
                <div id="article-text">At SafeMeds we are dedicated to ensuring the health and safety of individuals worldwide. Our mission is to empower consumers and healthcare professionals with a reliable platform for verifying the authenticity of drugs and registered pharmacies. By fostering transparency and trust, we strive to create a global community that can confidently access genuine medications and quality healthcare services. Committed to innovation and integrity, we work towards building a safer and more informed healthcare ecosystem for everyone.</div>
                <span class="highlight"><h1>Core Values</h1>S.H.I.N.E</span>
                <div>
                    <ul>
                        <li>Safety</li>
                        <li>Health Empowerment</li>
                        <li>Innovation</li>
                    </ul>
                    <ul>
                        <li>Noble Responsibility</li>
                        <li>Excellence</li>
                    </ul>
                </div>
            </div>
        </article>

        <div id="stats">
            <div><h1>600+</h1>Verified Drugs</div>
            <div><h1>200</h1>Safe Clients</div>
            <div><h1>126</h1>Verified Pharmacies</div>
        </div>

        <div id="services">
            <h1>Our Services</h1>
            <div id="service-grid">
                <div class="service">
                    <img src="assets/icon-verified.svg" alt="">
                    <strong>Medication Verification</strong>
                    Ensure the authenticity and safety of your medications. Our platform allows you to verify the legitimacy of your drugs, promoting your well-being.
                </div>
                <div class="service">
                    <img src="assets/icon-verified.svg" alt="">
                    <strong>Pharmacy Validation</strong>
                    Trust in your pharmacy choices. We confirm and validate the details of registered pharmacies, providing you with a reliable network of trusted health providers.
                </div>
                <div class="service">
                    <img src="assets/icon-verified.svg" alt="">
                    <strong>Expert Health Content</strong>
                    Access insightful health blogs created by our Chief Pharmacist. Stay informed about the latest health trends and make informed decisions for your well-being.
                </div>
                <div class="service">
                    <img src="assets/icon-verified.svg" alt="">
                    <strong>Location Confirmation</strong>
                    Our dedicated team verifies the physical locations of pharmacies listed on our platform. Feel confident about the accuracy of information provided.
                </div>
                <div class="service">
                    <img src="assets/icon-verified.svg" alt="">
                    <strong>User Reviews and Feedback</strong>
                    Join our community and share your experiences. Read user reviews and contribute to a collective pool of knowledge for informed health decisions.
                </div>
            </div>
        </div>

        <div id="fact">
            <div>
                <h1>Did You Know?</h1>
                Did you know that over 80% of the world's population relies on herbal medicine, showcasing the enduring significance of traditional remedies? <span class="highlight">Aspirin</span>,
                 a household pain reliever, has roots in willow bark and has been a trusted ally for centuries. 
                The accidental discovery of <span class="highlight">antibiotics</span>, like penicillin in 1928 by Alexander Fleming, transformed the landscape of medicine.
                 Delving into the extraordinary, the world's most expensive substance by weight is a rare octopus ink used for camouflage. 
                 In the realm of cutting-edge medicine, pharmacogenomics explores how our genetic makeup shapes responses to drugs, paving the way for personalized and effective treatments.
                           </div>
            <img src="assets/pills.png" alt="">
        </div>

        <div id="blog-highlights">
            <div id="blog-top">
                <h1>Blog Highlights</h1>
                <a href="#">See more</a>
            </div>
            <div id="blogs">
                <div class="blog">
                    <img src="assets/blog-1-pic.png" alt="">
                    <h3>Pharmaceutical Technology in Nigeria<img src="assets/link-intact.svg" alt=""></h3>
                    Explore the cutting-edge landscape of pharmaceutical technology in Nigeria. Our blog delves into the transformative advancements shaping the nation's healthcare industry. From innovative drug delivery systems to digital health solutions, 
                    embark on a journey where technology meets wellness. Stay informed, stay empowered, as we navigate the intersection of health and innovation in Nigeria.                </div>
                <div class="blog">
                    <img src="assets/blog-2-pic.png" alt="">
                    <h3>Empowering Communit Health<img src="assets/link-intact.svg" alt=""></h3>
                    Discover the heartwarming stories behind community health initiatives in Nigeria. Our blog sheds light on the dedicated individuals and organizations working tirelessly to improve healthcare access and outcomes.
                     From mobile clinics reaching remote areas to grassroots campaigns fostering health awareness, be inspired by the positive impact unfolding within local communities.                </div>
            </div>
        </div>

        <div id="expert-div">
            <h1>Meet Our Team Of Experts</h1>
            <div id="expert-list">
                <div class="expert">
                    <img src="assets/aigbe-david.png" alt="">
                    <h2>Aigbe David</h2>
                    <h3>Chief Pharmacist and Head Content Writer</h3>
                    David leads our pharmacy team, ensuring the highest standards in drug dispensing, while also sharing valuable health insights through engaging and informative content.                </div>
                <div class="expert">
                    <img src="assets/umeh-nora.png" alt="">
                    <h2>Umeh Nora</h2>
                    <h3>Head of Pharmacy Location Verification</h3>
                    Nora oversees the team responsible for physically verifying and confirming the locations of pharmacy stores, ensuring accessibility and reliability for our users.                </div>
                <div class="expert">
                    <img src="assets/akinlade-jedidiah.png" alt="">
                    <h2>Akinlade Jedidiah</h2>
                    <h3>Medication Validation Specialist</h3>
                    Jedi ensures the safety and authenticity of medications on our platform, employing rigorous validation processes for the well-being of our users.                </div>
            </div>
        </div>

        <div id="reviews">
            <h1>What Are Our Users Saying</h1>
            <div id="user-reviews">
                <div class="user-review">
                    <img src="assets/icon -block-quote-line.svg" alt="" class="quote">
                    This site is a lifesaver! Easy verification of medications and pharmacies. Highly recommended for anyone concerned about their health.                    <img src="assets/thompson-delanie.png" alt="">
                    <em>Thompson Delanie</em>
                </div>
                <div class="user-review">
                    <img src="assets/icon -block-quote-line.svg" alt="" class="quote">
                    The health blog is my go-to for trustworthy information. Thanks to the team for creating a platform that prioritizes user well-being.                    <img src="./assets/ike-britney.png" alt="">
                    <em>Ike Britney</em>
                </div>
                <div class="user-review">
                    <img src="assets/icon -block-quote-line.svg" alt="" class="quote">
                    The location verification service is a game-changer. Knowing I can trust the pharmacies listed adds an extra layer of confidence in my health choices.                    <img src="assets/okoye-collins.png" alt="">
                    <em>Okoye Collins</em>
                </div>
            </div>
            <span>Join the ranks of certified users and experience the reliability of our services. Your health journey starts here</span>
        </div>
    </main>


    <section class="foot">
        <div class="sub">
            <strong>Stay Informed, Stay Healthy. Subscribe to our news letter for the latest updates on pharmaceutical advancements, health tips, and community initiatives.</strong>
            <form action="" method="post">
                <input type="email" name="" id="" placeholder="Enter your email address">
                <button id="sub-btn"><strong>Subscribe</strong></button>
            </form>
        </div>
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