<?php
include '../includes/dbh.inc.php';

session_start();

if(!isset($_SESSION['uid'])){
    header('Location: index.php');
}

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
    <aside>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="pages.php">Pages</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="messages.php" class="active">Messages</a></li>
                <li><a href="setup.php">Setup</a></li>
            </ul>
        </nav>
        <a href="userinfo.php" class="profile--icon">
            <span class="icon--circle">P</span>
            <span class="icon--title">Patrick Roelofs</span>
        </a>
        <form action="includes/logout.inc.php" method="post"><button type="submit" name="logout-submit">Logout</button></form>
    </aside>

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