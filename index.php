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
			background: linear-gradient(180deg, #2E2A59 1.27%, #000000 100%);
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
		.btn {
			background-color: #c4c4c4;
		}
		.btn:hover {
			background-color: #c4c4c4;
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
	</style>
</head>
<body>
	<?php require "header.php"; ?>
	<div class="sky">
		<div class="container">
			<div class="row">
				<div class="col s7">
					<div class="parallax-container" style="z-index: 999;">
		        <div class="parallax"><img src="img/tree4.png"></div>
		    </div>
				</div>
				<div class="col s5">
					<h1><b>HSupp</b></h1> 
					<p>Это сайт для чего то которя поможет вам с чем-то </p>
				</div>
			</div>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col s1"></div>
		<div class="col s1">
			<img src="img/rect.png">
		</div>
		<div class="col s5 mt-5">
			<div class="row">
				<h1>Знаешь ли что такое пубертатный период?</h1>
			</div>
			<div class="row">
				<p>Это процесс изменений в организме подростка, вследствие которых он становится взрослым и способным к продолжению рода. Несмотря на индивидуальные различия, в среднем начинается с 8–9 лет у девочек и с 10–11 у мальчиков, а заканчивается 16–17 лет у жен­щин и 19–20 лет у муж­чин[</p>
			</div>
			<div class="row">
				<button class="btn">Перейти</button>
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
						<button class="btn">Тест</button>
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
	    		<img src="img/health.png" width="70%">
	    	</div>
	    	<div class="col s5">
	    		<h1><b>Доктор</b></h1>
	    		<p>Это сайт для чего то которя поможет вам с чем-то</p>
	    	</div>
	    </div>
	    <div class="row marg">
	    	<div class="col s5 right-align">
	    		<h1><b>Лень</b></h1>
	    		<p>Это сайт для чего то которя поможет вам с чем-то</p>
	    	</div>
	    	<div class="col s7 right-align">
	    		<img src="img/lazy.png" width="70%">
	    	</div>
	    </div>
	</div>
	

<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, true);
    var elems = document.querySelectorAll('.parallax');
	var instances = M.Parallax.init(elems, 0);
  });
</script>




<div class="container" id="pers">
		<form action="uop.php" method="post">
			<div class="row">
				<div class="input-field col s6">
				    <select>
				        <option value="" disabled selected>Ваш пол</option>
				        <option value="1">Мужской</option>
				        <option value="2">Женский</option>
				    </select>
				    <label>Materialize Select</label>
				</div>
				
			</div>
			<div class="row">
				<div class="input-field col s6">
		        	<input name="height" type="number" class="validate">
		            <label for="height">Рост в метрах</label>
		        </div>
			</div>
			<div class="row">
				<div class="input-field col s6">
		        	<input name="weight" type="number" class="validate">
		            <label for="weight">Вес в килограммах</label>
		        </div>
			</div>
			<input type="submit" name="myBody" value="Отправить">
	    </form>
	</div>

<a class="waves-effect waves-light btn" href="body_one.php">тело</a>
	<a class="waves-effect waves-light btn" href="test.php">тест</a>

<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>