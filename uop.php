<?
require "connect.php";
$solutions = ["решение 1", "прими болеутоляющие таблетки", "отдохни", "решение 4"];
$diagnosises = ["головная боль", "головокружение", "переутомление"];
$id = 2; 
$idOfProb = 4;
if (isset($_POST['textBtn'])) {
	$text = R::dispense('problems');
	$text->name = $_POST['textName'];
	$text->solution = $solutions[$id];
	$text->diagnosis = $diagnosises[$id];
	R::store($text);
	header("Location: addProb.php");
}

if (isset($_POST['specSolBtn'])) {
	$text = R::load('problems', $idOfProb);
	$text->specsol = $_POST['specSolText'];
	$text->dangerrnage = $_POST['dangerRange'];
	R::store($text);
	header("Location: addProb.php");
}

?>