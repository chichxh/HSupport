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
			<div class="row mt-5" id="cards">
				<div class="col s7">
					<h1>Карточки</h1>
					<p>Здесь вы узнаете о жизни разных больниц, о профилатике, о важности не боятся идти к врачу и говорить и своих проблемах</p>
				</div>
				<div class="col s5">
					<img src="img/cards.png" width="100%"> <br>
					<a href="chat.php"><button class="btn">Подробнее</button></a>
				</div>
			</div>
			<div class="row mt-5" id="abody">
				<div class="col s5">
					<img src="img/abody.png" width="100%"> <br>
					<a href="chat.php"><button class="btn">Подробнее</button></a>
				</div>	
				<div class="col s7 right-align">
					<h1>Подробнее о теле</h1>
					<p>Здесь вы узнаете о жизни разных больниц, о профилатике, о важности не боятся идти к врачу и говорить и своих проблемах</p>
				</div>
			</div>
			<div class="row mt-5" id="chat">
				<div class="col s7">
					<h1>Чат</h1>
					<p>Здесь вы узнаете о жизни разных больниц, о профилатике, о важности не боятся идти к врачу и говорить и своих проблемах</p>
				</div>
				<div class="col s5">
					<img src="img/chat.png" width="100%"> <br>
					<a href="chat.php"><button class="btn">Подробнее</button></a>
				</div>
			</div>
			<div class="row mt-5" id="table">
				<div class="col s7">
					<h1>Профилактика</h1>
					<p>Здесь вы узнаете о жизни разных больниц, о профилатике, о важности не боятся идти к врачу и говорить и своих проблемах</p>
				</div>
				<div class="col s5">
					<img src="img/table.png" width="100%"> <br>
					<a href="chat.php"><button class="btn">Подробнее</button></a>
				</div>
			</div>
			<div class="row mt-5" id="schedule">
				<div class="col s5">
					<img src="img/schedule.png" width="100%"> <br>
					<a href="chat.php"><button class="btn">Подробнее</button></a>
				</div>
				<div class="col s7 right-align">
					<h1>Календарь</h1>
					<p>Здесь вы узнаете о жизни разных больниц, о профилатике, о важности не боятся идти к врачу и говорить и своих проблемах</p>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			var body = document.getElementById('body')
			var block = document.getElementById('bodyy')

			var cards = document.getElementById('cards')
			var abody = document.getElementById('abody')
			var chat = document.getElementById('chat')
			var table = document.getElementById('table')
			var schedule = document.getElementById('schedule')
			function whiteTheme() {
				block.style.background = "#F9F9FF"
				body.style.color = "#000"
				cards.style.display = "none"
				abody.style.display = "none"
				chat.style.display = "block"
				table.style.display = "block"
				schedule.style.display = "block"
			}
			function greenTheme() {
				block.style.background = "#BEF4C7"
				body.style.color = "#000"
				cards.style.display = "none"
				abody.style.display = "block"
				chat.style.display = "block"
				table.style.display = "block"
				schedule.style.display = "block"
			}	
			function blueTheme() {
				block.style.background = "#292650"
				body.style.color = "#fff"
				cards.style.display = "none"
				abody.style.display = "block"
				chat.style.display = "none"
				table.style.display = "block"
				schedule.style.display = "block"
			}		
		</script>











		

		<div class="row mt-5" style="z-index: 100;">
			<div class="col s1"></div>
			<div class="col s1">
				<img src="img/rect.png" width="100%">
			</div>
			<div class="col s5 mt-5">
				<div class="row">
					<h1>Знаешь ли что такое пубертатный период?</h1>
				</div>
				<div class="row">
					<p>Это процесс изменений в организме подростка, вследствие которых он становится взрослым и способным к продолжению рода. Несмотря на индивидуальные различия, в среднем начинается с 8–9 лет у девочек и с 10–11 у мальчиков, а заканчивается 16–17 лет у жен­щин и 19–20 лет у муж­чин[</p>
				</div>
				<div class="row">
					<a href="nulless.php"><button class="bttn"><p>Перейти</p></button></a>
				</div>
			</div>
			<div class="col s4 mt-5">
				<img src="img/glow.png">
			</div>
			<div class="col s1 mt-5">
			</div>
		</div>
		<div class="row">
			<div class="col s10"></div>
			<div class="col s2 left-align">
				<img src="img/rect.png">
			</div>
		</div>

		<div class="container">
			<div class="row blue">
				<div class="row">
					<div class="col s7">
						<h1>Пубертатный ли у тебя возраст?</h1>
						<p>Это процесс изменений в организме подростка, вследствие которых он становится взрослым и способным к продолжению рода. Несмотря на индивидуальные различия, в среднем начинается с 8–9 лет у девочек и с 10–11 у мальчиков, а заканчивается 16–17 лет у жен­щин и 19–20 лет у муж­чин[</p>
					</div>
					<div class="col s5">
						<div class="row">
							<img src="img/metka.png">
						</div>
						<div class="row">
							<a href="testpub.php"><button class="bttn">Тест</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s2 right-align">
				<img src="img/rect.png">
			</div>
			<div class="col s10"></div>
		</div>

		
		<div class="container">
			<div class="row marg">
		    	<div class="col s7">
		    		<a href="doctor.php"><img src="img/health.png" width="70%"></a>
		    	</div>
		    	<div class="col s5">
		    		<h1><b>Жизнь больницы</b></h1>
		    		<p>Боишься ходить в больницы? Не знаешь как правильно чистить зубы или расписания профилактических работ? В этой странице вы найдете все необходимое, что поможет вам вести здоровый образ жизни и знать об услугах больниц. Также, здесь ты сможешь заранее договариваться с врачами из твоей больницы.</p>
		    	</div>
		    </div>
		    <div class="row marg">
		    	<div class="col s5 right-align">
		    		<h1><b>Спорт</b></h1>
		    		<p>Во время пубертатного периода организм человека ведет себя иначе. В этой странице вы сможете найти специальные упражнения которые смогут помочь сделать свое тело желаемым во время пубертатного периода.</p>
		    	</div>
		    	<div class="col s7 right-align">
		    		<a href="sports.php"><img src="img/ball.png" width="70%"></a>
		    	</div>
		    </div>
		    <div class="row marg">
		    	<div class="col s7">
		    		<a href="trash.php"><img src="img/trsh.png" width="70%"></a>
		    	</div>
		    	<div class="col s5">
		    		<h1><b>Нездоровые привычки</b></h1>
		    		<p>Далеко не секрет, что большинство плохих привычек приходят в подростковые года, также не секрет что и во время этого периода можно от него избавиться. В этой страничке вы узнаете о вреде плоких привычек и сможете почитать или оставить свой опыт с плохими привычками. </p>
		    	</div>
		    </div>
		</div>
		<?php
		require "footer.php";
		?>
	</div>
	

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



<!-- <a class="waves-effect waves-light btn" href="body_one.php">тело</a>
<a class="waves-effect waves-light btn" href="test.php">тест</a> -->



<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>