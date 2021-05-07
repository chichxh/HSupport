<?
require "connect.php";

$solutions = ["решение 1", "прими болеутоляющие таблетки", "отдохни", "решение 4"];
$diagnosises = ["головная боль", "головокружение", "переутомление"];
$id = 2; 
if (isset($_POST['textBtn'])) {
	$text = R::dispense('problems');
	$text->name = $_POST['textName'];
	$text->solution = $solutions[$id];
	$text->diagnosis = $diagnosises[$id];
	R::store($text);
	header("Location: addProb.php");
}

$idOfProb = 4;
if (isset($_POST['specSolBtn'])) {
	$text = R::load('problems', $idOfProb);
	$text->specsol = $_POST['specSolText'];
	$text->dangerrnage = $_POST['dangerRange'];
	R::store($text);
	header("Location: specsite.php");
}

if (isset($_POST['logbtn'])) {
	if ($_POST['logpass'] == "password") {
		header("Location: spec.php");
	}
	else {
		header("Location: login.php");
	}
}

if (isset($_POST['specProfBtn'])) {
	$text = R::dispense('profil');
	$text->topic = $_POST['specProfilTop'];
	$text->name = $_POST['specProfilName'];
	$text->text = $_POST['specProfilText'];
	R::store($text);
	header("Location: specprofil.php");
}

if (isset($_POST['eventbtn'])) {
	$text = R::dispense('calendar');
	$text->date = $_POST['dateof'];
	$text->event = $_POST['event'];
	R::store($text);
	header("Location: speccalend.php");
}
?>