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


$ano=$_POST['usnno'];
$name=$_POST['aname'];
$atype=$_POST['gen'];
$abal=$_POST['year'];




$conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
else
{




   $sql = "insert into stu1 values('$ano','$name','$atype','$abal')";
   $result = $conn->query($sql);


echo"<br><h1> <font color=blue>STUDENT RECORD INSERT succesfully...............</h1>";

}





?>
</center>
</body></html>