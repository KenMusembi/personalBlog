<?php 
//Connects to your Database 
$mysqli = new mysqli("localhost", "root", "", "db");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//used the scho below to know if connection was succesful
//echo $mysqli->host_info . "\n";

//include config
require_once('../includes/config.php');

//check if already logged in
if( $user->is_logged_in() ){ header('Location: index.php'); } 
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Register</title>

  <link rel="stylesheet" href="../style/main.css">
  
  
  <style>
  body {
	   background-image: url("cover.jpg");
  }
  </style>
</head>
<body>

<div class="tester1">

<p>This is the register page. Please enter your full details below.</p>
<?php
//This code runs if the form has been submitted
if (isset($_POST['submit'])) { 

//This makes sure they did not leave any fields blank
if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] ) {
	die('You did not complete all of the required fields. <a href="register.php">Go Back</a> ');
}
// checks if the username is in use
if (!get_magic_quotes_gpc()) {
	$_POST['username'] = addslashes($_POST['username']);
}
$usercheck = $_POST['username'];
$check = mysqli_query($mysqli,"SELECT username FROM blog_members WHERE username = '$usercheck'") 
or die(mysqli_error($mysqli,$check));
$check2 = mysqli_num_rows($check);
//if the name exists it gives an error
if ($check2 != 0) {
 	die('Sorry, the username '.$_POST['username'].' is already in use. <a href="register.php">Go Back</a> ');
}

// this makes sure both passwords entered match
if ($_POST['pass'] != $_POST['pass2'] ) {
	die('Your passwords did not match. <a href="register.php">Go Back</a>');
}

//hash the password entered
$_POST['pass'] = password_hash($_POST['pass'], PASSWORD_DEFAULT);

// now we insert it into the database
$insert = "INSERT INTO blog_members (username, password, email, role) VALUES ('".$_POST['username']."', '".$_POST['pass']."','".$_POST['email']."','".$_POST['role']."')";
$add_member = mysqli_query($mysqli,$insert);
?>

 <h1>Registered</h1>

 <p>Thank you, you have registered - you may now <a href="login.php">login</a>. for the first time. </p>

 

 
 <?php 
 }
 else 
 {	
 ?>
 
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">


<p> <label>Username:</label> <br>
<input type="text" name="username" > </p>


<p> <label>Password:</label> <br>
<input type="password" name="pass" > </p>


<p> <label>Confirm Password:</label>  <br>
<input type="password" name="pass2" > </p>

<p> <label>Email:</label> <br>
<input type="email" name="email" > </p>

<p> <label>Role:</label> <br>

 <select name="role">
 <option value=""></option>
  <option value="admin">Admin</option>
  <option value="editor">Editor</option>
  <option value="blogger">Blogger</option>
  <option value="sub">Subscriber</option>
</select>

</p>

 <p><input type="submit" name="submit" value="Register" ></p> 

 </form>

 <?php
 }
 ?> 
 
 </div>
 
 <p style="text-align: center" ><a href="../" target="_blank">Home</a> | <a href = "/blog/about.html">About </a> | <a href = "/blog/admin/login.php">Login</a> | <a href = "/blog/admin/register.php">Register</a> | <a href = "/blog/admin/index.php"> Dashboard</a></p>
 	<p style="text-align: center">Copyright &copy; IT Blog 2018 </p>
</body>
</html>