<?php
	session_start();
    include('db_connect.php');
    include('authenticate.php');
 
    authenticate();
   
    $category_id = $_SESSION['category_id'];
    $filename = $_SESSION['upload'];
    $fname = $_SESSION['fname'];
     $email = $_SESSION['email'];
     $password = $_SESSION['password'];
     $select = mysqli_query($db,"SELECT * FROM signup") or die(mysqli_error($db));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Pharmacy</title>
    <link rel="stylesheet" href="styles/verify2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Assuming $db is your database connection

$er = array(); // Declare the error array

if (isset($_POST['register'])) {
    if (empty($_POST['pharmacyName'])) {
        $er['pharmacyName'] = "Pharmacy Name is missing";
    } else {
        $pharmacyName = mysqli_real_escape_string($db, $_POST['pharmacyName']);
    }
    if (empty($_POST['email'])) {
        $er['email'] = "Email address is missing";
    } else {
        $email = mysqli_real_escape_string($db, $_POST['email']);
    }
    if (empty($_POST['loc'])) {
        $er['loc'] = "Location is missing";
    } else {
        $loc = mysqli_real_escape_string($db, $_POST['loc']);
    }

    // Check if Pharmacy Name already exists
    if (empty($er)) {
        $checkNameQuery = "SELECT pharmacyName FROM pharmacy WHERE pharmacyName = '$pharmacyName'";
        $result = mysqli_query($db, $checkNameQuery);

        if (mysqli_num_rows($result) > 0) {
            $er['pharmacyNameExists'] = "This Pharmacy Name is already registered.";
        }
    }

    if (empty($er)) {
        $insert = mysqli_query($db, "INSERT INTO pharmacy (pharmacyName, email, location) VALUES ('{$pharmacyName}', '{$email}', '{$loc}')");
        if ($insert) {
            echo "<script>alert('Pharmacy Successfully Added');</script>";

            if ($insert) {
                // Load Composer's autoloader
                require 'vendor/autoload.php';
                require  'phpmailer/src/Exception.php';
                require  'phpmailer/src/PHPMailer.php';
                require  'phpmailer/src/SMTP.php';

                // Create a new PHPMailer instance
                $mail = new PHPMailer(true);
            
                try {
                    // Server settings
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';  // Specify main SMTP server
                    $mail->SMTPAuth = true;           // Enable SMTP authentication
                    $mail->Username = 'dannycodes1@gmail.com'; // your gmail
                    $mail->Password = 'yuhxzwgufloxovil';   // your app password
                    $mail->SMTPSecure = 'ssl'; // Enable SSL encryption
                    $mail->Port = 465;  // TCP port to connect to
            
                    // Recipients
                    $mail->setFrom('dannycodes1@gmail.com', 'Safe Meds');
                    $mail->addAddress($_POST["email"]);  // Add a recipient
            
                    // Content
                    $mail->isHTML(true);  // Set email format to HTML
                    $mail->Subject = 'Welcome to our Pharmacy Network!';
                    $mail->Body    = "Hello " . $pharmacyName . ",<br><br>";
                    $mail->Body   .= "Thank you for registering your pharmacy with us. We would like to schedule an inspection date. Please let us know your preferred dates for this within the next 1 week.<br><br>";
                    $mail->Body   .= "Best regards,<br>";
                    $mail->Body   .= "The Safe Meds Team";
            
                    $mail->send();
                    echo "<script>alert('Registration successful and email sent');</script>";
                    // $mail->SMTPDebug = 2; // Enable verbose debug output
                } catch (Exception $e) {
                    echo "<script>alert('Registration successful but email sending failed. Mailer Error: {$mail->ErrorInfo}');</script>";
                    // $mail->SMTPDebug = 2; // Enable verbose debug output

                }
            }

        } else {
            echo "<script>alert('Error adding pharmacy');</script>";
        }
    } else {
        // Display form errors
        foreach ($er as $error) {
            echo "<script>alert('$error');</script>";
        }
    }
}
?>

<div class="dashboard-container">
        <nav class="sidebar">
            <div class="user-info">
                <img src="images/<?php echo $filename?>" alt="User Avatar" class="avatar"><br>
                <span class="username"><?php echo $fname?></span>
            </div>
            <ul>
                <li><a href="dash.php">Dashboard</a></li>
                <li><a href="verifydrug1.php">Verify Drug</a></li>
                <li><a href="verifyregister.php">Register Pharmacy</a></li>
                <li><a href="verifypharmacy.php">Check Pharmacy</a></li>
                <li><a href="userprofile.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <section class="main-content">
            <h1>Verify Pharmacy</h1>
            <div class="dashboard-overview">
            <form action="" method="post" id="form"> 
        <div class="form">
        <div class="textbox">
        <div class="form-group">
          <label for="pharmacyName">Pharmacy Name</label>
          <input type="text" id="pharmacyName" name="pharmacyName">
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="mail" name="email">
        </div>
        <div class="form-group">
          <label for="location">Location</label>
          <input type="text" id="location" name="loc">
        </div>
        <input type="submit" value="Register" name="register" class="btn">
        <!-- <button class="btn">Register</button> -->
      </div>
    </div>
      </div>
</form>
        </section>
    </div>

    </section>

</div>
</body>
</html>
