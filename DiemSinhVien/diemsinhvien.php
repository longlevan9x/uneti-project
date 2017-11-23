<?php
	$xemdiem = file_get_html("http://daotao.uneti.edu.vn/XemDiem.aspx?MSSV=".$msv);
	foreach ($xemdiem->find('tr') as $e) {
		$src = trim($e->style);
		if(empty($src) == false)
		$e->style = '';
		$src1 = trim($e->class);
		if(empty($src1) == false)
		$e->class = '';
	}
	foreach ($xemdiem->find('#GridView1') as $e) {
		$src = trim($e->style);
		if(empty($src) == false)
		$e->style = '';
		$src1 = trim($e->class);
		if(empty($src1) == false)
		$e->class = '';
	}
	foreach ($xemdiem->find('td') as $e) {
		$src = trim($e->style);
		if(empty($src) == false)
		$e->style = '';
		$src1 = trim($e->class);
		if(empty($src1) == false)
		$e->class = '';
	}
	$xemdiem ->load($xemdiem ->save());
	$diemsinhvien = empty($xemdiem->find('#GridView1',0))?'':addslashes($xemdiem->find('#GridView1',0)->outertext);
	$diemsinhvien = str_replace('Đánh giá môn học để xem điểm','Môn học chưa được đánh giá',$diemsinhvien);
?>