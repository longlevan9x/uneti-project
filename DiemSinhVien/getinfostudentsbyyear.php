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
		include 'simple_html_dom.php';
		$year = $_GET['year'];
		$result = mysqli_query($connection,"select masinhvien from students WHERE masinhvien > '".$year."106100067' and trangthai <>'Thôi học'");
		while($masinhvien = mysqli_fetch_array($result)){
			$msv = $masinhvien[0];
			$table = 'info_'.$year;
			include 'diemsinhvien.php';
			include 'lichhoc.php';
			include 'lichthi.php';
			include 'congno.php';
			$now = getdate(); 
			$currentTime = $now["year"].'-'. $now["mon"] . "-".$now["mday"] . " "  .$now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"]." GMT"; 
			$querry = mysqli_query($connection,"insert into ".$table." values('".$msv."','".$diemsinhvien."','".$lichhoc."','".$lichthi."','".$congno."','".$currentTime."')");
			if($querry)
				echo $msv.' OK!<br/>';
			else
				echo $msv.' FAIL!<br/>';
		}
		
	}
	mysqli_close($connection);
?>
<style>.tbl{width:100%;text-align:center;}.tbl tr td:nth-child(1){width:11%;}.tbl tr td:nth-child(2){width:34%;}.tbl tr td:nth-child(3){width:12%;}.tbl tr td:nth-child(4){width:17%;}.tbl tr td:nth-child(5){width:11%;}.tbl tr td:nth-child(6){width:17%;}#detailTbl{border-collapse: collapse;text-align:center;}#detailTbl{width:100%;}#detailTbl th:nth-child(1){width:5%;}#detailTbl th:nth-child(2){width:5%;}#detailTbl th:nth-child(3){width:10%;}#detailTbl th:nth-child(4){width:30%;}#detailTbl th:nth-child(5){width:10%;}#detailTbl th:nth-child(6){width:15%;}#detailTbl th:nth-child(7){width:10%;}#detailTbl th:nth-child(8){width:15%;}</style>