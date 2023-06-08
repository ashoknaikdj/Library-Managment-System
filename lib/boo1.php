<html>
<head>
<body>
<center><h4><font color=black>MANGALA JYOTHI VIDYASAMSTHE(R)</h4>
<h3><font color=red>J H PATEL INSTITUTE OF MANAGEMENT AND TECHNOLOGY DAVNAGERE.</h3> 



<?php


$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "lib";


$ano=$_POST['bid'];
$name=$_POST['bname'];
$atype=$_POST['bauthor'];





$conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
else
{




   $sql = "insert into book values('$ano','$name','$atype')";
   $result = $conn->query($sql);


echo"<br><h1> <font color=blue>STUDENT RECORD INSERT succesfully...............</h1>";

}





?>
</center>
</body></html>