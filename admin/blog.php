<?php
//======================================================================
// Patrick Roelofs | 584025
//======================================================================
?>
<?php
    require '../includes/dbh.inc.php';
    include ('includes/sessionChecker.inc.php');

    $thisPage = 'AdminBlog';
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
    <a href="addblog.php">+ Add a Blog item</a>
    <div class="projects__column">
        <?php
            $limitBlog = 999;
            include ('imports/blogitems.php');
        ?>
    </div>
</main>

<?php include('imports/footer.php'); ?>
</body>
</html>