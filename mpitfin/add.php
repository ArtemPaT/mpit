<?php
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'eco_hack');
	$uploadfile = basename($_FILES['file']['name']);
	move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
	mysqli_query($con, "INSERT INTO works(name, type, img) VALUES ('{$_POST["name"]}','{$_POST["type"]}','{$uploadfile}')");
	header("Location: portfolio.php");
 ?>