<?php

if(isset($_POST['login-submit'])) {

	require '../../includes/databasehandler.inc.php';

	$emailuid = $_POST['login-uid'];
	$password = $_POST['login-pwd'];

	// Grab (hashed)password from user
	$stmt = $connection->prepare("SELECT password FROM admins WHERE username=:username OR email=:email");
	$stmt->execute(array(
		':username' => $emailuid,
		':email' => $emailuid
	));
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
		// Error out if a wrong password or username is given
		header('Location: ../index.php');
		exit();

	}
}