<?php
require "connect.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Главная</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<style type="text/css">
		html {
            scroll-behavior: smooth;
        }
		body {
			font-family: 'Montserrat', Arial, sans-serif;
			background: #fff;
			color: #000;
			font-size: 20px;
			
		}
		nav {
			background-color: transparent;	
		}
		nav a {
			color: #000 !important;
		}
		.sky {
			background-color: #BAE8FC;
			padding-top: 70px;
			color: #000;
			
		}
		.bttn {
			background-color: #24496B;
			padding: 10px 50px 10px 50px;
			color: #fff;
			border: 0px;
			border-radius: 10px;
			font-family: Montserrat;
		}
		.bttn:hover {
			background-color: #24496B;
		}
		.marg {
			margin-top: 100px;
			color: #fff;
		}
		.mt-5 {
			margin-top: 100px;
		}
		.blue {
			border-radius: 57px;
			padding: 90px 80px 90px 80px;
			background: linear-gradient(180deg, #2A5073 0%, #032341 110.74%);
		}
		.pd-0 {
			padding: 0;
			margin:0;
		}
		footer {
			background: linear-gradient(180deg, #2A5073 0%, #032341 110.74%);
		}
		.btn {
			box-shadow: none;
			border-radius: 42px;
		}
	</style>
</head>
<body id="body">
	<?php require "header.php"; ?>
		<div class="sky">
			<div class="container">
				<div class="row">
					<div class="col s7">
						<img src="img/medmed.png"></a>
					</div>
					<div class="col s5">
						<h1><b>Для кого сайт</b></h1> 
						<p>Сайт разработан для врачей, которые работают с детьми и детей которые молчат о своих проблемах</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<h1>Цель сайта </h1>
			<p>Социальный опрос показал, что каждый 3 ребенок молчит о своих проблемах и болях.
Проект HSupp помогает детям получить анонимный совет от врача и учит его не бояться себя и своего тела. Наш сайт помогает детям осознать важность мед.процедур.	</p>
<div class="row">
	<button class="btn">Перейти</button>
</div>
		</div>


</body>
</html>
