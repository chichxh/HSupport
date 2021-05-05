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

	<form action="uop.php" method="post">
		<input type="text" name="textName" placeholder="your problem is...">
		<input type="submit" name="textBtn">
	</form>

	<form action="uop.php" method="post">
		<input type="text" name="specSolText">
		<p class="range-field">
	        <input type="range" min="0" max="10" name="dangerRange" />
	    </p>
		<input type="submit" name="specSolBtn">
	</form>


<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>