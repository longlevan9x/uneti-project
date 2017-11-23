<?php
	error_reporting(0);
	set_time_limit(0);
	include("connect.php");
	$connect = new connect();
	$connection = $connect->connection;		
	if (mysqli_connect_errno())
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
	else{
		mysqli_set_charset($connection,"utf8");
		require_once 'simple_html_dom.php';
		$msv = $_GET['MSSV'];
		$link = "http://daotao.uneti.edu.vn/XemDiem.aspx?MSSV=".$msv;
		$html = file_get_html($link);
		if(strlen($html)>25000){	
			// Lọc link
			$thuoctinh =  $html->find('.main-content',0);
			
			include 'student.php'
			
			if($querry){
				echo 1;
			}
			else
				echo 0;
		}
	}
?>