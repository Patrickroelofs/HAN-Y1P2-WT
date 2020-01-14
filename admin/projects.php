<?php
//======================================================================
// Patrick Roelofs | 584025 | 16/01/2020
//======================================================================
?>
<?php

require '../includes/dbh.inc.php';
include('includes/sessionChecker.inc.php');

$thisPage = 'AdminProjects';
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
    <a href="addproject.php">+ Add a Project</a>

    <div class="projects__column">
    <?php
        $limitProjects = 999;
        include ('imports/projects.php');
    ?>
    </div>
</main>

<?php include('imports/footer.php'); ?>
</body>
</html>