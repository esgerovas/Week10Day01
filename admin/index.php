<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
	</head>
	<body>

		<section id="panel">
			<div class="col-md-4 col-md-offset-4 col-xs-12 col-sm-8 col-sm-offset-2">
			<h2>Admin Panel</h2>
				<form action="check.php" method="POST">
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="username" class="form-control" placeholder="Email">
						
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control"  placeholder="Password">
						
					</div>
					<div class="form-group">
						<div class="pull-right">
							<button type="submit" name="submit" class="btn btn-default">Daxil ol</button>
						</div>
					</div>
				</form>
				<?php 
				session_start();
				if(isset($_SESSION['error'])){ ?>
				<div class="btn btn-danger error">
					<p><?=$_SESSION['error'];?></p>
				</div>

				<?php }

				unset($_SESSION['error']); ?>
			</div>
			
		</section>
	</body>
</html>