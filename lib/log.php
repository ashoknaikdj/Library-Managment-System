<html>
<body>
<?php
$n=$_POST['name'];
$p=$_POST['pass'];



if($n=="JHP" && $p=="jhp@123")
{
echo"successfully admin login";
header('location:admin.html');

}
else

{
echo"invalid user account";
}


?>
</body>
</html>
