<?php
$host = "localhost";
$user = "root";
$pass = "";
$db="college";
$a=$_POST['f1'];
$b=$_POST['f2'];
$conn=new mysqli($host,$user,$pass,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
$q1="select fname,fpass from faculty;";
$result=$conn->query($q1);
if($result->num_rows >0)
{
while($row = $result->fetch_assoc())
{
	
if($a==$row["fname"] and $b==$row["fpass"])
	{
		header('Location:http://localhost/college/fall.html');
	}
}
}

else 
 echo "failed";

$conn->close();
?>