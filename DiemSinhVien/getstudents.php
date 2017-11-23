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
		$v_year = array(14,15,16,17);
		$v_place = array(1,2);
		$v_branch = array(11,12,21,31,41,42,43,51,61,71,72,81);
		foreach($v_year as $key => $year){
			foreach($v_place as $key => $place){
				foreach($v_branch as $key => $branch){
					$run = 0;	$students_added = 0;	$students_exits = 0;
					$mssv = $year * 1000000000 + $place * 100000000 + $branch * 100000 + 1;
					if($year <17 && $branch == 72){
						break;
					}
					for($msv = $mssv; $msv <= ($mssv + 2000); $msv++){
						$link = "http://daotao.uneti.edu.vn/XemDiem.aspx?MSSV=".$msv;
						$html = file_get_html($link);
						if(strlen($html)>25000){	
							// Lọc link
							$thuoctinh =  $html->find('.main-content',0);
							
							include 'student.php'
							
							if($querry){
								$students_added++;
							}
							else
								$students_exits++;
						}
						else{
							if($run>=100){
								echo $students_added." students was added.<br/>";
								echo $students_exits." students does not exist.<br/>";
								echo "stopped at ".$msv.".<br/>-----------------<br/>";
								break;
							}
							$run++;
						}
					}				
				}
			}
		}
	}
?>