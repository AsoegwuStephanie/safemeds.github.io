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
    <title>User Profile</title>
    <link rel="stylesheet" href="styles/profile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <h1>User Profile</h1>
        </div>
        <div class="profile-details">
            <div class="profile-picture">
                <img src="images/<?php echo $filename?>" alt="User Avatar">
            </div>
            <div class="profile-info">
            <p>Name: <?php echo $fname?></p>
                <p>Email: <?php echo $email?></p>
               <a href="edit_profile.php"> <button class="edit-profile">Edit Profile</button> </a>
               <a href="dash.php"> <button class="edit-profile">Go Back</button> </a>
            </div>
        </div>
    </div>
</body>
</html>
