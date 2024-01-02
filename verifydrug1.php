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
    <title>Verify Drug</title>
    <link rel="stylesheet" href="styles/verify2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>

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
            <h1>Verify Drugs</h1>
            <div class="dashboard-overview">
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
        </section>
    </div>

    </section>


</div>

  
</body>
</html>
