<?php
	$xemlichhoc = file_get_html("http://daotao.uneti.edu.vn/xemlichhoc.aspx?MSSV=".$msv);
	foreach ($xemlichhoc->find('tr') as $e) {
		$src = trim($e->style);
		if(empty($src) == false)
		$e->style = '';
		$src1 = trim($e->class);
		if(empty($src1) == false)
		$e->class = '';
	}
	foreach ($xemlichhoc->find('#detailTbl') as $e) {
		$src = trim($e->style);
		if(empty($src) == false)
		$e->style = '';
		$src1 = trim($e->class);
		if(empty($src1) == false)
		$e->class = '';
	}
	foreach ($xemlichhoc->find('.table-lich_hoc') as $e) {
		$src = trim($e->style);
		if(empty($src) == false)
		$e->style = '';
		$src1 = trim($e->class);
		if(empty($src1) == false)
		$e->class = 'tbl';
	}
	foreach ($xemlichhoc->find('td') as $e) {
		$src = trim($e->style);
		if(empty($src) == false)
		$e->style = '';
		$src1 = trim($e->class);
		if(empty($src1) == false)
		$e->class = '';
	}
	foreach ($xemlichhoc->find('th') as $e) {
		$src = trim($e->style);
		if(empty($src) == false)
		$e->style = '';
		$src1 = trim($e->class);
		if(empty($src1) == false)
		$e->class = '';
	}
	$xemlichhoc ->load($xemlichhoc ->save());
	$lichhoc = empty($xemlichhoc->find('#detailTbl',0))?'':addslashes($xemlichhoc->find('#detailTbl',0)->outertext);
?>