<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<?php
	$s=array();
	for($i=0;$i<12;$i++)
	{
		if(($i+1)==2)
			{
				$s[$i]="29 ngày";
			}
		elseif($i+1==4||$i+1==6||$i+1==9||$i+1==11)
		{
			
				$s[$i]="31 ngày";
		}
		else
			$s[$i]="30 ngày";
		}
	echo "<table border=\"1\" cellspacing=\"0\" cellpadding=\"0\" >";
	echo "<tr>
			<th width=\"60px\">Tháng</th>
			<th width=\"200px\" > Số ngày </th>
		</tr>";
	//Duyet mang va hien thi ra bang
	foreach($s as $key=>$value)
	{
		$t=($key+1);
	echo "<tr>".
				"<td align=\"center\" >".$t." </td>".
				"<td >". $value."</td>".
			"</tr>";	
	}

		
	
	echo "</table>";
	?>
<body>
</body>
</html>