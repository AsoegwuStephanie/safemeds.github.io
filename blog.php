<?php
	session_start();
    include('db_connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/blog.css">
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
            <h1>Blogs</h1>
            <div>Stay Informed, Stay Healthy - Our Blog Unveils the Latest Trends, Tips, and Discoveries in Healthcare and Pharmaceuticals.</div>
        </div>
    </section>

    <main>
        <div class="blog-row">
            <div class="blog">
                <img src="assets/blog-1.png" alt="" class="blog-img">
                <strong class="blog-title">Unveiling The Pink Ribbon</strong>
                <div class="blog-meta">
                    <span class="info">
                        <img src="assets/person.svg" alt="O">
                        By Rita Okankwo
                    </span>
                    <span class="info">
                        <img src="assets/calendar.svg" alt="O">
                        17th October 2023
                    </span>
                    <span class="info">
                        <img src="assets/comment.svg" alt="O">
                        12
                    </span>
                </div>
                <div class="blog-content">Shedding Light on Breast Health, Encouraging Early Detection, and Celebrating Strength in October - Together, We Can Make a Difference!</div>
                <div class="blog-link">
                    <a href="blogpost.php">Read more <img src="assets/link-intact.svg" alt=""></a>
                </div>
            </div>
            <div class="blog">
                <img src="assets/blog-2.png" alt="" class="blog-img">
                <strong class="blog-title">How to stay safe</strong>
                <div class="blog-meta">
                    <span class="info">
                        <img src="assets/person.svg" alt="O">
                        By Chisom Ihechi
                    </span>
                    <span class="info">
                        <img src="assets/calendar.svg" alt="O">
                        17th October 2023
                    </span>
                    <span class="info">
                        <img src="assets/comment.svg" alt="O">
                        23
                    </span>
                </div>
                <div class="blog-content">Taking medication can be a lifesaver, but it's important to take medication safely. This blog post will teach you how to stay safe when taking medication.</div>
                <div class="blog-link">
                    <a href="#">Read more <img src="assets/link-intact.svg" alt=""></a>
                </div>
            </div>
            <div class="blog">
                <img src="assets/blog-3.png" alt="" class="blog-img">
                <strong class="blog-title">How to spot counterfeit drugs</strong>
                <div class="blog-meta">
                    <span class="info">
                        <img src="assets/person.svg" alt="O">
                        By Rita Okankwo
                    </span>
                    <span class="info">
                        <img src="assets/calendar.svg" alt="O">
                        17th October 2023
                    </span>
                    <span class="info">
                        <img src="assets/comment.svg" alt="O">
                        19
                    </span>
                </div>
                <div class="blog-content">Counterfeit drugs can be dangerous and even deadly. It's important to be able to spot counterfeit drugs so that you can avoid them and take required action.</div>
                <div class="blog-link">
                    <a href="#">Read more <img src="assets/link-intact.svg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="blog-row">
            <div class="blog">
                <img src="assets/blog-4.png" alt="" class="blog-img">
                <strong class="blog-title">Tips for saving money on...</strong>
                <div class="blog-meta">
                    <span class="info">
                        <img src="assets/person.svg" alt="O">
                        By Jimmy K.D
                    </span>
                    <span class="info">
                        <img src="assets/calendar.svg" alt="O">
                        13th October 2023
                    </span>
                    <span class="info">
                        <img src="assets/comment.svg" alt="O">
                        37
                    </span>
                </div>
                <div class="blog-content">Prescription drugs can be expensive, but there are ways to save money on them. This blog post will give you tips on how to save money on prescription drugs, such as using generic drugs and others.</div>
                <div class="blog-link">
                    <a href="#">Read more <img src="assets/link-intact.svg" alt=""></a>
                </div>
            </div>
            <div class="blog">
                <img src="assets/blog-5.png" alt="" class="blog-img">
                <strong class="blog-title">The future of drug safety</strong>
                <div class="blog-meta">
                    <span class="info">
                        <img src="assets/person.svg" alt="O">
                        By Tamilore Uka
                    </span>
                    <span class="info">
                        <img src="assets/calendar.svg" alt="O">
                        6th October 2023
                    </span>
                    <span class="info">
                        <img src="assets/comment.svg" alt="O">
                        18
                    </span>
                </div>
                <div class="blog-content">What does the future hold for drug safety? what are the trends? This blog post will discuss some of the latest trends in drug safety and how they may impact the way we take medication in the future.</div>
                <div class="blog-link">
                    <a href="#">Read more <img src="assets/link-intact.svg" alt=""></a>
                </div>
            </div>
            <div class="blog">
                <img src="assets/blog-6.png" alt="" class="blog-img">
                <strong class="blog-title">The HPV</strong>
                <div class="blog-meta">
                    <span class="info">
                        <img src="assets/person.svg" alt="O">
                        By Rita Okankwo
                    </span>
                    <span class="info">
                        <img src="assets/calendar.svg" alt="O">
                        3rd October 2023
                    </span>
                    <span class="info">
                        <img src="assets/comment.svg" alt="O">
                        46
                    </span>
                </div>
                <div class="blog-content">Human papillomavirus (HPV) is a common virus that can cause a variety of health problems, including genital warts and cervical cancer.</div>
                <div class="blog-link">
                    <a href="#">Read more <img src="assets/link-intact.svg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="blog-row">
            <div class="blog">
                <img src="assets/blog-11.png" alt="" class="blog-img">
                <strong class="blog-title">Preparing for childbirth</strong>
                <div class="blog-meta">
                    <span class="info">
                        <img src="assets/person.svg" alt="O">
                        By Rita Okankwo
                    </span>
                    <span class="info">
                        <img src="assets/calendar.svg" alt="O">
                        4th September 2023
                    </span>
                    <span class="info">
                        <img src="assets/comment.svg" alt="O">
                        56
                    </span>
                </div>
                <div class="blog-content">There are a lot of things you can do to prepare for childbirth, such as taking childbirth classes and packing a hospital bag. This article will prepare you for the things ahead.</div>
                <div class="blog-link">
                    <a href="#">Read more <img src="assets/link-intact.svg" alt=""></a>
                </div>
            </div>
            <div class="blog">
                <img src="assets/blog-12.png" alt="" class="blog-img">
                <strong class="blog-title">How to improve sleep quality</strong>
                <div class="blog-meta">
                    <span class="info">
                        <img src="assets/person.svg" alt="O">
                        By Richard Eze
                    </span>
                    <span class="info">
                        <img src="assets/calendar.svg" alt="O">
                        1st September 2023
                    </span>
                    <span class="info">
                        <img src="assets/comment.svg" alt="O">
                        25
                    </span>
                </div>
                <div class="blog-content">Sleep is essential for our physical and mental health. It allows our bodies to rest and repair themselves, and it helps our brains to consolidate memories and process emotions.</div>
                <div class="blog-link">
                    <a href="#">Read more <img src="assets/link-intact.svg" alt=""></a>
                </div>
            </div>
            <div class="blog">
                <img src="assets/blog-13.png" alt="" class="blog-img">
                <strong class="blog-title">Unveil The Pink Ribbon</strong>
                <div class="blog-meta">
                    <span class="info">
                        <img src="assets/person.svg" alt="O">
                        By Richard Eze
                    </span>
                    <span class="info">
                        <img src="assets/calendar.svg" alt="O">
                        1st september 2023
                    </span>
                    <span class="info">
                        <img src="assets/comment.svg" alt="O">
                        34
                    </span>
                </div>
                <div class="blog-content">Anxiety is a normal human emotion, but it can become a problem when it is excessive or persistent. Anxiety can cause a range of physical and psychological symptoms.</div>
                <div class="blog-link">
                    <a href="#">Read more <img src="assets/link-intact.svg" alt=""></a>
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