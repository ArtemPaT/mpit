<?php 
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'eco_hack');
	mysqli_query($con, "INSERT INTO accounts(name, login, password) VALUES ('{$_POST['name']}', '{$_POST['login']}', '{$_POST['password']}')"); //почему
	header('Location: index.php');
 ?>