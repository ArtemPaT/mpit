<?php 
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'eco_hack');
	$query = mysqli_query($con, "SELECT * FROM accounts WHERE login = '{$_POST['login']}' AND password = '{$_POST['password']}'"); 
	$table_count = mysqli_num_rows($query);
	if ($table_count == 0) {
		header("Location: login.php?error=wrong pass or username");
	}
	else {
		$result = $query->fetch_assoc(); 
		$_SESSION["login"] = $result['login'];
		header("Location: portfolio.php");
	}
 ?>