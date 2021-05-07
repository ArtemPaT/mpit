<?php 
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'eco_hack');
	$query = mysqli_query($con, "SELECT * FROM accounts WHERE email = '{$_POST['email']}' AND password = '{$_POST['password']}'");
	$table_count = mysqli_num_rows($query);
	$result = $query->fetch_assoc();
	if ($table_count != null) {
		header("Location: main.php");
		$_SESSION['user_id'] = $result['id'];
	}
	else {
		header("Location: auth.php");
	}
	
 ?>