<?php
require "connect.php";
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
		<h1>Начать</h1>
		<div class="row">
			<div class="col s8">
			 	<p>У вас болит..</p>
			 	<button onclick="headache(this)" class="btn" id="one">голова</button>
			 	<button onclick="stomache(this)" class="btn">живот</button>
			 	<button onclick="toothache(this)" class="btn">зуб</button>
			</div>
			<button onclick="finish()">Закончить</button>
		</div>
		<div id="result">
			
		</div>
	</div>

	<script type="text/javascript">
		var result = document.getElementById('result')
		var one = document.getElementById('one')
		var Dheadache = [0, "Головная боль", "Примите таблетки"]
		var Dstomache = [0, "Боль в животе", "Примите обезбалиающие"]
		var Dtoothache = [0, "Зубная боль", "Сходите к стоматологу"]
		function headache(diagnosis) {
			Dheadache[0]++
		}
		function stomache(diagnosis) {
			Dstomache[0]++
		}
		function toothache(diagnosis) {
			Dtoothache[0]++
		}
		function finish() {
			var m = Math.max(Dheadache[0],Dstomache[0],Dtoothache[0])
			if (m == Dheadache[0]) {
				result.textContent = "У вас " + Dheadache[1] + ". " + Dheadache[2];
			}
			if (m == Dstomache[0]) {
				result.textContent = "У вас " + Dstomache[1] + ". " + Dstomache[2];
			}
			if (m == Dtoothache[0]) {
				result.textContent = "У вас " + Dtoothache[1] + ". " + Dtoothache[2];
			}

		}

	</script>


<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>