<?php
//TODO: Edit and Delete projects
//TODO: Display projects
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
<header>
    <h1><a href="index.php">Admin</a></h1>
</header>

<section class="wrapper wrapper--flex">
    <?php include('imports/navigation.php'); ?>

    <main>
        <a href="addproject.php">+ Add a Project</a>
    </main>
</section>

<footer>
    <p>Developed by Patrick Roelofs <?php echo date('Y'); ?></p>
</footer>
</body>
</html>