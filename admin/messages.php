<?php
//TODO: Display message in admin
//TODO: Click on message title do display in single message view

include '../includes/dbh.inc.php';

session_start();

if(!isset($_SESSION['uid'])){
    header('Location: index.php');
}
    $thisPage = 'Messages';

    $stmt = $connection->query('SELECT * FROM messages');
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
    <?php foreach($stmt as $message) { ?>
        <div>
            <div>
                <strong><?php echo $message['date']; ?> | <?php echo $message['name']; ?></strong>
                <h3><?php echo $message['subject']; ?></h3>
                <p><?php echo $message['content']; ?></p>
                <a href="mailto: <?php echo $message['email']; ?>"><?php echo $message['email']; ?></a>
            </div>
        </div>
    <?php } ?>
    </main>
</section>

<footer>
    <p>Developed by Patrick Roelofs <?php echo date('Y'); ?></p>
</footer>
</body>
</html>