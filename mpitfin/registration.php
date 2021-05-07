<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="col-6 bg-light border mx-auto text-center mt-5">
		<h3>Зарегистрируйте аккаунт</h3>
		<div class="col-6 mx-auto"><br>
			<form action="reg.php" method="POST">
				<input class="form-control" type="" name="login" placeholder="login"><br>
				<input class="form-control" type="" name="password" placeholder="password">
				<button class="mt-1 btn btn-info">Зарегистрироваться</button>
			</form>
			<p class="mt-1">Уже есть аккаунт? <a href="login.php">Войдите</a></p>
		</div>
	</div>
</body>
</html>