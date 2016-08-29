<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
	</head>
	<body>
		<section class="container menu">
			<?php if(isset($_POST['submit'])){?>

			<h3>Add Menu</h3>
			<form action='add.php' method="POST" enctype="multipart/form-data">
				<div class="form-group">
				<input class="form-control" name="name"  placeholder="Add Menu Name..">
			 </div>
				<div class="form-group">
					<div class="pull-right">
						<button type="submit" name="submit" class="btn btn-default">Daxil ol</button>
					</div>
				</div>
			</form>
			<?php }

			else{
			header('Location:index.php');
			}
			?>
		</section>
	</body>
</html>
