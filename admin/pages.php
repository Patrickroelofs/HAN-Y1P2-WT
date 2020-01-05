<?php
session_start();

if(!isset($_SESSION['uid'])){
	header('Location: index.php');
}
    $thisPage = 'Pages';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin | Patrick Roelofs</title>

    <link rel="stylesheet" href="css/admin-stylesheet.css">
</head>
<body>
<header>
    <h1><a href="index.php">Admin</a></h1>
</header>

<section class="wrapper wrapper--flex">
    <?php include('imports/navigation.php'); ?>

    <main>


    </main>
</section>

<footer>
    <p>Developed by Patrick Roelofs <?php echo date('Y'); ?></p>
</footer>
</body>
</html>