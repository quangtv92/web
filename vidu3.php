<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<form action="" method="get" name="form3">

	
	<table align="center">
		<tr>
			<th colspan="2">Tính tổng</th>
		</tr>
		<tr>
			<td>Nhập dãy số</td>
			<td>
				<input type="text" name="txtM">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				<input type="submit" value="Tính tổng" name="btnTT">
			</td>
		</tr>
		
<?php
	if(isset($_GET['btnTT']))
	{
		$dayso=$_GET['txtM'];
		$a=explode(",",$dayso);
		$tong=0;
		foreach($a as $x)
		{
			$tong+=$x;
		}

	}
	?>
		<tr>
			<td>Kết quả: </td>
			<td>
			
				<input type="text" name="txtKQ" 
				value="<?php if(isset($_GET['btnTT'])) echo $tong; ?>">
			</td>
		</tr>
		
	</table>
</form>

<body>
</body>
</html>