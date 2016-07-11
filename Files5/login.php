<?php
$username="root";
$password="winteriscoming";
$servername="localhost";
$dbname="test";
$pass=md5($_POST["password"]);
echo $pass;
session_start();
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
    $sql="SELECT * FROM checking WHERE Username='$user'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        echo "username is correct";
        $row=mysqli_fetch_assoc($result);
        if($pass==$row['Password'])
            {
                echo "password also correct";
                $_SESSION["usern"]=$_POST['user'];
                echo $_SESSION["usern"];
                if($_POST['user']==admin)
                  header('Location:choice.html');
                else
                  header('Location:personinfo.html');  
            }
        else
            {
              echo $row['Password'];
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
