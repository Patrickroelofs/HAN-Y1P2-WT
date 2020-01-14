<?php
//======================================================================
// Patrick Roelofs | 584025
//======================================================================
?>
<?php

session_start();
$accountExists = false;

if (isset($_SESSION['uid'])) {
    header('Location: home.php');
    exit();
}

if ($accountExists == true) {
    header("Location: home.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>

    <?php include('imports/head.php'); ?>
</head>
<body>
<?php include('../includes/adminBar.inc.php'); ?>
<header class="center">
    <h1><a href="index.php">Register</a></h1>
</header>

<main class="container container--large">

    <?php
        $message = "<strong>Warning!</strong> Double check your fields, something is wrong!";
        include('../includes/warningsAndErrors.inc.php');
    ?>

    <form id="loginform" action="includes/register.inc.php" method="POST">
        <fieldset>
            <div>
                <label>Username</label>
                <input name="uid" type="text" value="<?php if(empty($_GET['username'])){} else { echo $_GET['username']; } ?>">
            </div>

            <div>
                <label>Email</label>
                <input name="email" type="email" value="<?php if(empty($_GET['email'])){} else { echo $_GET['email']; } ?>">
            </div>

            <div>
                <label>Password</label>
                <input name="pwd" type="password">
            </div>

            <div>
                <label>re-type Password</label>
                <input name="pwd-repeat" type="password">
            </div>

            <div class="center">
                <button name="register-submit" class="button" type="submit">Register</button>
            </div>
        </fieldset>
    </form>
</main>
</body>
</html>