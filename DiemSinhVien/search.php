<?php
	$key = isset($_GET['key']) ? $_GET['key'] : '';
	include 'connect.php';
	$connect = new connect();
	$connection = $connect->connection;
	if (mysqli_connect_errno())
		echo json_encode(array('result' => 'fail', 'message' => 'Failed to connect to MySQL:' .mysqli_connect_error()));
	else{
		mysqli_set_charset($connection,"utf8");
		$result = mysqli_query($connection,"select masinhvien, hoten, lop from students where masinhvien like '%".$key."%' or hoten  like '%".$key."%' or lop  like '%".$key."%'");
		$stt = 1;
		$response = '';
		while($rows = mysqli_fetch_array($result)){
			$response = $response . '<a class="linkListStudents" target="_blank" href=""><div class="thongtinsinhvien"><div class="stt">'.$stt++.'</div><div class="masinhvien">'.$rows[0].'</div><div class="hoten">'.$rows[1].'</div><div class="lop">'.$rows[2].'</div></div></a>';
		}
		$stt--;
		echo json_encode(array('result' => 'success', 'message' => $response,'numCount' => $stt));
	}
?>