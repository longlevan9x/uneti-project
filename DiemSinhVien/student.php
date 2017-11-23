<?php

	//-- 1. Lấy mã sinh viên
	$masinhvien = str_replace("MSSV:", "", str_replace(" ", "", $thuoctinh->find(".ma-sinhvien",0)->plaintext));
	
	//-- 2. Lấy họ tên
	$hoten = trim(str_replace("BẢNG KẾT QUẢ HỌC TẬP ", "", trim($thuoctinh->find(".title-group",0)->plaintext)));
	
	//-- 3. Lấy trạng thái
	$trangthai = trim(str_replace("Trạng thái:","",$thuoctinh->find('tr',0)->find('td',0)->plaintext));
	
	//-- 4. Lấy giới tính
	$gioitinh = trim(str_replace("Giới tính:","",$thuoctinh->find('tr',0)->find('td',1)->plaintext));
	
	//-- 5. Lấy ngày vào trường
	$begindate = trim(str_replace("Ngày vào trường:","",$thuoctinh->find('tr',1)->find('td',0)->plaintext));
	$ngayvaotruong = substr($begindate,6,4)."-".substr($begindate,3,2)."-".substr($begindate,0,2);
	
	//-- 6. Lấy mã hồ sơ
	$mahoso = trim(str_replace("Mã hồ sơ:","",$thuoctinh->find('tr',1)->find('td',1)->plaintext));
	
	//-- 7. Lấy khóa học
	$khoahoc = trim(str_replace("Khóa:","",$thuoctinh->find('tr',2)->find('td',0)->plaintext));
	
	//-- 8. Lấy cơ sở học tập
	$coso = trim(str_replace("Cơ sở:","",$thuoctinh->find('tr',2)->find('td',1)->plaintext));
	
	//-- 9. Lấy bậc đào tạo
	$bacdaotao = trim(str_replace("Bậc đào tạo:","",$thuoctinh->find('tr',3)->find('td',0)->plaintext));
	
	//-- 10. Lấy loại hình đào tạo
	$loaihinhdaotao = trim(str_replace("Loại hình đào tạo:","",$thuoctinh->find('tr',3)->find('td',1)->plaintext));
	
	//-- 11. Lấy ngành học
	$nganh = trim(str_replace("Ngành:","",$thuoctinh->find('tr',4)->find('td',0)->plaintext));
	
	//-- 12. Lấy chuyên ngành
	$chuyennganh = trim(str_replace("Chuyên ngành:","",$thuoctinh->find('tr',4)->find('td',1)->plaintext));
	
	//-- 13. Lấy khoa
	$khoa = trim(str_replace("Khoa:","",$thuoctinh->find('tr',5)->find('td',0)->plaintext));
	
	//-- 14. Lấy tên lớp
	$lop = trim(str_replace("Lớp:","",$thuoctinh->find('tr',5)->find('td',1)->plaintext));
	
	//-- 15. Lấy chức vụ
	$chucvu = trim(str_replace("Chức vụ:","",$thuoctinh->find('tr',6)->find('td',0)->plaintext));
	
	//-- 16. Lấy công tác đoàn
	$congtacdoan = trim(str_replace("Công tác đoàn:","",$thuoctinh->find('tr',6)->find('td',1)->plaintext));
	
	//-- 17. Lấy thời gian đào tạo
	$thuoctinh2 = $thuoctinh->find('.none-grid',1);
	$thoigiandaotao = trim(str_replace("Thời gian đào tạo:","",$thuoctinh2->find('tr',2)->find('td',0)->plaintext));
	
	//-- 18. Lấy niên khóa
	$nienkhoa = trim(str_replace("Niên khóa:","",$thuoctinh2->find('tr',2)->find('td',1)->plaintext));
	
	//-- 19. Lấy thời gian học tối thiểu
	$thoigianhoctoithieu = trim(str_replace("Thời gian học tối thiểu:","",$thuoctinh2->find('tr',3)->find('td',0)->plaintext));
	
	//-- 20. Lấy thời gian học tối đa
	$thoigianhoctoida = trim(str_replace("Thời gian học tối đa:","",$thuoctinh2->find('tr',3)->find('td',1)->plaintext));
	
	//-- 21. Lấy tên CVHT
	$covanhoctap = trim(str_replace("Cố vấn học tập:","",$thuoctinh2->find('tr',5)->find('td',0)->plaintext));
	
	//-- 22. Lấy số ĐT CVHT
	$sodienthoaicuacovanhoctap = trim(str_replace(" ","",str_replace("Số ĐT:","",$thuoctinh2->find('tr',5)->find('td',1)->plaintext)));
	
	//-- 23. Lấy cảnh báo học tập
	$canhbaohoctap = trim(str_replace("Cảnh báo học tập:","",$thuoctinh2->find('tr',6)->find('td',0)->plaintext));
	
	//-- 24. Lấy tổng tín chỉ
	$tongtinchi = empty($thuoctinh->find('#ctl00_ContentPlaceHolder_ucThongTinTotNghiepTinChi1_lblTongTinChi',0))?'':trim($thuoctinh->find('#ctl00_ContentPlaceHolder_ucThongTinTotNghiepTinChi1_lblTongTinChi',0)->plaintext);
	
	//-- 25. Lấy số TC nợ
	$sotinchino = empty($thuoctinh->find('#ctl00_ContentPlaceHolder_ucThongTinTotNghiepTinChi1_lblSoTCNo',0))?'':trim(str_replace("-","",substr(trim($thuoctinh->find('#ctl00_ContentPlaceHolder_ucThongTinTotNghiepTinChi1_lblSoTCNo',0)->plaintext),0,3)));
	
	//-- 26+27+28. Lấy điểm tích lũy
	$trungbinhtichluy = empty($thuoctinh->find('#ctl00_ContentPlaceHolder_ucThongTinTotNghiepTinChi1_lblTBCTL',0))?'':str_replace(" ","",$thuoctinh->find('#ctl00_ContentPlaceHolder_ucThongTinTotNghiepTinChi1_lblTBCTL',0)->plaintext);
	$tichluy10 = strlen($trungbinhtichluy)>0?substr($trungbinhtichluy,0,4):'0';
	$tichluy04 = strlen($trungbinhtichluy)>0?substr($trungbinhtichluy,5,4):'0';
	
	//-- 29. Lấy xếp loại tốt nghiệp
	$xeploaitotnghiep = empty($thuoctinh->find('#ctl00_ContentPlaceHolder_ucThongTinTotNghiepTinChi1_lblXepLoaiTotNghiep',0))?'':trim($thuoctinh->find('#ctl00_ContentPlaceHolder_ucThongTinTotNghiepTinChi1_lblXepLoaiTotNghiep',0)->plaintext);
	
	//-- 30. Lấy thời gian
	$now = getdate(); 
    $currentTime = $now["year"].'-'. $now["mon"] . "-".$now["mday"] . " "  .$now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"]; 
	
	$querry = mysqli_query($connection,"insert into students values('".$masinhvien."','".$hoten."','".$trangthai."','".$gioitinh."','".$ngayvaotruong."','".$mahoso."','".$khoahoc."','".$coso."','".$bacdaotao."','".$loaihinhdaotao."','".$nganh."','".$chuyennganh."','".$khoa."','".$lop."','".$chucvu."','".$congtacdoan."','".$thoigiandaotao."','".$nienkhoa."','".$thoigianhoctoithieu."','".$thoigianhoctoida."','".$covanhoctap."','".$sodienthoaicuacovanhoctap."','".$canhbaohoctap."','".$tongtinchi."','".$trungbinhtichluy."',".$tichluy04.",".$tichluy10.",'".$sotinchino."','".$xeploaitotnghiep."','".$currentTime."')");

?>