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
			background: #C8F8FF;
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
		.cal {
			border-radius: 21px;
			padding: 50px 30px 50px 30px !important;
			background-color: #6BFFD3;
		}
		.holder-html-chat{ border: 1px solid #ccc;padding:10px;background-color: #fff;width: 600px;}
		.html-chat-history{ max-width: 600px; overflow: auto;max-height: 900px; border: 1px solid #ccc;padding: 5px;}
		.html-chat-js-name{ margin-top:10px; }
		.html-chat-js-input{ max-width: 600px;max-height: 100px;width: 600px;margin-top:10px; }
		.html-chat-js-button-holder{ margin-bottom: 0px;margin-top: 10px; }
		.html-chat-js-button-holder input{ width: 220px; }
		.html-chat-js-answer{ float:right; }
		.html-chat-js-answer a{ color: #777;font-size: 12px;}
		.html-chat-js-answer a:hover{ color: #338;font-size: 12px;}
		.html-chat-msg{ margin: 0px; }
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
					</div>
					<div class="col s5">
						<h1><b>Чат</b></h1> 
						<p>Здесь вы сможете проконсультироватся со специалистом о проблеме или же сообщить о проблеме ребенка</p>
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
			<div class="row">
				<div class="col s3"></div>
				<div class="col s6 green">
					<h3>Предупреждение</h3>
				</div>
				<div class="col s3"></div>
			</div>
			<div class="row">
				<h1 class="center-align"><b>Чат</b></h1>
				<div class="col s12 cal">
					<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" ></script>
					<script type="text/javascript" src="https://comet-server.ru/CometServerApi.js" ></script>
					<script type="text/javascript" src="https://comet-server.ru/doc/html_chat.js" ></script>
					<link rel="stylesheet" type="text/css" href="https://comet-server.ru/doc/html_chat.css"></link>

					<!-- Осталось настроить сам чат и запустить, для этого пишем небольшой скрипт. -->
					<div id="html-chat"></div>

					<script>

					   /**
					    * Чат работает на comet-server.ru
					    * По любым вопросам обращайтесь support@comet-server.ru или на сайт comet-server.ru
					    */
					    $(document).ready(function()
					    {
					       // Запуск api комет сервера
					       CometServer().start({dev_id: 15 }) // Идентификатор разработчика на comet-server.ru

					       // Запуск чата. Передаём ему элемент в котором надо создать окно чата.
					       htmljs_Chat_Init( $("#html-chat") )
					    });
					</script>
				</div>
			</div>
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