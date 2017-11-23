<?php
	set_time_limit(0);
	include("connect.php");
	$connect = new connect();
	$connection = $connect->connection;		
	if (mysqli_connect_errno())
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
	else{
		mysqli_set_charset($connection,"utf8");
		include 'simple_html_dom.php';
		
		$msv = $_GET['MSSV'];
		include 'diemsinhvien.php';
		include 'lichhoc.php';
		echo 1;
		include 'lichthi.php';
		include 'congno.php';
		$now = getdate();
		$currentTime = $now["year"].'-'. $now["mon"] . "-".$now["mday"] . " "  .$now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"]." GMT"; 
		$querry = mysqli_query($connection,"insert into info_16 values('".$msv."','".$diemsinhvien."','".$lichhoc."','".$lichthi."','".$congno."','".$currentTime."')");
		if($querry)
			echo $msv.' OK!<br/>';
		else
			echo $msv.' FAIL!<br/>';
		
	}
	mysqli_close($connection);
?>