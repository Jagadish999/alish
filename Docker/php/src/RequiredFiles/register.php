<?php

    require '../databaseCon/dbConn.php';

if(isset($_POST['submitReg'])){

	$name = $_POST['fullname'];
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$sqlCreateTable = "CREATE TABLE IF NOT EXISTS users(
		fullname VARCHAR(255) NOT NULL,
		email VARCHAR(255) NOT NULL,
		password VARCHAR(255) NOT NULL,
		PRIMARY KEY (email)
		)";

	$sqlInsertIntoTable = "INSERT INTO users(fullname, email, password) 
							   VALUES('$name', '$email', '$pass')";

    $pdo->query($sqlCreateTable);
    $pdo->query($sqlInsertIntoTable);

    $portInfo = $_SERVER["HTTP_HOST"];
    $pageToMove = "http://".$portInfo . "/index.php?activityReq=login";

    header("Location: " . $pageToMove);
}
?>