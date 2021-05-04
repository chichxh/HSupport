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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<style type="text/css">
		html {
            scroll-behavior: smooth;
        }
		body {
			font-family: 'Montserrat', Arial, sans-serif;
			background-color: #27392B;
		}
		nav {
			background-color: transparent;	
		}
		.sky {
			background-color: #BAE8FC;
			padding: 70px 0 70px 0;
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
	</style>
</head>
<body>
	<?php require "header.php"; ?>
	<div class="sky">
		<div class="container">
			<div class="row">
				<div class="col s7">
					<!-- проблема -->
					<div class="parallax-container">
				        <img src="img/tree.png" height="100%">
				    </div>
				</div>
				<div class="col s5">
					<h1><b>HSupp</b></h1> 
					<p>Это сайт для чего то которя поможет вам с чем-то </p>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		document.addEventListener('DOMContentLoaded', function() {
		    var elems = document.querySelectorAll('.parallax');
		    var instances = M.Parallax.init(elems, options);
		});
	</script>


	<a class="waves-effect waves-light btn" href="body_one.php">тело</a>



	<div class="container" id="pers">
		<form>
			<div class="row">
				<div class="input-field col s6">
					<!-- проблема -->
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
			<a class="waves-effect waves-light btn" name="myBody">Отправить</a>
	    </form>
	</div>

	<div class="row marg">
    	<div class="col s7">
    		<img src="img/lazy.png" width="70%">
    	</div>
    	<div class="col s5">
    		<h1><b>Лень</b></h1>
    		<p>Это сайт для чего то которя поможет вам с чем-то</p>
    	</div>
    </div>

<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
</script>



<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>