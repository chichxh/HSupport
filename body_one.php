<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<style type="text/css">
		body {
			font-family: 'Montserrat', Arial, sans-serif;
		}
		nav {
			background-color: transparent;
			color: #000;
		}
		.brand-logo, nav a {
			color: #000 !important;
		}
		.bodyPart {
			fill: red;
		}
		.bodyPart:hover {
			fill: blue;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Это вы</h1>
		<h4>
			По введенным данным мы сделали примерное сложение вашего тела.
		</h4>
		<div class="row">
			<div class="col s8" id="infoDiv">
				<p>Здесь будет информация про часть тела, которую вы выберите</p>
			</div>
			<div class="col s4">
				<svg width="500" viewBox="0 0 1000 1000" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle id="0" onclick="startAlert(this)" class="head bodyPart" cx="499.5" cy="186.5" r="92.5" fill="#C4C4C4"/>
					<circle id="1" onclick="startAlert(this)" class="body bodyPart" cx="499.5" cy="472.5" r="176.5" fill="#C4C4C4"/>
					<ellipse id="2" onclick="startAlert(this)" class="hand bodyPart" cx="383" cy="778.5" rx="60" ry="129.5" fill="#C4C4C4"/>
					<ellipse id="3" onclick="startAlert(this)" class="hand bodyPart" cx="222.473" cy="472.617" rx="60" ry="129.5" transform="rotate(15 222.473 472.617)" fill="#C4C4C4"/>
					<ellipse id="4" onclick="startAlert(this)" class="foot bodyPart" cx="767.473" cy="472.617" rx="60" ry="129.5" transform="rotate(-15 767.473 472.617)" fill="#C4C4C4"/>
					<ellipse id="5" onclick="startAlert(this)" class="foot bodyPart" cx="616" cy="778.5" rx="60" ry="129.5" fill="#C4C4C4"/>
				</svg>
			</div>
		</div>
	</div>
	<script>
		var bodyParts = ["Голова", "Тело", "Левая нога", "Левая рука", "Правая рука", "Правая нога"];
		var infodiv = document.getElementById('infoDiv')
		function startAlert(bodyPart) {
			infodiv.textContent = bodyParts[parseInt(bodyPart.id)];
		}
	</script>
</body>
</html>