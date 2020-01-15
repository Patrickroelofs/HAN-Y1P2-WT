<?php
//======================================================================
// Patrick Roelofs | 584025 | 16/01/2020
//======================================================================
?>
<?php
    require '../includes/dbh.inc.php';
    require('includes/sessionChecker.inc.php');

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