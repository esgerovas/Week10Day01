<?php
	session_start();
	include 'db.php';
	$id = $_GET['id'];
	$query1 = $db->select1("menu",'*',$id);
	$row1 = mysqli_fetch_assoc($query1);
	$_SESSION['id'] = $id;

?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
	</head>
	<body>
		<section class="container menu">
		<h3>Update Menu</h3>
			<form action='update.php' method="POST" enctype="multipart/form-data">
				<div class="form-group">
				<textarea class="form-control" rows="3" name="name"><?=$row1['name'];?></textarea> </div>
				<div class="form-group">
				<div class="form-group">
					<div class="pull-right">
						<button type="submit" name="submit" class="btn btn-default">Update</button>
					</div>
				</div>
			</form>
		</section>
	</body>
</html>
