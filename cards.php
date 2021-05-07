<?php
require "connect.php";
$problem = R::findAll('problems');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Карточки</title>
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
			background-color: #292650;
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
			border-radius: 57px;
			padding: 90px 80px 90px 80px;
			background: linear-gradient(180deg, #2A5073 0%, #032341 110.74%);
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
			background-color: #292650;
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
		.card {
			border-radius: 21px;	
			background: #C74480;
		}
		.collapsible-header {
			background-color: #C74480; 
		}
	</style>
</head>
<body  id="body">
	<?php require "header.php"; ?>
	<div class="sky">
		<div class="container">
			<div class="row">
				<div class="col s7">
					<img src="img/cards.png">
		    	</div>
		    	<div class="col s5">
					<h1><b>Карточки</b></h1> 
					<p>В той страничке вы сможете посмотреть проблемы дургих детей и рекомендации специалистов и их оценка серьезности</p>
				</div>
			</div>	
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col s11"></div>
			<div class="col s1">
				 <a class="btn-floating btn-large waves-effect waves-light red" href="addProb.php"><i class="material-icons">add</i></a>
			</div>
		</div>
		<div class="row">
			<h1 class="center-align"><b>Карточки</b></h1>
		</div>
		<? for ($i=1; $i <= end($problem)->id; $i++): ?>
			<div class="row">
				<div class="col s2"></div>
			    <div class="col s8">
			        <div class="card">
			            <div class="card-content black-text">
				          	<span class="card-title"><p><?= $problem[$i]->id; ?>. <?= $problem[$i]->name; ?></p></span>
				          	<div style="background-color: #fff; width: 100%; height: 20px">
				          		<div style="background-color: #55F2B8; width: <?= $problem[$i]->dangerrnage; ?>%; height: 20px">
				          		</div>
				          	</div>
				        </div>
				        <div class="card-action">
				        	<ul class="collapsible">
							    <li>
							        <div class="collapsible-header">Просмотреть ответ</div>
							        <div class="collapsible-body">
							        	<span><?= $problem[$i]->solution; ?></span>
							        	<span><?= $problem[$i]->specsol; ?></span>
							        </div>
							    </li>
							</ul>
					    </div>
			        </div>
			    </div>
			    <div class="col s2"></div>
		    </div>
	    <? endfor; ?>
	</div>
	<script type="text/javascript">
		document.addEventListener('DOMContentLoaded', function() {
	    var elems = document.querySelectorAll('.collapsible');
	    var instances = M.Collapsible.init(elems, true);
	  });
	</script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>