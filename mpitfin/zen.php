<?php session_start(); ?>
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
		.ml-10 {
			margin-left: 100px;
		}
		.pill {
			border-radius: 20px;
		}
		.br-15 {
			border-radius: 15px;
		}
		.pr-shadow {
			box-shadow: 0px -7px 41px rgba(0, 0, 0, 0.25);
		}
		.icon {
			width: 50px;
			height: 50px;
		}
		.underline {
			text-decoration: underline;
			font-weight: bold;
		}
		.bcol {
			color: #8459FF;
		}

	</style>
</head>
<body style="font-family: Cera;" class="bg-light">
	<nav class="navbar p-3 pl-4 bg-black text-white d-flex pt-4 ">
		<a href="index.php" style="text-decoration: none;"><h3 class="text-white"><span class="strange-color">In</span>SPIRIT</h3></a>
		<div class="col-11">
			<div class="d-flex">
				<div class="d-flex">
					<a href="" class="ml-5 mt-2"><h6 class="ml-4 bcol">ЛЕНТА</h6></a>
					<a href="friends.php" class="ml-5 mt-2"><h6 class="text-white ml-4">ДРУЗЬЯ</h6></a>
				</div>
				<div class="col-4 ml-5 mt-1">
					<form action="find.php" method="POST">
						<button class="bg-black"><img src="poisk.png"></button>
						<select class="bg-black text-white ml-3" name="poisk" style="border: 0;">
							<option>Иллюстрации</option>
							<option>Проекты</option>
							<option>Мудборды</option>
							<option>Дизайн</option>
						</select>
					
					</form>
					
				</div>
				
				<a href="portfolio.php" class="mt-2 strange-color" style="margin-left: 100px; position: absolute; right: 10px;"><h6 class="strange-color">ПОРТФОЛИО</h6></a>
			</div>
		</div>


	</nav>
	<div class="col-10 mx-auto">
		<div class="row">
			<div class="col-3 pr-shadow br-15 mt-5 p-3" style="height: 500px;">
				<div class="ml-3">
					<h3 class="bcol">ДЛЯ ВАС</h3>
					<h5 class="underline mt-3">Новые проекты</h5>
					<h5 class="underline mt-3">Мудборды</h5>

					<h5 class="underline mt-3">Дизайн</h5>
					<div class="ml-2">
							<h5>Графический</h5>
							<h5>Интерьер</h5>
							<h5>Геймдев</h5>
							<h5>WEB</h5>
						</div>
					<h5 class="underline mt-3">Иллюстрация</h5>
					<div class="ml-2">
							<h5>Вектор</h5>
							<h5>2D</h5>
							<h5>3D</h5>
						</div>
				</div>
				
			</div>
			<div class="col-8">
				<?php 
					$con = mysqli_connect('127.0.0.1', 'root', '', 'eco_hack');
					$query2 = mysqli_query($con, "SELECT * FROM works WHERE type = '{$_SESSION['poisk']}'");
					$table_count = mysqli_num_rows($query2);
					for ($i=0; $i < $table_count; $i++) { 
						$res2 = $query2->fetch_assoc();					
							
				?>	
				<div class="col-12 pr-shadow br-15 ml-10 pl-0 pr-0 mt-5 pt-2 pb-3">
					<div class="row mt-4 ml-3 mb-3">
						<div class="icon mr-1">
							<img src="jo.png" class="w-100">
						</div>
						
						<h5><?php echo "{$res2["name"]}"; ?><br><span style="font-size: 14px;">photographer</span></h5>

					</div>
					<img src="<?php echo "{$res2["img"]}" ?>" class="w-100">
					<h5 class="ml-3 mt-2">#<?php echo "{$res2["type"]}"; ?></h5>
					<h4></h4>
				</div>
				<?php } ?>
			</div>
			
		</div>
	</div>
	
	

	
	

</body>
</html>