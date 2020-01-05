<?php
include '../includes/dbh.inc.php';

// Check if user is logged in
session_start();

if(!isset($_SESSION['uid'])){
	header('Location: index.php');
}
$thisPage = 'AdminSetup';

// Get filled in data from database
$stmt = $connection->query('SELECT * FROM setup');
$row = $stmt->fetch(PDO::FETCH_OBJ);
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
        <form id="setupform" method="post" action="includes/setup.inc.php">
            <fieldset>
                <div>
                    <label>Title</label>
                    <input name="title" type="text" placeholder="<?php echo $row->title; ?>" value="<?php echo $row->title; ?>">
                </div>

                <div>
                    <label>Author</label>
                    <input name="author" type="text" placeholder="<?php echo $row->author; ?>" value="<?php echo $row->author; ?>">
                </div>

                <div>
                    <label>Description</label>
                    <input name="description" type="text" placeholder="<?php echo $row->description; ?>" value="<?php echo $row->description; ?>">
                </div>

                <div>
                    <label>Keywords</label>
                    <input name="keywords" type="text" placeholder="<?php echo $row->keywords; ?>" value="<?php echo $row->keywords; ?>">
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