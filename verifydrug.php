<?php
	session_start();
    $db= mysqli_connect("localhost", "root", "", "drug") or die(mysqli_error($db));

    if (!isset($_SESSION['login'])) { 
        // Redirect to the login page
        header('Location: login.php');
        exit(); // Ensure no further code is executed
    } 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SafeMeds - Drug Verification</title>
<link rel="stylesheet" href="styles/verify.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="navbar">

    <div class="logo">
    <img src="assets/rximage.png" alt="SafeMeds Logo">
        <h4>SafeMeds</h4>
    </div>
    <nav class="nav"> <a href="#home"></a>
        <ul>
        <li><a href="homepage.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="#" class="active" style="color: #71D7CB;">Verify</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="faq.php">FAQ's</a></li>
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    </div>
</header>

<?php
if(isset($_POST['verify1']))
{
    $er = array();
	if (empty($_POST['productName'])) {
        $er['productName'] = "Product Name is missing";
    } else {
        $productName = mysqli_real_escape_string($db, $_POST['productName']);
    }

    if (empty($_POST['nrn'])) {
        $er['nrn'] = "National Registration Number is missing";
    } else {
        $reg = mysqli_real_escape_string($db, $_POST['nrn']);
    }
    if (empty($er)) {
        // Perform a SELECT query
        $query = mysqli_query($db, "SELECT * FROM drugs WHERE Product_Name = '{$productName}' AND NRN = '{$reg}'") or die(mysqli_error($db));

       
    if (mysqli_num_rows($query) > 0) {
        // Drug exists
        $msg = "This drug {$productName} has been verified with the NAFDAC Registration number of {$reg} and is safe for consumption.";
        echo "<script>alert('$msg');</script>";
    } else {
       // Drug does not exist
       $msg = " This drug is not verified by NAFDAC and is unsafe for consumption.";
       echo "<script>alert('$msg');</script>";
    } 
    
    // echo "Product_Name = '{$productName}' AND NRN = '{$reg}'"; 
    // echo "<br>Number of rows: " . mysqli_num_rows($query);
    
    }
}


?>

<main>

    <div class="form-container">
        <div class="text">
        <h2><a href="#home" class="active" style="color: #71D7CB; text-decoration: none">Drug Verification</a> </h2>
        <h2><a href="verifypharmacy.php" class="active"> Pharmacy Verification</a></h2>
        <h2><a href="verifyregister.php" class="active">Register Pharmacy</a></h2>
        </div>
        <form action="" method="post" id="form"> 
        <div class="form">
        <div class="textbox">
        <div class="form-group">
          <label for="drugName">Drug Name</label>
          <input type="text" id="drugName" name="productName">
        </div>
      
        <div class="form-group">
          <label for="serialNumber">Serial Number</label>
          <input type="text" id="serialNumber" name="nrn">
        </div>
        <input type="submit" value="Verify" name="verify1" class="btn">
        <!-- <button class="btn">Verify</button> -->
      </div>
    </div>
      </div>
</form>
</main>
</body>
</html>
