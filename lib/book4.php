<?php


$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "lib";


$ano=$_POST['usnno'];
$name=$_POST['aname'];
$atype=$_POST['gen'];
$abal=$_POST['year'];

$ba=$_POST['bno'];
$boa=$_POST['boname'];
$booa=$_POST['boauthor'];
$a=$_POST['dob'];

$conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
else
{




   $sql = "insert into bookissue2 values('$ano','$name','$atype','$abal','$ba','$boa','$booa','$a')";
   $result = $conn->query($sql);


echo"<br><h1> <font color=blue>Register succesfully...............</h1>";

}





?>
