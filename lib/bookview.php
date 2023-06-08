<html>
<body>

<center><h2> <Font color=red>  ISSUED BOOKS<hr></hr>

<table border=2>
<tr><td>
USN </td>
<td>NAME </td>
<td>GENDER</td>
<td>YEAR</td>
<td>BOOKID</td>
<td>BOOKNAME</td>
<td>BOOKAUTHOR</td>
<td>DATE</td>


</tr>



<?php

$con=mysql_connect("localhost","root","");
mysql_select_db("lib",$con);


$q="select * from bookissue2";
$rs=mysql_query($q);


while($row=mysql_fetch_array($rs))
{
	echo "<tr><td>".$row['usn']."</td><td>".$row['name']."</td><td>".$row['gender']."</td><td>".$row['year']."</td><td>".$row['bid']."</td><td>".$row['bname']."</td><td>".$row['bauthor']."</td><td>".$row['date']."</td></tr>";
}

?>

</table>

</body>
</html>