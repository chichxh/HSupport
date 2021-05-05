<?php
require "connect.php";
$problem = R::findAll('problems');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<?php
		require "header.php";
	?>
	<div class="container">
		<? for ($i=1; $i <= end($problem)->id; $i++): ?>
			<div class="row">
			    <div class="col s12 m6">
			        <div class="card blue-grey darken-1">
			            <div class="card-content white-text">
				          	<span class="card-title"><?= $problem[$i]->diagnosis; ?></span>
				          	<p><?= $problem[$i]->name; ?></p>
				          	<div style="background-color: #000; width: 100%; height: 20px">
				          		<div style="background-color: #fff; width: <?= $problem[$i]->dangerrnage; ?>0%; height: 20px">
				          			
				          		</div>
				          	</div>
				        </div>
				        <div class="card-action">
					        <a href="#">Просмотреть ответ</a>
					        <?= $problem[$i]->solution; ?>
					        <?= $problem[$i]->specsol; ?>
					    </div>
			        </div>
			    </div>
		    </div>
	    <? endfor; ?>

	    <a href="addProb.php"><button> Добавить</button></a>
	</div>



<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>