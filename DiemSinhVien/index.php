<!DOCTYPE html>
<!-- made by Verdant - ViVuProductions - 0969 80 20 50 - vinhld.it@gmail.com-->
<html>
	<head>
		<title>TRA CỨU THÔNG TIN SINH VIÊN</title>
		<link rel="mask-icon" href="favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
		<script type='text/javascript' src='js/jquery-3.2.1.min.js'></script>
	</head>
	
<script type='text/javascript'>
	$(document).ready(function (){
		$('#inputSearchButton2').click(function () {
			var keySearch = $('#inputSearchText2').val();
			if(keySearch != ''){
				search(keySearch);
			}
			else
				alert('Key is empty');
			return false;
		});
	});
</script>

	<body>

		<div id='searchhead'>
			<div>
				<img src='./images/logo.png' height='50px' />
			</div>
			<div id='search2'>
				<form id='searchForm' action='' method='post'>
					<input id="inputSearchText2" autofocus="autofocus" class='searchText' type="search" placeholder="Nhập mã sinh viên, mã lớp hoặc họ tên..."/>
					<button type="submit" class="buttonSearch" id="inputSearchButton2"><i id='iconSearch2' class="fa fa-search"></i></button>
				</form>
			</div>
		</div>
				
		<?php
			include 'header.html';
			include 'main.html';
			include 'footer.html';
		?>
<div id='numCount'></div>
<div id='answer'></div>
		<br/><br/><br/>
	</body>
</html>