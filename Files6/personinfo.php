<html>
  <head>
    <title>Person Info</title>
  </head>
  <body>
    <img src="<?php
    session_start();
    $username="root";
    $password="winteriscoming";
    $servername="localhost";
    $dbname="test";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    echo $_SESSION['usern'].'.jpg';
    ?>"
    width="320"
    height="240"
    />
    <video controls="controls" width="320" height="240">
      <source src="<?php
    $username="root";
    $password="winteriscoming";
    $servername="localhost";
    $dbname="test";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    echo $_SESSION['usern'].'.mp4';
    ?>"
    type="video/mp4"
    />
    </video>
  </body>
</html>
