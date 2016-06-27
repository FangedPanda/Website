<?php
$id=$_POST["id"];
$username="root";
$password="winteriscoming";
$servername="localhost";
$dbname="test";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$sql="DELETE FROM Person WHERE id='$id'";
if(mysqli_query($conn,$sql))
{
	echo "new record deleted succesfully";
}
	else
	{
		echo "error: ".$sql."<br>".mysqli_error($conn);
	}
?>
