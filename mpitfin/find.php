<?php 
	session_start();
	$_SESSION["poisk"] = $_POST["poisk"];
	header("Location: zen.php");
 ?>