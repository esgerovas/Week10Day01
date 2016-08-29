<?php
include "db.php";
$id=$_GET['id'];
$db->delete("menu",$id);
header("Location:Menu.php");
?>
