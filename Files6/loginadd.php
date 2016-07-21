<?php
$user=$_POST['user'];
$pass=md5($_POST['password']);
$password=$_POST['password'];
$username="root";
$password="winteriscoming";
$servername="localhost";
$dbname="test";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$sql="INSERT INTO checking(Username,Password) values('$user','$pass')";
if(mysqli_query($conn,$sql))
{
	echo("new record created succesfully");
}
	else
	{
		echo "error: ".$sql."<br>".mysqli_error($conn);
	}
?>
