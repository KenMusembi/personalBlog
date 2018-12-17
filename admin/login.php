<?php
//include config
require_once('../includes/config.php');


//check if already logged in
if( $user->is_logged_in() ){ header('Location: index.php'); } 
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin Login</title>

  <link rel="stylesheet" href="../style/main.css">
  
  <style>
  body {
	   background-image: url("cover.jpg");
  }
  </style>
</head>
<body >

<div class="tester1">
<p>This is the Login Page. Please enter your details below.</p>
	<?php

	//process login form if submitted
	if(isset($_POST['submit'])){

		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		
		if($user->login($username,$password)){ 

			//logged in return to index page
			header('Location: index.php');
			exit;
		

		} else {
			$message = '<p class="error">Wrong username or password</p>';
		}

	}//end if submit

	if(isset($message)){ echo $message; }
	?>

	<form action="" method="post">
	<p><label>Username:  </label> <br>
	<input type="text" name="username" value="" placeholder="enter username"  /></p>
	<p><label>Password: </label> <br>
	<input type="password" name="password" value=""  /></p>
	<p><label></label><input type="submit" name="submit" value="Login"  /></p>
	</form>
<a class="tester2" href="register.php"> Or Register Here</a>
</div>

<br><br>
 <p style="text-align: center" ><a href="../" target="_blank">Home</a> | <a href = "/blog/about.html">About </a> | <a href = "/blog/admin/login.php">Login</a> | <a href = "/blog/admin/register.php">Register</a> | <a href = "/blog/admin/index.php"> Dashboard</a></p>
 	<p style="text-align: center">Copyright &copy; IT Blog 2018 </p>
</body>
</html>
