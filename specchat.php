<?php
require "connect.php";
$chat = R::findAll('comchat');
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
			background: #292650;
			color: #000;
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
		.green {
			border-radius: 21px;
			padding: 50px 30px 50px 30px !important;
			background: #A3C2CF !important;
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
		.sm {
			font-size: 18px;
		}
		.cal {
			border-radius: 21px;
			padding: 50px 30px 50px 30px !important;
			background-color: #A3C2CF;
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
				        <img src="img/chat.png">
				    </div>
				    <div class="col s5">
						<h1><b>Чат</b></h1> 
						<p>Здесь вы сможете проконсультироватся со специалистом о проблеме или же сообщить о проблеме ребенка</p>
					</div>
				</div>	
			</div>
		</div>
	</div>
		<div class="container">
			<div class="row">
				<div class="col s3"></div>
				<div class="col s6 green">
					<h3>Предупреждение</h3>
				</div>
				<div class="col s3"></div>
			</div>
			<h1 class="center-align"><b>Чат</b></h1>
			<div class="row cal">
				<? for ($i=1; $i <= end($chat)->id; $i++): ?>
					<div class="row">
						<p>- <?= $chat[$i]->comtext; ?></p>
					</div>
				<? endfor; ?>
			</div>
			<div class="row">
				<div class="col s12 cal">
					<form action="uop.php" method="post">
						<div class="input-field col s12">
				          	<input id="idof" type="text" class="validate" name="comtext">
				          	<label for="idof">Введите текст</label>
				        </div>
				        <input type="submit" name="combtn" class="btn">
					</form>
				</div>
			</div>
		</div>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>