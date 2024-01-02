<?php
	session_start();
    include('db_connect.php');
?>

   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styles.css"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Login Page</title>
</head>
<body>

<?php
if(isset($_POST['login']))
{
	$er = array();
	if(empty($_POST['email'])){
		$er['email'] = "E-mail Address is missing";
	} else{
		$email = mysqli_real_escape_string($db,$_POST['email']);
	}

if(empty($_POST['pass'])){
		$er['pass'] = "Password is missing";
	} else{
		$pword= mysqli_real_escape_string($db,$_POST['pass']);
	}
if(empty($er)){
	//BELOW WE PERFORM A SELECT
	$query = mysqli_query($db,"SELECT * FROM signup
								WHERE email = '".$email."'
								AND password = '".$pword."'") or die(mysqli_error($db));
	//echo mysqli_num_rows($query);
	if(mysqli_num_rows($query) ==1 ){
	$r= mysqli_fetch_array($query);

	//BELOW WE ESTABLISH SESSION VARIABLES FOR THE USERS LOGGING IN


	$_SESSION['category_id'] = $r[0];
	$_SESSION['upload'] = $r[1];
	$_SESSION['fname'] = $r[2];
	$_SESSION['email'] = $r[3];
	$_SESSION['password'] = $r[4];

	//BELOW WE NOW LOG THE USER

	echo "<script>alert('Successfully Logged In');</script>";
	header("location:dash.php");
	exit;
	
	} else{
	
		$msg = "Invalid User Name or Password";
		header("location:login.php?msg=$msg");
	}
}

}

if (isset($_GET['msg'])) {
	echo "<script>alert('Invalid User Name or Password');</script>";
}
?>

    <form action="" method="post">
        <div class="login-container">
		<a href="homepage.php">   <img class="background-image" src="assets/rximage.png" /> </a>
            <label class="title">Sign In</label>
            <label class="email-label" for="email">E-mail</label><br>
            <input class="input-box" type="text" id="username" name="email" placeholder="Input your email" required><br>
            <label class="password-label" for="password">Password</label><br>
            <input class="input-box" type="password" id="password" name="pass" placeholder="Input your password" required><br><br>
            <input type="submit" value="Login" name="login">
            <div class="forgot-password">Forgot Password?</div>
            <span class="signup-text">Don’t have an account?  <a href="signup.php" class="signup-link">Sign Up</a></span>
           

            </div>

    </form>
  
    </div>
</body>
</html>
