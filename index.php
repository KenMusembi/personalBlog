<?php require('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>IT Blog</title>
    <link rel="stylesheet" href="style/main.css">

</head>
<body>

<!-- menu-->

<div class="hero-image">
  <div class="hero-text">
  <a href="#">Home</a>
  <a href="/blog/admin/index.php">Dashboard</a>
  <a href="about.html">About</a>
  <a href="admin/login.php">Login</a>
  <a href="admin/register.php">Register</a>
  </div> 



  
  <div class="content">
    <h1>IT Blog</h1>
	</div>
	<div class="content2">
    <p>Welcome to the all new IT Blog, where you will be getting new content relating to IT every week. Stay Tuned. </p>
</div>
</div>
<br><br>
<div id="wrapper">
		<?php
			try {

				$stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
				while($row = $stmt->fetch()){
					
					echo '<div>';
						echo '<h1 class="postheading"><a href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h1>';
						echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
						echo '<p>'.$row['postDesc'].'</p>';				
						echo '<p><a href="viewpost.php?id='.$row['postID'].'">Read More</a></p>';	
							echo '<br>';
							echo '<hr>';
							echo '<br>';
					echo '</div>';

				}

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}
		?>

	</div>


<p style="text-align: center" ><a href="../" target="_blank">Home</a> | <a href = "/blog/about.html">About </a> | <a href = "admin/login.php">Login</a> | <a href = "admin/register.php">Register</a> | <a href = "/blog/admin/index.php"> Dashboard</a></p>
				<p style="text-align: center">Copyright &copy; IT Blog 2018 </p>
</body>
</html>