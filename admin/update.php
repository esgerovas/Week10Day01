<?php

			session_start();
			$id = $_SESSION['id'];
			include 'db.php';
			$name = $_POST["name"];
			if(isset($_POST['submit'])){
				$db->update('menu',$name,$id);
				header('Location: Menu.php');

			}
?>
