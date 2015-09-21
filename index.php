<?php
	session_start(); 
	error_reporting(1);
	
	require 'core/config.php';
	require 'core/controller.php';

	$core = new Core();
	$operators = new Operator();
	
	printf("Всего операторов: %d <br/>", $operators->getmaxvalue()); 
	printf("Из них работают: %d <br/>", $operators->getmaxworks());
	print("<a href = 'new.php'>Выдать номер</a>")
?>
