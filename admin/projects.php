<?php
//TODO: Edit and Delete projects
//TODO: Display projects

require '../includes/dbh.inc.php';
session_start();

if(!isset($_SESSION['uid'])){
    header('Location: index.php');
}
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

<section class="wrapper wrapper--flex">

    <main class="container container--large">
        <a href="addproject.php">+ Add a Project</a>

        <div class="projects__column">
            <?php
                $limitProjects = 999;
                include ('imports/projects.php');
            ?>
        </div>
    </main>
</section>

<?php include('imports/footer.php'); ?>
</body>
</html>