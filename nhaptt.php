<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Giải pt bậc 2</title>
</head>
<body>
 
<?php
$s=array("a"=>"Anh",'y'=>"yêu",'e'=>"Em");
	foreach($s as $k=>$x){
		echo "$k &nbsp  $x <br>";
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

