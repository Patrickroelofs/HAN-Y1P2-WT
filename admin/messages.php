<?php
//TODO: Display message in admin
//TODO: Click on message title do display in single message view

    include '../includes/dbh.inc.php';
    include('includes/sessionChecker.inc.php');
    $thisPage = 'AdminMessages';
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
    <?php
        $limitMessages = 999;
        include('imports/messages.php');
    ?>
</main>

<?php include('imports/footer.php'); ?>
</body>
</html>