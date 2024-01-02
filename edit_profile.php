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
    <title>Update Profile</title>
    <link rel="stylesheet" href="styles/update.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>

<?php

$query = mysqli_query($db, "SELECT * FROM signup WHERE category_id = '".$category_id."'
    ") or die(mysqli_error($db));

$result = mysqli_fetch_array($query);

extract ($result); //ALL OUR COLUMN NAMES ARE NOW AVAILABLE TO US AS VARIABLE NAMES
?>

<?php
if(isset($_POST['update'])){
if(empty($_POST['fname'])){
    $er['fname']="Full Name is Missing";
} else{
    $fname = mysqli_real_escape_string($db,$_POST['fname']);
}
if(empty($_POST['email'])){
    $er['email']="Email address is missing";
} else{
    $email = mysqli_real_escape_string($db,$_POST['email']);
}
    if(empty($_POST['password'])){
                $er['password'] = "Enter your password";
            } else {
                $password = mysqli_real_escape_string($db, $_POST['password']);
            }

if(empty($er)){
    $update = mysqli_query($db, "UPDATE signup SET
                                fullname = '".$fname."',
                                    email = '".$email."',
                                    password = '".$password."'
                                    WHERE category_id = '".$category_id."'
                                    ") or die (mysqli_error($db));

     echo "<script>alert('Profile successfully Updated');</script>";
    $msg = "Profile Successfully Updated";
    header("location:logout.php?msg=$msg");
} 
}
?>

<div class="update-container">
        <form action="" method="post">
            <h2>Update Profile</h2>
            
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="fname" name="fname" placeholder="<?php echo"{$fname}"?>" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="<?php echo"{$email}"?>" required>
            </div>

            <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" id="password" name="password" placeholder="<?php echo"{$password}"?>" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Update" name="update" class="btn">
            </div>
        </form>
    </div>
</body>
</html>
