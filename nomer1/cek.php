<?php 
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "sayang" && $password =="1234"){
	$_SESSION["username"] = $username;
	header("Location: form.php");
}else{
	header("Location: login.php");
}
?>