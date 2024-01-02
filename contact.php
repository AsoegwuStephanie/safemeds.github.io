<?php
	session_start();
    include('db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Contact Page</title>
</head>
<body>
    <section class="mail">
        <h1>Contact Us</h1>
        E-mail
        <input type="email" name="" id="" placeholder="Enter your email">
        Message
        <input type="text" name="" id="message">
        <button>Send</button>
    </section>
    <section class="contact-info">
        <h1>Contact Info</h1>
        <div class="info">
            <img src="assets/mail.svg" alt="">
            <input type="text" name="" id="" value="info@safemeds.com" disabled>
        </div>
        <div class="info">
            <img src="assets/building.svg" alt="">
            <input type="text" name="" id="" value="18 Osbourne Way, Admirality road, Lekki Phase1, Lagos, Nigeria." disabled>
        </div>
        <div class="info">
            <img src="assets/phone.svg" alt="">
            <input type="text" name="" id="" value="+234 902 3422 653" disabled>
        </div>
        <div class="socials">
            <img src="assets/facebook-icon.svg" alt="">
            <img src="assets/instagram-icon.svg" alt="">
            <img src="assets/x-icon.svg" alt="">
        </div>
        <div id="top-left-box"></div>
    </section>
    <div id="right-bar"></div>
    <div id="left-box"></div>
</body>
</html>