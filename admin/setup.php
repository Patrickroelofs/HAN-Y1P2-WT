<?php
include '../includes/databasehandler.inc.php';

// Check if user is logged in
session_start();

if(!isset($_SESSION['uid'])){
	header('Location: index.php');
}

// Get filled in data from database
$stmt = $connection->query('SELECT * FROM setup');
$row = $stmt->fetch(PDO::FETCH_OBJ);
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
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="setup.php" class="active">Setup</a></li>
            </ul>
        </nav>
        <a href="userinfo.php" class="profile--icon">
            <span class="icon--circle">P</span>
            <span class="icon--title">Patrick Roelofs</span>
        </a>
        <form action="includes/logout.inc.php" method="post"><button type="submit" name="logout-submit">Logout</button></form>
    </aside>

    <main>
        <form id="setupform" method="post" action="includes/setup.inc.php">
            <fieldset>
                <div>
                    <label>Title</label>
                    <input name="title" type="text" placeholder="<?php echo $row->title; ?>">
                </div>

                <div>
                    <label>Author</label>
                    <input name="author" type="text" placeholder="<?php echo $row->author; ?>">
                </div>

                <div>
                    <label>Description</label>
                    <input name="description" type="text" placeholder="<?php echo $row->description; ?>">
                </div>

                <div>
                    <label>Keywords</label>
                    <input name="keywords" type="text" placeholder="<?php echo $row->keywords; ?>">
                </div>

                <div class="center">
                    <button name="setup-submit" class="button" type="submit">Change</button>
                </div>
            </fieldset>
        </form>

    </main>
</section>

<footer>
    <p>Developed by Patrick Roelofs <?php echo date('Y'); ?></p>
</footer>
</body>
</html>