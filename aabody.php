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
		.bodyPart {
			fill: #fff;
			transition: 0.3s;
		}
		.bodyPart:hover {
			fill: #c4c4c4;
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
			        <img src="img/abody.png">
			    </div>
					</div>
					<div class="col s5">
						<h1><b>Подробнее о теле</b></h1> 
						<p>Чтобы лучше довести до врача свою проблему на приеме, тебе нужно изучить свое тело.
Начни учиться вместе с нами!</p>
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
				<div class="col s4">
					<svg width="163" height="481" viewBox="0 0 163 481" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0)">
					<path id="0" onclick="startAlert(this)" class="bodyPart" d="M124.17 246.5L86.12 264.1L79.61 264.23L39.96 247.23C40.09 245.78 40.22 244.34 40.36 242.9C41.45 231.64 42.92 220.76 44.76 211.59C48.87 191.01 43.06 159.9 40.14 146.59C40.1826 146.518 40.2328 146.451 40.29 146.39C41.93 144.62 108.99 142.39 120.9 145.53C120.518 148.455 119.899 151.345 119.05 154.17C116.64 161.96 119.95 213.66 119.95 217.11C119.95 218.88 121.72 230.77 123.54 242.41C123.75 243.79 123.96 245.16 124.17 246.5Z" fill="white" stroke="#020304" stroke-miterlimit="10"/>
					<path id="1" onclick="startAlert(this)" class="bodyPart" d="M39.96 247.27L79.61 264.27C79.61 264.27 70.61 320.18 70.46 326.27C70.31 332.36 66.71 355.38 63.65 363.27C60.59 371.16 52.93 437.27 52.54 451.1C52.15 464.93 55.99 476.38 53.05 478.93C50.11 481.48 25.48 479.06 31.88 470.25C38.28 461.44 38.72 435.8 36.88 425.06C35.09 414.85 37.49 367.83 39.04 358.23C40.71 347.95 40.2 325.74 38.67 302.76C37.69 288.67 38.19 267.61 39.96 247.27Z" fill="white" stroke="#020304" stroke-miterlimit="10"/>
					<path id="2" onclick="startAlert(this)" class="bodyPart" d="M125.69 479.55C122.52 479.64 118.4 479.88 116.93 478.44C112.5 474.12 116.25 463.18 115.74 455.72C115.14 446.96 106.2 372.23 102.46 363.72C98.7199 355.21 96.3299 327.97 95.4599 324.91C94.5899 321.85 86.0999 264.1 86.0999 264.1L124.15 246.5C125.66 256.06 127.06 264.59 127.33 266.01C127.97 269.33 128.48 300.23 127.59 309.16C126.7 318.09 124.78 347.72 127.33 358.31C129.88 368.9 134.33 392.14 133.08 412.82C131.83 433.5 131.46 457.93 133.08 463.46C134.7 468.99 146.48 478.95 125.69 479.55Z" fill="white" stroke="#020304" stroke-miterlimit="10"/>
					<path id="3" onclick="startAlert(this)" class="bodyPart" d="M140.32 106.61L121.48 146.4L121.23 145.63L120.91 145.54C109 142.35 41.9099 144.63 40.2999 146.4C40.2428 146.461 40.1925 146.528 40.1499 146.6C39.9619 146.872 39.7979 147.16 39.6599 147.46L21.8799 97C22.524 94.8576 23.6807 92.9045 25.2499 91.31C25.9498 90.6597 26.8144 90.2136 27.7499 90.02C39.9999 87.64 63.3999 71.02 63.3999 71.02C61.1099 76.25 98.4699 76.16 98.9799 71.95C102.13 78.66 135.5 92.69 139.09 98.49C139.268 98.7439 139.375 99.0408 139.4 99.35C139.581 101.784 139.888 104.207 140.32 106.61Z" fill="white" stroke="#020304" stroke-miterlimit="10"/>
					<path id="4" onclick="startAlert(this)" class="bodyPart" d="M39.6499 147.46C37.6499 151.65 33.6499 165.27 33.5199 168.3C33.3499 171.71 22.8 216.73 18.8 224.81C14.8 232.89 13.1 241.81 15.22 248.47C17.34 255.13 18.22 269.26 16.8 271.69C15.38 274.12 14.6299 268.88 13.7399 264.54C12.8499 260.2 12.0799 262.05 10.4799 266.83C8.87994 271.61 23.18 281.96 12.08 280.05C0.979951 278.14 -0.0100529 262.26 0.669947 259.37C1.34995 256.48 2.66994 203.2 2.87994 199.96C3.08994 196.72 13.0999 152.64 16.1599 147.03C18.5699 142.6 16.7599 111.28 21.8699 97.03L39.6499 147.46Z" fill="white" stroke="#020304" stroke-miterlimit="10"/>
					<path id="5" onclick="startAlert(this)" class="bodyPart" d="M161.57 265.25C161.57 267.93 159.01 273.04 154.57 278.4C150.13 283.76 142.45 280.57 146.02 278.14C149.59 275.71 154.02 265.38 150.23 262.44C146.44 259.5 150.23 265.89 147.55 270.74C144.87 275.59 144.74 273.04 144.62 259.74C144.5 246.44 152.15 248.74 147.81 236.5C143.47 224.26 135.48 200.91 133.99 190.82C132.59 181.61 123.12 151.61 121.48 146.4L140.32 106.61C141.6 114.44 143.75 125.45 143.99 129.34C144.33 134.79 147.74 162.71 153.18 177.68C158.62 192.65 160.18 230.96 159.65 235.9C159.12 240.84 161.57 262.61 161.57 265.25Z" fill="white" stroke="#020304" stroke-miterlimit="10"/>
					<path id="6" onclick="startAlert(this)" class="bodyPart" d="M99.8201 51.04C98.4875 54.5538 97.8096 58.282 97.8201 62.04C97.8701 66.2 99.2401 69.9 98.9901 71.93C98.4801 76.14 61.1201 76.23 63.4101 71C65.7001 65.77 62.4101 50.95 59.1001 46.1C55.7901 41.25 57.0101 17.21 58.4201 12.61C59.8301 8.00999 62.0801 3.00999 69.2801 1.53999C82.2201 -1.10001 101.69 0.889995 103.1 11.97C104.55 23.44 104.76 31.63 105.01 37.66C105.26 43.69 101.35 47.84 99.8201 51.04Z" fill="white" stroke="#020304" stroke-miterlimit="10"/>
					</g>
					<defs>
					<clipPath id="clip0">
					<rect width="162.07" height="480.41" fill="white"/>
					</clipPath>
					</defs>
					</svg>

				</div>
				<div class="col s8">
					<div class="row">
						<div class="col s12" id="infoDiv">
							<p>Здесь будет информация про часть тела, которую вы выберите</p>
						</div>
						<div class="col s12" id="infoaboutDiv">
							<p>Нажмите на часть тела слева</p>
						</div>
					</div>
				</div>			
			</div>
		</div>
	</div>
	<script>
		var bodyParts = ["Живот", "Левая нога", "Правая нога", "Грудь", "Левая рука", "Правая рука", "Голова"];
		var bodyAbout = ["Инфа про живот", "Инфа про левую ногу", "Инфа про правую ногу", "Инфа про грудь", "Инфа про левую руку", "Инфа про правую руку", "Инфа про голову"]
		var infodiv = document.getElementById('infoDiv')
		var infoaboutdiv = document.getElementById('infoaboutDiv')
		function startAlert(bodyPart) {
			infodiv.textContent = bodyParts[parseInt(bodyPart.id)];
			infoaboutdiv.textContent = bodyAbout[parseInt(bodyPart.id)];
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
					<p>Это процесс изменений в организме подростка, вследствие которых он становится взрослым и способным к продолжению рода. Несмотря на индивидуальные различия, в среднем начинается с 8–9 лет у девочек и с 10–11 у мальчиков, а заканчивается 16–17 лет у жен­щин и 19–20 лет у муж­чин</p>
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