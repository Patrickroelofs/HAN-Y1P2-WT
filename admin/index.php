<?php
session_start();

if (isset($_SESSION['uid'])) {
    header('Location: home.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>

    <?php include('imports/head.php'); ?>
</head>
<body>
<?php include('../includes/adminBar.inc.php'); ?>
<header class="center">
    <h1><a href="index.php">Login</a></h1>
</header>

<main class="container container--large">
    <?php
        $message = "<strong>Warning!</strong> Double check your fields, something is wrong!";
        include('../includes/warningsAndErrors.inc.php');
    ?>

    <form id="loginform" method="post" action="includes/login.inc.php">
        <fieldset>
            <div>
                <label>Username</label>
                <input name="login-uid" type="text">
            </div>

            <div>
                <label>Password</label>
                <input name="login-pwd" type="password">
            </div>

            <div class="center">
                <button name="login-submit" class="button" type="submit">Login</button>
            </div>
        </fieldset>
    </form>
</main>
</body>
</html>