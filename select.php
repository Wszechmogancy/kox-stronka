<?php
include_once "db_conn.php";
if (!$conn) {
	echo "coś się stało i nie było mnie słychać";
	exit();
}

$sql = "SELECT * FROM `test` WHERE 1   ";
$res1 = mysqli_query($conn, $sql);

if($res1){
    while($wiersz=mysqli_fetch_assoc($res1)){
        echo $wiersz['imie'];
        echo": ";
        echo $wiersz['wiad'];
        echo "<br>";
    }
}
?>