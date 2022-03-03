<?php
if (isset($_POST['name']) && isset($_POST['message'])) {
	include 'db_conn.php';

	function validate($data){
        $data = trim($data);
  		$data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	}
$godzina = date("Y-m-d H:i:s");
	$name = validate($_POST['name']);
	$message = validate($_POST['message']);

	if (empty($message) || empty($name)) {
		header("Location: index.html");
	}else {

		$sql = "INSERT INTO `wpisy`(`id`,`godzina`,`imie`, `wiad`) VALUES (null,'$godzina','$name', '$message')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo ("twoj awiadomość została wysłana pomyślnie");
            header("Location: index.php");
		}else {
			echo ("twoja wiadomość nie mogła byc wysłana");
		}
	}

}else {
	header("Location: index.php");
}
// sleep(5);
// header("location: select.php")
?>