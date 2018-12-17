<?php
//include config
require_once('../includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }

//show message from add / edit page
if(isset($_GET['deluser'])){ 

	//if user id is 1 ignore
	if($_GET['deluser'] !='1'){

		$stmt = $db->prepare('DELETE FROM blog_members WHERE memberID = :memberID') ;
		$stmt->execute(array(':memberID' => $_GET['deluser']));

		header('Location: users.php?action=deleted');
		exit;

	}
} 

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin - Users</title>
  <link rel="stylesheet" href="../style/main.css">
  <script language="JavaScript" type="text/javascript">
  function deluser(id, title)
  {
	  if (confirm("Are you sure you want to delete '" + title + "'"))
	  {
	  	window.location.href = 'users.php?deluser=' + id;
	  }
  }
  </script>
  
  <style>
  body {
	   background-image: url("cover.jpg");
  }
  </style>
</head>
<body>

	<div id="wrapper">

	<?php include('menu.php');?>

	<?php 
	//show message from add / edit page
	if(isset($_GET['action'])){ 
		echo '<h3>User '.$_GET['action'].'.</h3>'; 
	} 
	?>

	<table id="users">
	<tr>
		<th>Username</th>
		<th>Email</th>
		<th>Role</th>
		<th>Action</th>
	</tr>
	<?php
		try {

			$stmt = $db->query('SELECT memberID, username, email, role FROM blog_members ORDER BY username');
			while($row = $stmt->fetch()){
				
				echo '<tr>';
				echo '<td>'.$row['username'].'</td>';
				echo '<td>'.$row['email'].'</td>';
				echo '<td>'.$row['role'].'</td>';
				?>

				<td>
					<a href="edit-user.php?id=<?php echo $row['memberID'];?>">Edit</a> 
					<?php if($row['memberID'] != 1){?>
						| <a href="javascript:deluser('<?php echo $row['memberID'];?>','<?php echo $row['username'];?>')">Delete</a>
					<?php } ?>
				</td>
				
				<?php 
				echo '</tr>';

			}

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}
	?>
	</table>

	<p> <a class="tester2" href='add-user.php'>Add User</a></p>

</div>
<br><br><br>

<p style="text-align: center" ><a href="../" target="_blank">Home</a> | <a href = "/blog/about.html">About </a> | <a href = "/blog/admin/index.php"> Dashboard</a></p>
				<p style="text-align: center">Copyright &copy; IT Blog 2018 </p>

</body>
</html>
