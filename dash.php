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
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles/dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>

<div class="dashboard-container">
        <nav class="sidebar">
            <div class="user-info">
                <img src="images/<?php echo $filename?>" alt="User Avatar" class="avatar"><br>
                <span class="username"><?php echo $fname?></span>
            </div>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="verifydrug1.php">Verify Drug</a></li>
                <li><a href="verifyregister.php">Register Pharmacy</a></li>
                <li><a href="verifypharmacy.php">Check Pharmacy</a></li>
                <li><a href="userprofile.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <section class="main-content">
            <h1>Welcome to SafeMeds</h1>
            <div class="dashboard-overview">
                <p>Welcome to your SafeMeds dashboard. Here you can verify drugs, register your pharmacy, and check if a pharmacy is registered. Explore the functionalities to manage your health and pharmacy needs effectively.</p>
            </div>
        </section>
    </div>

    </section>


</div>
  
</body>
</html>
