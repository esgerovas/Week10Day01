<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
	</head>
	<body>
		<section class="container menu">
			<?php
			include 'db.php';
			session_start();
			if(isset($_SESSION['admin'])){
			$query1 = $db -> select("menu");?>
			<h1>Menu düzənlənməsi</h1>
			<h3>Əsas menu</h3>
			<table class="table table-striped table-bordered">
				<tr>
					<th>ID</th>
					<th>MenuName</th>
					<th>Action</th>
				</tr>

				<?php while($row = mysqli_fetch_assoc($query1)){ ?>
				<tr>
					<td><?=$row['id']; ?></td>
					<td><?=$row['name']; ?></td>
					<td class="text-right">
						<a class="btn btn-success" href="updateMenu.php?id=<?=$row['id'];?>">Update</a>
						<a class="btn btn-danger" href="delete.php?id=<?=$row['id'];?>">Delete</a>
					</td>
				</tr>
				<?php } ?>

			</table>

			<form action="addMenu.php" method="POST">
				<button type="submit" class="btn btn-primary pull-right" name="submit">Add Menu</button>
			</form>
			<form action="" method="POST">
				<button type="submit" class="btn btn-default pull-left" name="outsubmit">Logout</button>
			</form>
			<?php
			if(isset($_POST['outsubmit'])){
				unset($_SESSION['admin']);
				header("Location:../index.php");
			}
			}else{
			}


			?>
		</section>
	</body>
</html>
