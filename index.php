<?php
require "connect.php";



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Главная</title>
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
	</style>
</head>
<body>
	<?php require "header.php"; ?>
	<div class="container">
		<div class="row">
			<div class="col s6">
				
			</div>
			<div class="col s6">
				<a href="body_one.php"><button>ntkj 1</button></a>
			</div>
		</div>
	</div>
	<div class="container">
		<form>
			<div class="row">
				<div class="input-field col s6">
				    <select>
				      <option value="" disabled selected>Choose your option</option>
				      <option value="1">Option 1</option>
				      <option value="2">Option 2</option>
				      <option value="3">Option 3</option>
				    </select>
				    <label>Materialize Select</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
		        	<input id="age" type="text" class="validate">
		            <label for="age">Возраст</label>
		        </div>
			</div>
	    </form>
	</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>