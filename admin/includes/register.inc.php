<?php
// TODO: Secure passwords
// TODO: Secure SQL Injection attacks

require 'databasehandler.inc.php';
if(isset($_POST['register-submit'])) {

	$username 		= 	$_POST['uid'];
	$email 			= 	$_POST['email'];
	$password 		= 	$_POST['pwd'];
	$passwordRepeat = 	$_POST['pwd-repeat'];

	//No input given
	if($username == '' || $email == '' || $password == '' || $passwordRepeat == ''){
		header("Location: ../register.php?error=emptyfields&uid=".$username."&email=".$email);
		exit();

	// Invalid UID & Email
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../register.php?error=invalidemailuid");
		exit();

	// Invalid Email
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../register.php?error=invalidemail&uid=".$username);
		exit();

	// Invalid Username
	} else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../register.php?error=invaliduid&email=".$email);
		exit();

	// Invalid Password Check
	} else if ($password !== $passwordRepeat) {
		header("Location: ../register.php?error=passwordcheck&uid=".$username."&email=".$email);
		exit();

	} else {
		// start insert into database

		try {
			$stmt = $connection->prepare('INSERT INTO adminusers (username, email, pwd) VALUES (:username, :email, :pwd)');
			$stmt->execute(array(
				':username' => $username,
				':email' => $email,
				':pwd' => $password
			));

			// Send user to login
			header("Location: ../login.php?=success");
			exit();

		} catch(PDOException $e){
			// Catch any errors that come up during insert
			echo $e->getMessage();

		}
	}
}