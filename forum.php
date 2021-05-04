<?php
require "connect.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
		<?php ?>
		<div class="row">
		    <div class="col s12 m6">
		        <div class="card blue-grey darken-1">
		            <div class="card-content white-text">
			          <span class="card-title">Типа диагноз</span>
			          <p>Проблема</p>
			        </div>
			        <div class="card-action">
				        <a href="#">Просмотреть ответ</a>
				        <div class="collapsible-header">Просмотреть ответ</div>
			        </div>
		        </div>
		    </div>
	    </div>
	    <?php ?>

	    <div class="collapsible-header">Просмотреть ответ</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
	</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>