<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>test Class</title>
</head>

<body>
<?php
abstract class phpClass{
	private $s="Xin chao.";
	public function setS($str){
		if(!$str)
		{ echo("Gan chuoi rong.");}
		else
		$this->s=$str;
	}
	public function getS()
	{
		return $this->s;
	}
	function phpClass()
	{
		echo $this->s;
	}
	function __construct()
	{
		echo "This is constructor with __construct.<br> ";
	}
	abstract  protected function shwvalue();
	
}
?>
<?php
	class newClass extends phpClass
	{
		private  $k="this is newClass.<br>";
		public function __construct()
		{
			echo $this->k;
		}
		public function shwvalue()
		{
			echo( $this->getS());
		}
	}
	?>
<?php
/*	$obj=new phpClass();
	$obj->shwvalue();
	
	$obj->getS();
	$obj->shwvalue();
	*/
	
	$objnew=new newClass();
	$objnew->setS("Thanh Hương.");
	echo $objnew->getS();
	$objnew->shwvalue();
	?>
</body>
</html>