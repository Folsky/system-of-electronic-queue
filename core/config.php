<?php
	$connect = mysql_connect("localhost", "root", "") or die ("Нет подключения к серверу");
	mysql_select_db("turn") or die("База данных не найдена!");
	mysql_set_charset("utf8");
?>