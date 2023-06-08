<html>
<head>


<body>
<form method="post" action="bookdel2.php">

<center> <h4><font color=black>MANGALA JYOTHI VIDYASAMSTHE(R)</h4>
<h3><font color=green>J H PATEL INSITUTE OF MANAGEMENT AND TECHNOLOGY DAVNAGERE.</h3>
<hr>
<table border=0 width=500 height=50>
<tr>
<td><marquee><font color=brown><h2>STUDENT AND BOOK DETAILS</marquee> </h2>
</td></tr>
</table>
<?php

$a=$_POST['usnno'];
$an=$_POST['bno'];


$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "lib";


$conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);


$sql ="select * from bookissue2 where usn='$a' and bid='$an'";
$result= $conn->query($sql);

   

if($result->num_rows>0)
{
	$row=$result->fetch_assoc();
	
?>
<center><table border=0  width=500>

<tr  height=50>

<td  ><font color=red><b>Enter USN: </td>
<td><input type="text" name="usnno" readonly  value ="<?php echo $row['usn'];?>"></td>
</tr>


<tr  height=50>

<td  >Enter Name:</td>
 <td><input type="text" name="aname"   readonly value ="<?php echo $row['name'];?>"></td>
</tr>

<tr  height=50>
<td  >
Enter GENDER:</td>
 <td><input type="text" name="gen"   readonly value ="<?php echo $row['gender'];?>"></td>
</tr>
<tr  height=50>
<td  >Enter Year: </td>
<td><input type="text" name="year"   readonly value ="<?php echo $row['year'];?>"></td>
</tr>
<tr  height=50>
<td  >
<font color=red><b>BOOK NO: </td>
<td><input type="text" name="bno" readonly  value ="<?php echo $row['bid'];?>"></td>
</tr>

<tr  height=50>
<td  >BOOK Name:</td>
 <td><input type="text" name="boname"   readonly value ="<?php echo $row['bname'];?>"></td>
</tr>


<tr  height=50>
<td  >
BOOK Author: </td>
<td><input type="text" name="boauthor"   readonly value ="<?php echo $row['bauthor'];?>"></td>
</tr>

<tr  height=50>
<td  >
BOOK ISSUE DATE:</td>
<td><input type="text"   name="dbo"  readonly value ="<?php echo $row['date'];?>"></td>
</tr>


<tr  height=50>
<td  >
BOOK RETURN DATE:</td>
<td><input type="date"   name="dob"  ></td>
</tr>

<table border=0  width=300>
<tr  height=50>
<td  width=300>
<b><h2><input type="submit"  value ="RETURN BOOK"></b></h2></td>
</tr>
</center></table>





<?php


}

else
{

 echo "<br> not found";
}
	

?>

