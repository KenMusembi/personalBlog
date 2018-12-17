<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>User Menu</title>

  <link rel="stylesheet" href="../style/main.css">
  
</head>
<body>

<?php 
//include config
require_once('../includes/config.php'); 
require_once('../classes/class.user.php');
//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }

$new_user = $_SESSION['username'];
?>
<div style="color: white">
<h1 > <?php
echo $new_user."'s Dashboard";

?></h1 style="color: white"><?php
echo "Hello ". $new_user . ", See your dashboard options according to your role.";
echo "<br>";
try {

			$stmt = $db->query("SELECT memberID, username, email, role FROM blog_members WHERE username = '$new_user' LIMIT 2");
			//$stmt->execute(array('username' => $username));
			
			while($row = $stmt->fetch()){
				


						
if ($row['role'] == "admin" ){ ;?></div>
<br>

<ul >
	<li><a class="active" href='index.php'>Post Report</a></li>
	<li><a href='users.php'>Users</a></li>
	<li><a href="../" target="_blank">View Website</a></li>
	<li><a href="access.php">Access Control</a></li>
	<li><a href='logout.php'>Logout</a></li>
</ul>
<div class='clear'></div>
<hr /> <?php
   }   else if($row['role'] == "editor"){  ?> 


<ul >
	<li><a class="active" href='index.php'>Stories</a></li>
	<li><a href="../" target="_blank">View Website</a></li>
	<li><a href='category.php'>Category</a></li>
	<li><a href='subcategory.php'>Sub Categories</a></li>
	<li><a href='topics.php'>Topics</a></li>
	<li><a href='bloggers.php'>Bloggers</a></li>
	<li><a href='pricing.php'>Pricing</a></li>
	<li><a href='logout.php'>Logout</a></li>
</ul>
<div class='clear'></div>
<hr />
<?php }  else if($row['role'] == "blogger") {?>


<ul >
	<li><a href='index.php'>Blog</a></li>
	<li><a href="../" target="_blank">Posts</a></li>
	<li><a href='logout.php'>Logout</a></li>
</ul>
<div class='clear'></div>
<hr />

<?php }	 else if($row['role'] == "sub"){ header('Location: /blog/index.php'); 
	
	
}
else {
	
	echo "<br>"."error finding your role";
}		
				
				
			}
				
				
				
	  

			//}

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}

?>

</body>
