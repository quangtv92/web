<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>kết nối csdl</title>
</head>

<body>
<?php
	echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Mã sv</th><th>Họ tên</th><th>Năm sinh</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
} 
	$dsn="mysql:host=localhost;dbname=test";
	$username="root";
	$password="";
	try
	{
		$conn=new PDO($dsn, $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conn->exec("SET NAMES 'utf8'");
		echo("Connected to server.");
	}
	catch(PDOException $e)
	{echo "Connection failed: " . $e->getMessage();}
	//Kết nối csd
	
	//select
	//cách 1:
	$query="select * from tbltest";
	$ketqua= $conn->query($query);
	//Cách 2:
	$ketqua1 = $conn->prepare("select * from tbltest order by tbltest.mssv");
    $ketqua1->execute();
	
	 // set the resulting array to associative
  	//$ketqua->setFetchMode(PDO::FETCH_ASSOC);
	//$result = $ketqua->fetchAll();
	$ketqua1->setFetchMode(PDO::FETCH_ASSOC);
	$result = $ketqua1->fetchAll();
	//asort($result);
	$kq=new TableRows(new RecursiveArrayIterator($result));
	foreach($kq as $k=>$v) {
        echo $v;
		}
	
echo "</table>";
	//delete use exec() because no results are returned
	$query="delete from tbltest where mssv='sv7' or mssv='sv8'";
	$conn->exec($query);
	//insret use exec() because no results are returned
	$query="insert into tbltest (mssv,name,ns) values ('sv7',N'Hoàng Thị Giang',''),('sv8',N'Tạ Thị Tâm','1994-4-3')";
	$conn->exec($query);
	

//	ngat ket noi
	$conn = null;
?>
</body>
</html>