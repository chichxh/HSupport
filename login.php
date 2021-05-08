<?php
require "connect.php";
?>

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
			background: linear-gradient(180deg, #2F2B5A 38.54%, #5C5C98 54.17%, #A0A4FF 98.44%);
			color: #fff;
			font-size: 20px;
			height: 10000px;
		}
		nav {
			background-color: transparent;	
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
		.pd-0 {
			padding: 0;
			margin:0;
		}
		footer {
			background: linear-gradient(180deg, #2A5073 0%, #032341 110.74%);
		}
		input {
			color: #fff;
		}
	</style>
</head>
<body>
	<div class="container mt-5 center-align">
		<div class="col s8">
			<h1>Если вы специлист и вам выдали пароль зайдите по нему сюда</h1>
			<form action="uop.php" method="post">
				<input type="password" name="logpass">
				<input type="submit" name="logbtn" class="btn">
			</form>
		</div>
	</div>
</body>
</html>