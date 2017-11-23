<?php
	$congnosinhvien = file_get_html("http://daotao.uneti.edu.vn/CongNoSinhVien.aspx?MSSV=".$msv);
	foreach ($congnosinhvien->find('tr') as $e) {
		$src1 = trim($e->class);
		if(empty($src1) == false)
		$e->class = '';
	}
	foreach ($congnosinhvien->find('td') as $e) {
		$src = trim($e->style);
		if(empty($src) == false)
		$e->style = '';
		$src1 = trim($e->class);
		if(empty($src1) == false)
		$e->class = '';
	}
	foreach ($congnosinhvien->find('th') as $e) {
		$src = trim($e->style);
		if(empty($src) == false)
		$e->style = '';
		$src1 = trim($e->class);
		if(empty($src1) == false)
		$e->class = '';
	}
	$congnosinhvien ->load($congnosinhvien ->save());
	$congno = empty($congnosinhvien->find('#tblDetail',0))?'':addslashes($congnosinhvien->find('#tblDetail',0)->outertext);
?>