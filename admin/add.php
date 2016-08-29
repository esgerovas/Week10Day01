<?php
			include 'db.php';
			$name = $_POST["name"];
			if(isset($_POST['submit'])){
				$db->insert("menu", "name", $name);
				header('Location: Menu.php');
			}
?>
