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
if(isset($_POST['verify2']))
{
    $er = array();
	if (empty($_POST['pharmacyName'])) {
        $er['pharmacyName'] = "Pharmacy Name is missing";
    } else {
        $pharmacyName = mysqli_real_escape_string($db, $_POST['pharmacyName']);
    }

    if (empty($_POST['loc'])) {
        $er['loc'] = "Location is missing";
    } else {
        $loc = mysqli_real_escape_string($db, $_POST['loc']);
    }
    if (empty($er)) {
        // Perform a SELECT query
        $query = mysqli_query($db, "SELECT * FROM pharmacy WHERE pharmacyName = '{$pharmacyName}' AND location = '{$loc}'") or die(mysqli_error($db));

        if (mysqli_num_rows($query) == 1) {
            // Pharmacy exists
            $msg = "This Pharmacy is registered in the database!";
            echo "<script>alert('$msg');</script>";
        } else {
            // Pharmacy does not exist
            $msg = "Pharmacy not registered in the database.";
            echo "<script>alert('$msg');</script>";
        }
    } else {
        // Display form errors
        foreach ($er as $error) {
            echo "<script>alert('$error');</script>";
        }
    }
}

// if (isset($_GET['msg'])) {
//     echo "<h5 style=\"color:red;\">".$_GET['msg']."</h5>";
// }
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
            <h1>Check Pharmacy</h1>
            <div class="dashboard-overview">
            <form action="" method="post" id="form"> 
        <div class="form">
        <div class="textbox">
        <div class="form-group">
          <label for="pharmacyName">Pharmacy Name</label>
          <input type="text" id="pharmacyName" name="pharmacyName">
        </div>
      
        <div class="form-group">
          <label for="location">Location</label>
          <input type="text" id="location" name="loc">
        </div>
        <input type="submit" value="Verify" name="verify2" class="btn">
        <!-- <button class="btn">Verify</button> -->
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
