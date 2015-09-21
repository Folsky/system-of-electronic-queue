<?php
	require 'config.php';
	
	class Core {
		// данные (свойства):
		var $addr;
		

		// методы:
		function getwaits() {
			$this->addr = 134;
			return $this->addr;
		}

	}
	
	class Operator {
		function getmaxvalue(){
			$sql = 'select * from `operators`';
			$res = mysql_query($sql);
			return mysql_num_rows($res);
		}
		
		function getmaxworks(){
			$sql = 'select * from `operators` where `status` = 1';
			$res = mysql_query($sql);
			return mysql_num_rows($res);
		}
	}
	
	class Client {
		function getmaxvalue(){
			$sql = 'select * from `clients`';
			$res = mysql_query($sql);
			$row = mysql_fetch_assoc($res);
			return mysql_num_rows($res);
		}
		
		function showlist(){

			$a;
			$b = mysql_num_rows($res);
			for ($x=0; $x++ < $b;) {
				if($a < 5) {
					$query = sprintf("SELECT * FROM clients WHERE %d",
					mysql_real_escape_string("$x"));
					$result = mysql_query($query);
					if (!$result) {
						$message  = 'Неверный запрос: ' . mysql_error() . "\n";
						$message .= 'Запрос целиком: ' . $query;
						die($message);
					}
					$row = mysql_fetch_assoc($result);
					if(!$row['status']) {
						printf("%s", $row['id']);
						$a++;	
					}
				}
			}
		}
	}
?>