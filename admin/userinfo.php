<?php
    include('../includes/dbh.inc.php');
    include('includes/sessionChecker.inc.php');

    $thisPage = 'AdminUserinfo';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin | Patrick Roelofs</title>

    <?php include('imports/head.php'); ?>
</head>
<body>
<?php include('../includes/adminBar.inc.php'); ?>
<?php include('imports/navigation.php'); ?>

<main class="container container--large">
    <h1>Edit Account</h1>

    <form id="edituser" action="includes/register.inc.php" method="POST">
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
            <button name="edituser" class="button" type="submit">Edit Account</button>
        </div>
    </form>
</main>

<?php include('imports/footer.php'); ?>
</body>
</html>