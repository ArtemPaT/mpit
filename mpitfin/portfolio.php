<?php session_start() ?>
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
		.pill {
			border-radius: 20px;
		}
		.br-15 {
			border-radius: 15px;
		}
		.mt-10 {
			margin-top: 100px;
		}
		.overall {
			z-index: 100;
		}
		.pointer {
			cursor: pointer;
		}
	</style>
</head>
<body style="font-family: Cera">
	<?php 
		$con = mysqli_connect('127.0.0.1', 'root', '', 'eco_hack');
		//$query = mysqli_query($con, "SELECT * FROM works WHERE name = '{$_SESSION["login"]}'");
	 ?>
	<nav class="navbar p-3 pl-4 bg-black text-white d-flex pt-4 ">
		<a href="index.php" style="text-decoration: none; color: white;"><h3><span class="strange-color">In</span>SPIRIT</h3></a>
		<div class="col-11">
			<div class="d-flex">
				<div class="d-flex">
					<a href="zen.php" class="ml-5 mt-2"><h6 class="text-white ml-4">ЛЕНТА</h6></a>
					<a href="friends.php" class="ml-5 mt-2"><h6 class="text-white ml-4">ДРУЗЬЯ</h6></a>
				</div>
				<div class="col-4">
					<input class="form-control ml-5 pill mb-1" placeholder="Найти">
				</div>
				
				<a href="portfolio.php" class="mt-2 strange-color" style="margin-left: 100px; position: absolute; right: 100px;"><h6 class="strange-color"><?php if($_SESSION["login"] == null) 
					{
						echo "ПОРТФОЛИО";
					}
					else {
						echo $_SESSION["login"];

					} ?></h6></a>
					<?php 
						if ($_SESSION["check"] == true) {
							echo "<a href='signout.php' style='position: absolute; right: 20px; top: 5px'><span class='text-white'>Выход</span></a>";

						}
					 ?>
					
			</div>
		</div>


	</nav>
	
	<div class="col-12 p-0" style="background-image: url(image2.png); background-size: 100%; position: absolute; height: 300px;">

	</div>
	<div class="col-12 p-0 bg-black" style="height: 300px; opacity: 0.8; position: absolute;">
		
	</div>
	<div class="col-12 pl-0 pr-0 mb-5 text-white" style="height: 300px; padding-top: 100px;">
		<a href="" style="text-decoration: underline; text-decoration-color: white;"><h2 class="text-white text-center ">Загрузите фон</h2></a>
		
	</div>
	<div class="br-15 shadow overall bg-white pt-5 text-center" style="width: 300px; position: absolute; top: 300px; left: 50px; height: 550px; overflow: hidden;">
		<div class="rounded mb-2 mx-auto" style="width: 140px; height: 140px">
			<a href=""><img src="Ellipse 6.png" style="width: 100%; height: 100%"></a>
		</div>
		
		<h3 class="mt-3 "><?php echo "{$_SESSION['login']}"; ?></h3>
		<p>oagajnfanf</p>
		<h6>Обо мне:</h6>
		<h5>Дизайнер, иллюстратор Якутск, Россия</h5>
		<div class="col-12 border mt-4 p-2 ">
			<img src="">
			<h5>Добавить проект</h5>
			<form action="add.php" method="POST" enctype="multipart/form-data">
			  <input type="file" name="file">
			  <input style="display: none;" type="" name="name" value="<?php echo "{$_SESSION['login']}" ?>">
			  <select name="type">
			  	<option>Дизайн</option>
			  	<option>Иллюстрации</option>
			  	<option>Проекты</option>
			  	<option>Мудборды</option>
			  </select>
			  <button class="btn">Загрузить</button>
			</form>
		</div>
		
	</div>
	<div class="col-12">
		<div class="row">
			<div class="col-4">
			
			</div>
			<div class="col-8">
				<div class="row">
					<h4 class="works pointer" style="color: #8459FF;">Работы</h4>
					<h4 class="projs ml-5 pointer">Проекты</h4>
					<h4 class="mood ml-5 pointer">Мудборды</h4>
				</div>
				<div class="row works_block">
					<div class="col-6 p-4 mt-3">
						<img src="image10.png" class="w-100 br-15 h-100">
					</div>
					<div class="col-6 p-4 mt-3">
						<img src="image10.png" class="w-100 br-15 h-100">
					</div>
					<div class="col-6 p-4 mt-3">
						<img src="image10.png" class="w-100 br-15 h-100">
					</div>
					<?php 
						$query2 = mysqli_query($con, "SELECT * FROM works WHERE name = '{$_SESSION['login']}'");
						$table_count = mysqli_num_rows($query2);
						for ($i=0; $i < $table_count; $i++) { 
							$res2 = $query2->fetch_assoc();					
						
					 ?>
					<div class="col-6 p-4 mt-3">
						<img src="<?php echo "{$res2['img']}" ?>" class="w-100 br-15">
					</div>
					<?php } ?>
				</div>
				
			</div>
		</div>
		
	</div>
	

<script type="text/javascript">
	let works = document.querySelector('.works');
	let projs = document.querySelector('.projs');
	let mood = document.querySelector('.mood');
	let works_block = document.querySelector('.works_block');
	//let projs_block = document.querySelector('.mood');
	//let mood_block = document.querySelector('.mood');
	projs.onclick = function() {
		works_block.style.display = "none";
		works.style.color = "black";
		mood.style.color = "black";
		projs.style.color = "#8459FF";
	}
	works.onclick = function() {
		works_block.style.display = "flex";
		works.style.color = "#8459FF";
		mood.style.color = "black";
		projs.style.color = "black";
	}
	mood.onclick = function() {
		//works_block.style.display = "none";
		works.style.color = "black";
		mood.style.color = "#8459FF";
		projs.style.color = "black";
	}
	
	

</script>

</body>
</html>