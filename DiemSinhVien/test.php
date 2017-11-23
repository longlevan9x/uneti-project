<?php
	
	include("connect.php");
	$connect = new connect();
	$connection = $connect->connection;		
	mysqli_set_charset($connection,"utf8");
	$query = mysqli_query($connection,"ALTER TABLE info_15 ADD thoigiancapnhat varchar(100);");
	if($query)	echo '15 OK!<br/>';
	else	echo '15 FAIL!<br/>';
	$query1 = mysqli_query($connection,"ALTER TABLE info_16 ADD thoigiancapnhat varchar(100);");
	if($query1)	echo '16 OK!<br/>';
	else	echo '16 FAIL!<br/>';
	$query2 = mysqli_query($connection,"ALTER TABLE info_17 ADD thoigiancapnhat varchar(100);");
	if($query2)	echo '17 OK!<br/>';
	else	echo '17 FAIL!<br/>';
?>
<style>table{border-collapse: collapse;text-align:center}table,table tr,table tr td{border:solid 1px;}.tblMarkHeader{width:100%;height:100%;}</style>