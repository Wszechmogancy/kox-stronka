<?php
if (isset($_POST['name']) && isset($_POST['message'])) {
	include 'db_conn.php';

	function validate($data){
        $data = trim($data);
  		$data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	}

	$name = validate($_POST['name']);
	$message = validate($_POST['message']);

	if (empty($message) || empty($name)) {
		header("Location: index.html");
	}else {

		$sql = "INSERT INTO `test`(`imie`, `wiad`) VALUES ('$name', '$message')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo ("twoj awiadomość została wysłana pomyślnie");
            echo '<script src="script.js"></script>';
		}else {
			echo ("twoja wiadomość nie mogła byc wysłana");
		}
	}

}else {
	header("Location: index.html");
}
sleep(5);
header("location: select.php")
?>