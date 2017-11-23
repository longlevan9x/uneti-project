<!DOCTYPE html>
<!-- made by Verdant - ViVuProductions - 0969 80 20 50 - vinhld.it@gmail.com-->
<?php
	if(isset($_GET['MSSV'])){
		$MSSV = isset($_GET['MSSV']) ? $_GET['MSSV'] : '';
		include 'connect.php';
		$connect = new connect();
		$connection = $connect->connection;
		if (mysqli_connect_errno()){
		}
		else{
			$exist = false;
			mysqli_set_charset($connection,"utf8");
			$result = mysqli_query($connection,"select * from students where masinhvien = '".$MSSV."'");
			if(mysqli_num_rows($result) > 0){
				$student = mysqli_fetch_array($result);
			}
			else{
				
			}
?>
			<html>
				<head>
					<title><?php echo ''; ?></title>
					<link rel="mask-icon" href="favicon.ico"/>
					<link rel="stylesheet" type="text/css" href="css/style.css"/>
				</head>
				
				<body>
					
				</body>
			</html>
<?php
		}
	}
	else
		header('location: index.php');
?>