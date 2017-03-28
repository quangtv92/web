<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>test site</title>
</head>

<body>

<form action="" method="get" name="form1">
	<table align="center" style="background-color: burlywood">
		<tr >
			<th colspan="2">TẠO - GHI - ĐỌC FILE</th>;
		</tr>
		<tr>
			<td>Tên file:</td>
			<td>
				<input type="text" name="txtName">
			</td>
		</tr>
		<tr>
			<td>Nội dung file:</td>
			<td>
				<textarea name="txtaND"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="Ghi-Đọc file" name="btnOK"> 
			</td>
		
		</tr>
	</table>
</form>
<?php
if(isset($_GET['btnOK']))
{
	$tenfile=$_GET['txtName'];
	$noidung=$_GET['txtaND'];
	$fp=fopen("$tenfile",'w');
		fwrite($fp,$noidung);
	$fp1=fopen("$tenfile",'r');
		while(!feof($fp1))
		{
			echo fgets($fp1);
		}
	fclose($fp1);
}
	
	
	?>
</body>
</html>