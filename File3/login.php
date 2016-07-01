<?php
$username="root";
$password="winteriscoming";
$servername="localhost";
$dbname="test";
$pass=$_POST['password'];
$pass=MD5('$pass');
echo $pass;
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(empty($_POST['user']) || empty($_POST['password']))
{
  echo "empty found";
  header('Location:login.html');
  die();
}
else if(isset($_POST['user']) && isset($_POST['password']))
{
    $user=$_POST["user"];
    $pass=$_POST["password"];
    $sql="SELECT * FROM checking WHERE Username='$user'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        echo "username is correct";
        $row=mysqli_fetch_assoc($result);
        if($row['Password']==$pass)
            {
                echo "password also correct";
            }
        else
            {
              echo "password wrong";
            }
  }
  else
  {
      echo "username incorect";
      header('Location:login.html');
  }
}
else
{
echo "not set";
header('Location:login.html');
}
?>
