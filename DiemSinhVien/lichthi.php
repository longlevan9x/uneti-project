<?php
	$xemlichthi = file_get_html("http://localhost/DiemSinhVien/lichthi/scan.php?MSSV=".$msv);
	foreach ($xemlichthi->find('th') as $e) {
		$src = trim($e->style);
		if(empty($src) == false)
			$e->style = '';
	}
	$xemlichthi ->load($xemlichthi ->save());
	$lichthi = empty($xemlichthi->find('table',0))?'':addslashes($xemlichthi->find('table',0)->outertext);
?>