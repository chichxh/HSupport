<?php
require "connect.php";
$profil = R::findAll('profil');
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
			background: linear-gradient(180deg, #2F2B5A 38.54%, #5C5C98 54.17%, #A0A4FF 98.44%);
			color: #fff;
			font-size: 20px;
			
		}
		nav {
			background-color: transparent;	
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
			border-radius: 21px;
			padding: 90px 80px 90px 80px !important;
			background: #C1BBFF;
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
			background: #292650;
			width: 100%;
			transition: 1s;
		}
		.btn {
			box-shadow: none;
			border-radius: 42px;
		}
		.whitebtn, .whitebtn:hover {
			background-color: #F9F9FF;
			color: #000;
		}
		.greenbtn, .greenbtn:hover {
			background-color: #BEF4C7;
			color: #000;
		}
		.bluebtn, .bluebtn:hover {
			background-color: #292650;
			color: #fff;
		}
		.sm {
			font-size: 18px;
		}
	</style>
</head>
<body id="body">
	<div class="nope" id="bodyy">
		<?php require "header.php"; ?>
		<div class="sky">
			<div class="container">
				<div class="row">
					<div class="col s7">
						<div class="parallax-container" style="z-index: 999;">
			        <img src="img/table.png">
			    </div>
					</div>
					<div class="col s5">
						<h1><b>Профилактика</b></h1> 
						<p>Просим вас относится к этим рекомендациям с полной ответственностью </p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col s3">
					<button class="btn whitebtn" onclick="whiteTheme()">1 - 7  лет</button>
				</div>
				<div class="col s3">
					<button class="btn greenbtn" onclick="greenTheme()">8 - 12  лет</button>
				</div>
				<div class="col s3">
					<button class="btn bluebtn" onclick="blueTheme()">13 - 17  лет</button>
				</div>
				<div class="col s3 sm">
					<h1>В чем отличие</h1>
					<p>Для каждой возрастной группы есть разные профилактические работы и врачи</p>
				</div>
			</div>
		</div>
		<div class="container">
			<? for ($i=1; $i <= end($profil)->id; $i++): ?>
				<h1><?= $profil[$i]->topic; ?></h1>
				<div class="row">
					<div class="col s7 blue">
						
					</div>
					<div class="col s5">
						<h2>Краткое содержание</h2>
						<p><?= $profil[$i]->text; ?></p>
						<p class="right-align"><?= $profil[$i]->name; ?></p>
					</div>
				</div>
			<? endfor; ?>
		</div>
	</div>
		<script type="text/javascript">
			var body = document.getElementById('body')
			var block = document.getElementById('bodyy')
			function whiteTheme() {
				block.style.background = "#F9F9FF"
				body.style.color = "#000"
			}
			function greenTheme() {
				block.style.background = "#BEF4C7"
				body.style.color = "#000"
			}	
			function blueTheme() {
				block.style.background = "#292650"
				body.style.color = "#fff"
			}		
		</script>
</body>
</html>