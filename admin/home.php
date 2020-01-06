<?php
    require '../includes/dbh.inc.php';
    include('includes/sessionChecker.inc.php');

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

    <main class="container container--large admin-home">
        <div>
            <h2>Recent Blog items</h2>
            <div class="projects__column">
                <?php
                    $limitBlog = 2;
                    include ('imports/blogitems.php');
                ?>
            </div>
        </div>


        <div>
            <h2>Recent Projects</h2>
            <div class="projects__column">
                <?php
                    $limitProjects = 2;
                    include ('imports/projects.php');
                ?>
            </div>
        </div>

        <div>
            <h2>Recent Messages</h2>
            <?php
                $limitMessages = 3;
                include('imports/messages.php');
            ?>
        </div>

    </main>

    <?php include('imports/footer.php'); ?>
  </body>
</html>