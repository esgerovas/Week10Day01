<?php
	session_start();
	//$_SESSION['admin'] = false;
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(!empty($username) && !empty($password)){
			if($username == 'admin' && $password == 'admin'){
				$_SESSION['admin'] = true;
				header('Location: Menu.php');
			}elseif($username != 'admin' && $password == 'admin'){
				error('İstifadəçi adı səhvdir');

			}elseif($username == 'admin' && $password != 'admin'){
				error('Şifrəniz səhvdir');
			}else{
				error('Belə bir istifadəçi mövcud deyil');
			}

		}else{
			error('Xanaları doldurun');
		}
	}else{
		error('Düzgün daxil olmamısınız');
	}
	function error($x){
		$_SESSION['error'] = $x;
		header('Location: index.php');
	}


?>
