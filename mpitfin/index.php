<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title></title>
	<style type="text/css">
		@font-face {
		    font-family: Cera;
		    src: url(CeraPro-Medium.ttf);
		}
		.strange-color {
			color: #00D8A2;
		}
		.bg-black {
			background-color: #000000;
		}
		.btext {
			width: 815px;
			height: 216px;
			font-family: Cera;
			font-style: normal;
			font-weight: bold;
			font-size: 100px;
			line-height: 91.2%;
			/* or 137px */

		}
		.ml-73 {
			margin-top: 111px;
			margin-left: 73px;
		}
		.bg-lol {
			background: linear-gradient(180deg, #00D8A2 -60%, rgba(0, 216, 162, 0) 132.5%), linear-gradient(0deg, #8459FF, #8459FF);
			border: 0;
		}
		.br-15 {
			border-radius: 15px;
		}
	</style>
</head>
<body style="font-family: Cera">
	<nav class="navbar fixed p-3 pl-4 bg-black text-white d-flex">
		<h3><span class="strange-color">In</span>SPIRIT</h3>
		<div class="col-3 d-flex">

			<a href="registration.php" ><h5 class="text-white">ЗАРЕГИСТРИРОВАТЬСЯ</h5></a>
			<a href="login.php"><h5 class="strange-color ml-4">ВОЙТИ</h5></a>
		</div>
	</nav>

	
	<div class="col-12 p-0" style="background-image: url(image1.png); background-size: 100%; position: absolute; height: 700px;">

	</div>
	<div class="col-12 p-0 bg-black" style="height: 700px; opacity: 0.8; position: absolute;">
		
	</div>
	<div class="col-12 p-0 text-white" style="height: 700px;">
		<div class="ml-73 col-6">
			<p class="btext">ОТКРОЙТЕ НОВЫЕ ИДЕИ</p>
			<h5 class="">Найдите, создайте, объединитесь</h5><br>
			<div class="col-8 p-0">
				<form action="registration.php">
					<button class="bg-lol p-2 pl-5 pr-5 rounded br-15 text-white"><h1>ПРИСОЕДИНИТЬСЯ</h1></button>
				</form>
				<a href="" class="text-white text-center"><h5>А можно поподробнее?</h5></a>
			</div>
			
		</div>
		
	</div>

</body>
</html>