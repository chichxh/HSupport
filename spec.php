<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Для специалистов</title>
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
			background: #292650;
			color: #fff;
			font-size: 20px;
			
		}
		nav {
			background-color: transparent;	
		}
		.sky {
			background-color: #fff;
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
		.modal-content {
			color: #000;
		}
		.nope {
			background: linear-gradient(180deg, #2F2B5A 38.54%, #5C5C98 54.17%, #A0A4FF 98.44%);
			width: 100%;
			transition: 1s;
		}
		.btn {
			box-shadow: none;
			border-radius: 42px;
		}
		.sm {
			font-size: 18px;
		}
		.red {
			padding: 50px 20px !important;
			border-radius: 21px;
			background-color: #C74480 !important;
		}
		.red .btn {
			background-color: #55F2B8;
			border-radius: 21px;
		} 
		.green {
			padding: 50px 20px !important;
			background-color: #55F2B8 !important;
			border-radius: 21px;
		}
		.green .btn {
			background-color: #C74480;
			border-radius: 21px;
		}
	</style>
</head>
<body>
	<?php require "header.php"; ?>
		<div class="sky">
			<div class="container">
				<div class="row">
					<div class="col s7">
						<div class="parallax-container" style="z-index: 999;">
			        <img src="img/moder.png">
			    </div>
					</div>
					<div class="col s5">
						<h1><b>Для модератора</b></h1> 
						<p>Полное управление сайтом с любого устройства	</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<h1>Редактор содержания сайта</h1>
			</div>
			<div class="row">
				<div class="col s2"></div>
				<div class="col s8 green">
					<h3>Сообщения</h3>
					<a href="specchat.php" class="btn">Посмотреть</a>
				</div>
				<div class="col s2"></div>
			</div>
			<div class="row">
				<div class="col s2"></div>
				<div class="col s8 red">
					<h3>Календарь</h3>
					<a href="speccalend.php" class="btn">Посмотреть</a>
				</div>
				<div class="col s2"></div>
			</div>
			<div class="row">
				<div class="col s2"></div>
				<div class="col s8 green">
					<h3>Профилактика</h3>
					<a href="specprofil.php" class="btn">Посмотреть</a>
				</div>
				<div class="col s2"></div>
			</div>
			<div class="row">
				<div class="col s2"></div>
				<div class="col s8 red">
					<h3>Ответить на карточки</h3>
					<a href="specotv.php" class="btn">Посмотреть</a>
				</div>
				<div class="col s2"></div>
			</div>
		</div>


</body>
</html>