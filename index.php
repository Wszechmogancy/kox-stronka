<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>sugestie</title>
</head>

<body>
    <form method="post" action="post.php">
        <label>Name:</label>
        <input type="text" name="name">

        <label>Message:</label>
        <textarea name="message"></textarea>

        <button type="submit" name="btn">wyśli</button> 
    </form>
    <hr>
    <?php
include_once "db_conn.php";
if (!$conn) {
	echo "coś się stało i nie było mnie słychać";
	exit();
}

$sql = "SELECT * FROM wpisy;";
$res1 = mysqli_query($conn, $sql);

while($wiersz=mysqli_fetch_assoc($res1)){
    echo $wiersz['godzina']." ";
    echo $wiersz['imie'];
    echo": ";
    echo $wiersz['wiad'];
    echo "<br>";
}
?>
</body>

</html>