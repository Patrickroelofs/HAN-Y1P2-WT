<?php


if(isset($_POST['login-submit'])) {

	require 'databasehandler.inc.php';

	$emailuid = $_POST['login-uid'];
	$password = $_POST['login-pwd'];

	$stmt = $connection->prepare("SELECT pwd FROM adminusers WHERE username ='$emailuid' OR email ='$emailuid'");
	$stmt->execute();
	$result = $stmt->fetch(PDO::FETCH_COLUMN);

	if(empty($emailuid) || empty($password)) {
		header("Location: ../index.php?error=emptyfields");
		exit();

	} else if(password_verify($password, $result)) {
		// Verify password by checking the hashes and login the user

		session_start();
		$_SESSION['uid'] = $emailuid;

		header('Location: ../home.php?=success');
		exit();

	} else {
		// Error out if a wrong password is given
		header('Location: ../index.php');
		exit();

	}
}