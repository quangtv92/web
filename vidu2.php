<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thông tin sinh viên</title>
</head>
<form method="get" action="" name="frmTTSV">
	<table align="center" style="background-color: darkgray">
		<tr>
			<th colspan="2">THÔNG TIN SINH VIÊN</th>
		</tr>
		<tr>
			<td>Mã sv</td>
			<td>
				<input type="text" name="txtMS">
			</td>
		</tr>
		<tr>
			<td>Tên sv</td>
			<td> 
				<input type="text" name="txtTen">
			</td>
		</tr>
		<tr>
			<td>Lớp: </td>
			<td> 
				<select style="width: 80px" name="sltLop">
					<option>ƯDPM</option>
					<option>QTM</option>
					<option selected>LTMT1</option>
					<option>LTMT2</option>
					<option>TKĐH</option>
					<option>THVP</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Giới tính:</td>
			<td>
				<input type="radio" name="rdGT" value="nam">Nam
				<input type="radio" name="rdGT" value="nữ">Nữ
			</td>
		</tr>
		<tr>
			<td  align="center">
				<input type="submit" name="btnOK" value="Lưu trữ">
			</td>
			<td  align="center">
				<input type="submit" name="btnXem" value="Xem danh sách sv">
			</td>
		</tr>
	</table>
</form>

<?php
if(isset($_GET['btnOK']))
{
	$tenfile="thongtinSV.txt";
	$noidung=
		"<br>Mã sv: ".$_GET['txtMS'].
		" Họ tên: ".$_GET['txtTen'].
		" Lớp: ".$_GET['sltLop'].
		" Giới tính: ".$_GET['rdGT'];
	
	$fp=fopen("$tenfile",'a');
		fwrite($fp,$noidung);
	
}
	if(isset($_GET['btnXem']))
{
	$fp1=fopen("thongtinSV.txt",'r');
		while(!feof($fp1))
		{
			echo fgets($fp1);
		}
	fclose($fp1);
	}
	?>
<body>
</body>
</html>