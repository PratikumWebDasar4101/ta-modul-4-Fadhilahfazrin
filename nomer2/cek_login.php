<?php 
session_start();
$data = array(
			"nama" => "Fadhilah Fazrin",
			"username" => "sayang",
			"password" => 6789,
			"no_hp" => "082667999551"
		);

if ($data["username"] == $_POST["username"] && $data["password"] == $_POST["password"]) {
	$_SESSION["username"] = $data["username"];
	$_SESSION["data"] = $data;
	header("Location: form.php");
} else {
	header("Location: login.php");
}

?>
