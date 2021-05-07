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
			        <div class="parallax"><a class="modal-trigger" href="#modal1"><img src="img/tree4.png"></a></div>
			    </div>
					</div>
					<div class="col s5">
						<h1><b>HSupp</b></h1> 
						<p>Это сайт для чего то которя поможет вам с чем-то </p>
					</div>
				</div>
			</div>
		</div>

		<div id="modal1" class="modal">
		    <div class="modal-content">
		        <h4>Правило пяти не бойся</h4>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		    </div>
		    <div class="modal-footer">
		        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Вау</a>
		    </div>
		</div>

		<?php
		require "devider.php";
		?>

		<div class="container">
			<div class="row mt-5" id="cards">
				<div class="col s7">
					<h1>Карточки</h1>
					<p>В этой страничке вы сможете увидеть проблемы других детей и рекомендации от врачей на счет этой проблемы </p>
				</div>
				<div class="col s5">
					<img src="img/cards.png" width="100%"> <br>
					<a href="cards.php"><button class="btn">Подробнее</button></a>
				</div>
			</div>
			<div class="row mt-5" id="aabody">
				<div class="col s5">
					<img src="img/abody.png" width="100%"> <br>
					<a href="aabody.php"><button class="btn">Подробнее</button></a>
				</div>	
				<div class="col s7 right-align">
					<h1>Подробнее о теле</h1>
					<p>Начни изучать свое тело с HSupp</p>
				</div>
			</div>
			<div class="row mt-5" id="abody" style="display: none">
				<div class="col s5">
					<img src="img/abody.png" width="100%"> <br>
					<a href="abody.php"><button class="btn">Подробнее</button></a>
				</div>	
				<div class="col s7 right-align">
					<h1>Подробнее о теле</h1>
					<p>Начни изучать свое тело с HSupp</p>
				</div>
			</div>
			<div class="row mt-5" id="chat">
				<div class="col s7">
					<h1>Чат</h1>
					<p>Здесь вы сможете проконсультироватся со специалистом о проблеме или же сообщить о проблеме ребенка</p>
				</div>
				<div class="col s5">
					<img src="img/chat.png" width="100%"> <br>
					<a href="chat.php"><button class="btn">Подробнее</button></a>
				</div>
			</div>
			<div class="row mt-5" id="table">
				<div class="col s7">
					<h1>Профилактика</h1>
					<p>В этой страничке доступна информация, которая может помочь лучше понимать как оберегать свое здоровье</p>
				</div>
				<div class="col s5">
					<img src="img/table.png" width="100%"> <br>
					<a href="profil.php"><button class="btn">Подробнее</button></a>
				</div>
			</div>
			<div class="row mt-5" id="schedule">
				<div class="col s5">
					<img src="img/schedule.png" width="100%"> <br>
					<a href="calend.php"><button class="btn">Подробнее</button></a>
				</div>
				<div class="col s7 right-align">
					<h1>Календарь</h1>
					<p>Здесь вы сможете увидеть занятость разных специалистов и записаться к ним </p>
				</div>
			</div>
		</div>

<script type="text/javascript">
	var body = document.getElementById('body')
	var block = document.getElementById('bodyy')

	var cards = document.getElementById('cards')
	var abody = document.getElementById('abody')
	var aabody = document.getElementById('aabody')
	var chat = document.getElementById('chat')
	var table = document.getElementById('table')
	var schedule = document.getElementById('schedule')
	function whiteTheme() {
		block.style.background = "#F9F9FF"
		body.style.color = "#000"
		cards.style.display = "none"
		abody.style.display = "none"
		aabody.style.display = "none"
		chat.style.display = "block"
		table.style.display = "block"
		schedule.style.display = "block"
	}
	function greenTheme() {
		block.style.background = "#BEF4C7"
		body.style.color = "#000"
		cards.style.display = "none"
		abody.style.display = "block"
		aabody.style.display = "none"
		chat.style.display = "block"
		table.style.display = "block"
		schedule.style.display = "block"
	}	
	function blueTheme() {
		block.style.background = "#292650"
		body.style.color = "#fff"
		cards.style.display = "block"
		abody.style.display = "none"
		aabody.style.display = "block"
		chat.style.display = "none"
		table.style.display = "block"
		schedule.style.display = "block"
	}		
</script>

<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, true);
    var elems = document.querySelectorAll('.parallax');
	var instances = M.Parallax.init(elems, 0);
	var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, 250);
  });
</script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>