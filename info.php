<?php
	session_start(); 
	error_reporting(1);
	
	require 'core/config.php';
	require 'core/controller.php';
			$query = sprintf("SELECT * FROM `clients`");
			$result = mysql_query($query);
			$a = 0;
			$b = mysql_num_rows($result);
			for ($x=0; $x++ < $b;) {
				if($a < 5) {
					$query = sprintf("SELECT * FROM `clients` WHERE `ID` = %d", $x);
					
					$result = mysql_query($query);
					$row = mysql_fetch_assoc($result);
					
					if(!$row['status']) {
						printf("%d<br />", $row['ID']);
						$a++;	
					}
				}
			}
			$query = sprintf("SELECT * FROM `operators`");
			$result = mysql_query($query);
			$b = mysql_num_rows($result);
			for ($x=0; $x++ < 5;) {
				
					$query = sprintf("SELECT * FROM `operators` WHERE `ID` = %d", $x);
					
					$result = mysql_query($query);
					$row = mysql_fetch_assoc($result);
					
					if(!$row['status']) {
						printf("%s (%d)<br />", $row['name'], $row['ID']);
					}
					else {
							echo "Ожидайте <br>";
					}
						
					
				}
			
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<style>
		body {
			font-family: Arial;
		}
	</style>
	<script type="text/javascript">
		// window.onload = print;
	</script>
</head>
<body>
<audio src="update.mp3" autoplay="autoplay"></audio>

</body>
</html>