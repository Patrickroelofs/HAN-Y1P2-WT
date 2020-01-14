<?php
//======================================================================
// Patrick Roelofs | 584025 | 16/01/2020
//======================================================================
?>
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

    <?php

        $stmt = $connection->prepare("SELECT * FROM admins WHERE username = :username OR email = :email");
        $stmt->execute(array(
                ':username' => $_SESSION['uid'],
                ':email' => $_SESSION['uid']
        ));

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

    ?>

    <form id="edituser" action="includes/register.inc.php" method="POST">
        <div>
            <label>Username</label>
            <input name="uid" type="text" value="<?php echo $result['username']; ?>" required>
        </div>

        <div>
            <label>Email</label>
            <input name="email" type="email" value="<?php echo $result['email']; ?>" required>
        </div>

        <div>
            <label>Password</label>
            <input name="pwd" type="password" required>
        </div>

        <div>
            <label>re-type Password</label>
            <input name="pwd-repeat" type="password" required>
        </div>

        <div class="center">
            <button name="edituser" class="button" type="submit">Edit Account</button>
        </div>
    </form>
</main>

<?php include('imports/footer.php'); ?>
</body>
</html>