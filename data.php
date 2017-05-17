<?php

// GET ALL DATA -> array ($clients);

require_once 'classes.php';

//Declare an array in which there will be customers
$clients = array();

//Create several instances of our clients class from classes.php
// which come in either one duble or several MySql
$jan = new JanP;


$mira = new FirstLine;
$agnieshka = new FirstLine;


$offMan = new SecondLine;
$ganesh1 = new SecondLine;
$maciej1 = new SecondLine;


$someClient1 = new SomeClient;
$someClient2 = new SomeClient;

//Write our client objects to our clients array (8 people)
$clients = array($jan, $mira, $agnieshka, $offMan, $ganesh1, $maciej1, 
	$someClient1, $someClient2);

/*Checking the output of the array $ clients
echo '<pre>';
print_r($clients);
*/



?>