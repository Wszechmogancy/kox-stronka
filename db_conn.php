<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "tak";

$conn = mysqli_connect($sname, $uname, $password, $db_name);
if (!$conn) {
	echo "coś się stało i nie było mnie słychać";
	exit();
}
?>