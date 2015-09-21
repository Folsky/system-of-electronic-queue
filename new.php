<?php
	session_start(); 
	error_reporting(1);
	header('Content-Type: text/html; charset=utf-8', true);
	
	require 'core/config.php';
	require 'core/controller.php';

	$clients = new Client();
	printf("Ваш номер: %d", $clients->getmaxvalue()+1);
	
	$data = file_get_contents("core/data.txt");
	$wirelessinfo = file_get_contents("core/wirelessinfo.txt");

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
	<?php
	printf("<center>
	%s<br />
	<p>***************************************</p>
	<p><font size = '6'><b>%d</b></font></p>
	<p>***************************************</p>
	<p>%s</p>
	</center>", $data, $clients->getmaxvalue()+1, $wirelessinfo);
	?>
</body>
</html>

<?php
		$query = sprintf("INSERT INTO `clients` (`ID`, `status`) VALUES (NULL, '0');");
		$result = mysql_query($query);
		if (!$result) {
			$message  = 'Неверный запрос: ' . mysql_error() . "\n";
			$message .= 'Запрос целиком: ' . $query;
			die($message);
		}
?>