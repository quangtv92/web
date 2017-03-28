<!doctype html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="css/style.css">
<meta charset="utf-8">
<title>index</title>
</head>

<body>
 <?php 
	function homnay(){
		$now=getdate();
		return "{$now['year']}/{$now['mon']}/{$now['mday']}";
	};
	
	function shwdate($d)
	{
		$date=date_create($d);
		return date_format($date,"l:d/m/Y");
	}
	
?> 

<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "learningsql";
	
// Create connection
$conn = mysqli_connect("localhost","root","",$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_error());
} 
	else
	{
		mysqli_set_charset($conn,"utf8");
		$sql="select * from EMPLOYEE";
		
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			echo "<div style='font-weight: bold' class=\"idx\">ID: </div> <div style='font-weight: bold' class='namex'>Name:</div> <div style='font-weight: bold' class='startdate'>Start_date </div> <br>";
			while($row=mysqli_fetch_array($result))
			{
				echo "<div class='idx'>{$row[0]} </div> <div class='namex'>{$row["FIRST_NAME"]} {$row['LAST_NAME']} </div> <div class='startdate'>".shwdate($row['START_DATE']) . "</div> <br>";
			
			}
		}
		else {
			echo "0 results";
		}
		
		//sqli_query insert
		$time=homnay();
		echo $time."<br>";
		/*
		$sql="insert into EMPLOYEE
			values (20,'',N'Trịnh Văn',N'Quang',$time,N'Sinh viên', 2,1,2)
			";
		
		if(mysqli_query($conn,$sql)) echo "New record create successfully.";
		else { echo "Lỗi ".$sql."<br>".mysqli_error($conn); }
		*/
		
		//SQLi update
		$sql="update employee 
				SET START_DATE='$time', FIRST_NAME=N'Nguyễn Thị', LAST_NAME=N'Định'
		where emp_id=19";
		if(mysqli_query($conn,$sql)) 
			echo "update successfully.";
		else echo("Lỗi ".$sql."<br>".mysqli_error($conn));
			
	}
	/*
	$sql=" CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
	if(mysqli_query($conn,$sql)) echo "Created table MyGuests.";
	else echo("Cant create table.");
	*/
	$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	
	mysqli_close($conn);
?>
</body>
</html>