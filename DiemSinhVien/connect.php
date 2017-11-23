<?php
	define("HOSTNAME","localhost");
	define("USERNAME","root");
	define("PASSWORD","");
	define("DATABASENAME","students");
	
	class connect{
		var $connection;
		
		function connect(){
			$this->connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASENAME);
		}
	}
?>