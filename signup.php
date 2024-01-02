<?php

 session_start();
 include('db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styles1.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Istok+Web:wght@400;700&display=swap" rel="stylesheet">
<style>
    .input-box1{
        width: 500px;
    height: 56px;
    padding: 10px;
    position: absolute;
    /* letter-spacing: 0.1cm; */
   margin-left: 700px;
   margin-top: -320px;
    display: inline-block;
    background: #F2F2F2;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }
    .email-label1{
        position: absolute;
    margin-top: 180px;
    margin-left: 175px;
    /* color: rgba(63.75, 63.75, 63.75, 0.50); */
    color: #1E1E1E;
    font-size: 18px;
   
    font-weight: 400;
    /* word-wrap: break-word; */
    }
    </style>
    <title>Signup Page</title>
</head>
<body>

<?php
$er = []; // Array to hold error messages
if(isset($_POST['add']))
{
	if(empty($_POST['fname'])){
		$er['fname'] = "Full name is missing";
	} else{
		$fname = mysqli_real_escape_string($db, $_POST['fname']);
	}
    if(empty($_POST['email'])){
		$er['email'] = "Email Address is missing";
	} else{
		$email = mysqli_real_escape_string($db, $_POST['email']);
	}
	if(empty($_POST['pass'])){
		$er['pass'] = "Password is missing";
	} else{
		$pword = mysqli_real_escape_string($db, $_POST['pass']);
	}

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $er = []; // Initialize error array
    
        // Check if the file is uploaded
        if (isset($_FILES['upload']) && $_FILES['upload']['error'] == 0) {
            $max_size = 6291456; // 6 MB
            $allowedMimeTypes = ["image/jpg", "image/jpeg", "image/png", "image/webp"];
    
            if (!in_array($_FILES['upload']['type'], $allowedMimeTypes)) {
                $er['ftype'] = "File type not acceptable";
            }
    
            if ($_FILES['upload']['size'] > $max_size) {
                $readableSize = round($max_size / 1048576, 2) . ' MB';
                $er['fsize'] = "File is too large. Maximum Size: " . $readableSize;
            }
    
            $filename = basename($_FILES['upload']['name']);
            $filename = str_replace(" ", "_", $filename);
            $destination = 'images/' . $filename;
    
            if (!move_uploaded_file($_FILES['upload']['tmp_name'], $destination)) {
                $er['fupload'] = "File not successfully added";
            }
        } else {
            $er['fupload'] = "No file uploaded or file upload error";
        }
    
        // Display errors or success message
        // if (empty($er)) {
        //     echo"<script>alert('File uploaded successfully');</script>";
        // } else {
        //     foreach ($er as $error) {
        //         echo"<script>alert('File not uploaded successfully');</script>";
        //     }
        // }
    }
    
// Check if email already exists
if (empty($er)) {
    $checkEmailQuery = "SELECT email FROM signup WHERE email = '$email'";
    $result = mysqli_query($db, $checkEmailQuery);

    if (mysqli_num_rows($result) > 0) {
        $er[] = "This email is already registered.";
    }
}
	if(empty($er)){
	
		$insert = mysqli_query($db, "INSERT INTO signup VALUES( NULL,'{$filename}','{$fname}','{$email}', '{$pword}')") or die(mysqli_error($db));
        if ($insert) {
            echo "<script>alert('User Successfully Added');</script>";
        } else {
            // Handle the error more gracefully
            echo "<script>alert('Error adding User');</script>";
        }
    } else {
        // Display form errors
        foreach ($er as $error) {
            echo "<script>alert('$error');</script>";
        }
    }

}
?>

    <form action="" method="post" id="form" enctype="multipart/form-data">

        <div class="main-container">
          <a href="homepage.php">  <img class="background-image" src="assets/rximage.png" /></a>
            <label class="title">Sign Up</label>
            <label class="email-label" for="name" >Full Name</label><br>
            <input  class="input-box" type="text" id="name" name="fname" placeholder="Input your full name" required><br>

           <br><br><br><label class="email-label1" for="email" style="top:110px; left:525px;">E-mail</label><br>
            <input class="input-box1" type="email" id="email" name="email" placeholder="Input your email"  required><br>

            <label class="password-label" for="password">Password</label><br>
            <input class="input-box" type="password" id="password" name="pass" placeholder="Input your password"  required><br><br>
            
            <br><br><label for="profileImage" class="email-label1" style="top:320px; left:525px;">Profile Image</label>
  <br><br><br><input class="input-box1" type="file" name="upload" id="profileImage" accept="image/*">

            <input type="submit" value="Register" name="add" >
           <div class="terms-text" style="top:620px;"> <input type="checkbox">I agree to the Terms and Conditions</div>
            <span class="signup-text">Already have an account?  <a href="login.php" class="login-link">Sign In</a></span>
        
            </div>

    </form>
  
    </div>
</body>
</html>
