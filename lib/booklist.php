<html>
<body>

<center><h2> <Font color=red>AVALIABLE BOOKS<hr></hr>

<table border=2>
<tr><td>
BOOKID </td>
<td>BOOK NAME</td>
<td>BOOK AUTHOR</td>


</tr>



<?php

$con=mysql_connect("localhost","root","");
mysql_select_db("lib",$con);


$q="select * from book";
$rs=mysql_query($q);


while($row=mysql_fetch_array($rs))
{
	echo "<tr><td>".$row['bid']."</td><td>".$row['bookname']."</td><td>".$row['bookauthor']."</td></tr>";
}

?>

</table>

</body>
</html>