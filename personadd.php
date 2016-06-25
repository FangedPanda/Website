<?php
$id=$_POST["id"];
$name=$_POST["name"];
$occu=$_POST["occupation"];
$addr=$_POST["address"];
$contacts=$_POST["contacts"];
$nation=$_POST["nationality"];
$account=$_POST["account"];
$qual=$_POST["qualification"];
$spec=$_POST["speciality"];
$keyw=$_POST["keywords"];
$username="root";
$password="winteriscoming";
$servername="localhost";
$dbname="test";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$sql="INSERT INTO Person(id,name,occupation,address,contacts,nationality,account,qualification,speciality,keywords) values('$id','$name','$occu','$addr','$contacts','$nation','$account','$qual','$spec','$keyw')";
if(mysqli_query($conn,$sql))
{
	echo("new record created succesfully");
}
	else
	{
		echo "error: ".$sql."<br>".mysqli_error($conn);
	}
?>
