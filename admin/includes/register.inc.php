<?php
//======================================================================
// Patrick Roelofs | 584025 | 16/01/2020
//======================================================================
?>
<?php
require '../../includes/dbh.inc.php';

if(isset($_POST['register-submit'])) {

	$username 		= 	$_POST['uid'];
	$email 			= 	$_POST['email'];
	$password 		= 	$_POST['pwd'];
	$passwordRepeat = 	$_POST['pwd-repeat'];

	//No input given
	if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
		header("Location: ../register.php?message=warning&username=$username&email=$email");
		exit();

	// Invalid UID & Email
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../register.php?message=warning");
		exit();

	// Invalid Email
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../register.php?message=warning");
		exit();

	// Invalid Username
	} else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../register.php?message=warning&email=$email");
		exit();

	// Invalid Password Check
	} else if ($password !== $passwordRepeat) {
		header("Location: ../register.php?message=warning&username=$username&email=$email");
		exit();

	} else {
		// start insert into database

		try {
			$stmt = $connection->prepare('INSERT INTO admins (username, email, password) VALUES (:username, :email, :password)');
			$stmt->execute(array(
				':username' => $username,
				':email' => $email,
				':password' => password_hash($password, PASSWORD_DEFAULT)
			));

			// Send user to login
			header("Location: ../index.php");
			exit();

		} catch(PDOException $e){
			// Catch any errors that come up during insert
			echo $e->getMessage();

		}
	}
}

if(isset($_POST['edituser'])) {

    $username 		= 	$_POST['uid'];
    $email 			= 	$_POST['email'];
    $password 		= 	$_POST['pwd'];
    $passwordRepeat = 	$_POST['pwd-repeat'];

    //No input given
    if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
        header("Location: ../register.php?message=warning&username=$username&email=$email");
        exit();

        // Invalid UID & Email
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../register.php?message=warning");
        exit();

        // Invalid Email
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../register.php?message=warning");
        exit();

        // Invalid Username
    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../register.php?message=warning&email=$email");
        exit();

        // Invalid Password Check
    } else if ($password !== $passwordRepeat) {
        header("Location: ../register.php?message=warning&username=$username&email=$email");
        exit();

    } else {
        // start insert into database
        session_start();

        try {
            $stmt = $connection->prepare("UPDATE admins SET username = :username, email = :email, password = :password WHERE email = :userid OR username = :userid");

            $stmt->execute(array(
                ':username' => $username,
                ':email' => $email,
                ':password' => password_hash($password, PASSWORD_DEFAULT),
                ':userid' => $_SESSION['uid']
            ));

            // Send user to login
            header("Location: ../index.php");
            exit();

        } catch(PDOException $e){
            // Catch any errors that come up during insert
            echo $e->getMessage();

        }
    }
}