<?php
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'eco_hack');
	mysqli_query($con, "INSERT INTO accounts(login, password) VALUES ('{$_POST['login']}','{$_POST['password']}')");
	$query = mysqli_query($con, "SELECT * FROM accounts WHERE login = '{$_POST['login']}' AND password = '{$_POST['password']}'");
	$result = $query->fetch_assoc();
	$_SESSION["login"] = $result['login'];
	header("Location: portfolio.php");
 ?>