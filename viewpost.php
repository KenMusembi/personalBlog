<?php require('includes/config.php'); 

$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate, postDesc FROM blog_posts WHERE postID = :postID');
$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
	header('Location: ./');
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>IT Blog <?php echo $row['postTitle'];?></title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">
</head>
<body >

<div class="hero-image">
  <div class="hero-text">
  <a href="index.php">Home</a>
  <a href="/blog/admin/index.php">Dashboard</a>
  <a href="about.html">About</a>
  <a href="admin/login.php">Login</a>
  <a href="admin/register.php">Register</a>
  </div>

  
 <div class="content"> 
  <?php 
 
    echo '<h1>'.$row['postTitle'].'</h1>';
	?> </div> <div class="content2">
	<?php
	
	
	echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
	
	echo '<p>'.$row['postDesc'].'</p>';
   ?> </div>
</div>
<br><br>

	<div id="wrapper">

		<?php	
			
				//echo '<h1>'.$row['postTitle'].'</h1>';
				//echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
				echo '<p>'.$row['postCont'].'</p>';				
			
		?>

	</div>
<br><br>

<p style="text-align: center" ><a href="../" target="_blank">Home</a> | <a href = "/blog/about.html">About </a> | <a href = "admin/login.php">Login</a> | <a href = "admin/register.php">Register</a> | <a href = "/blog/admin/index.php"> Dashboard</a></p>
				<p style="text-align: center">Copyright &copy; IT Blog 2018 </p>

</body>
</html>