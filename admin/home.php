<?php
    require '../includes/dbh.inc.php';
    session_start();

    if(!isset($_SESSION['uid'])){
        header('Location: index.php');
    }

    $thisPage = 'AdminHome';
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
        <h3>Recent Blog items</h3>
        <h3>Recent Projects</h3>
        <div class="projects__column">
            <?php
                $limitProjects = 2;
                include ('imports/projects.php');
            ?>
        </div>

        <h3>Recent Messages</h3>
    </main>

    <?php include('imports/footer.php'); ?>
  </body>
</html>