<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Giải pt bậc 2</title>
</head>
<body>

<?php
function tdelta($a,$b,$c)
	{
		$dt=(double)($b*$b-4*$a*$c)/(2*$a);
		return $dt;
	}
$a=0;
$b=0;
$c=0;
$ketqua="";
$delta=0;
$x1=0;
$x2=0;
if(isset($_POST["btnGiai"]))
{
$a=$_POST['txta'];
$b=$_POST['txtb'];
$c=$_POST['txtc'];
if($a==0)
{
	if($b==0)
	{
		if($c==0)
			$ketqua="PT có vô số nghiệm.";
		else $ketqua="PT vô nghiệm";
	}
	else $ketqua="PT có nghiệm x=".round((-$c/$b),4);
}
else 
{
	$delta=tdelta($a,$b,$c);
	if($delta<0)
		$ketqua = "Phương trình vô nghiệm.";
	else
	{
		if($delta==0)
			$ketqua= "Phương trình có nghiệm duy nhất.".round(-$b/(2*$a),2);
		else
		{
			$x1=round((-$b+sqrt($delta))/(2*$a),2);
			$x2=round((-$b-sqrt($delta))/(2*$a),2);
			$ketqua = "PT có 2 nghiệm: ";
		}
	}
}
	
}


?>

<form action="" method="post" name="gptb2">

<div style="margin-left:auto;margin-right:auto;width:510px; height:240px;background:#33f3f3;color:#f0f; border:1px solid #FFF">
<div style="height:30px;text-align:center;padding-top:8px; font-size: 30px">Giải PT bậc 2</div>
<div style="height:30px;padding-left:10px">Nhập hệ số a :<input type="text" name="txta" value="" size="50"/></div>
<div style="height:30px;padding-left:10px">Nhập hệ số b :<input type="text" name="txtb" value=""
size="50"/></div>
<div style="height:30px;padding-left:10px">Nhập hệ số c :<input type="text" name="txtc" value=""
size="50"/> </div>
<div style="height:50px;padding-left:10px">Nghiệm của pt :
 <b style="color: red"><?php if(isset($_POST['btnGiai']))
	echo ("x1=  $x1 x2= $x2");?></b>
<input type="submit" name="btnGiai" value="Giải PT" /><input type="submit" name="btnRS" value="Reset" />
	</div>
 </div>
</div>
</form>
</body>
</html>

