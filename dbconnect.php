<!doctype html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="css/style.css">
<meta charset="utf-8">
<title>index</title>
</head>

<body>
	<?php
		echo "Hello";
		$conn = mysqli_connect("localhost","root","","learningsql");
	if(!$conn)
		{echo "Lỗi kết nối";}
	else { echo "connected to db";}
	
		mysqli_set_charset($conn,"utf8");
		$sql="select * from EMPLOYEE";
		$resuilt = mysqli_query($conn,$sql);
	if(mysqli_num_rows($resuilt)>0)
		{
			while($row=mysqli_fetch_array($resuilt))
			{
				echo $row[0]." ".$row[2]." {$row[3]}  <br>";
			}
		}
	else echo("Bảng không có giá trị.");
	?>
</body>
</html>