<?php

/* 
 * A project of CuongDCDev@gmail.com
 */

//http://www.daotao.uneti.edu.vn/XemLichThi.aspx?MSSV=14103100038

require_once(__DIR__ . "/vendor/autoload.php");
require_once( __DIR__ . "/inc/lichthicrawler.php" );
//
$msv = $_GET['MSSV'];
//$xemLichThiButton = "Xem lịch thi";

$xemLichThi = new LichThiCrawler( $msv  );
$lichThi = $xemLichThi->getLichThiHtml(/*"1 (2017 - 2018)"*/);
//
echo $lichThi != false ? $lichThi : "Không có lịch thi";
?>