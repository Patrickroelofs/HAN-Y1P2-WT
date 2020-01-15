<?php
//======================================================================
// Patrick Roelofs | 584025 | 16/01/2020
//======================================================================
?>
<?php
include '../includes/dbh.inc.php';
$thisPage = 'error';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $thisPage ?> | Patrick Roelofs</title>
    <?php include('../imports/head.php'); ?>
</head>

<body>
<?php include '../includes/adminBar.inc.php'; ?>
<?php include('../imports/navigation.php'); ?>

<header class="header">
    <div class="container container--large center">
        <div class="header__blocktext">
            <h2>Error: 401 Unauthorized</h2>
        </div>
    </div>
</header>
<main class="center error--page">
    <h2>Something went wrong...</h2>
</main>
<?php include('../imports/footer.php'); ?>

</body>

</html>