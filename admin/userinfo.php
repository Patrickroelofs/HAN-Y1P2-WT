<?php
session_start();

if(!isset($_SESSION['uid'])){
	header('Location: index.php');
}
$thisPage = 'AdminUserinfo';
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

    <main>


    </main>
</section>

<?php include('imports/footer.php'); ?>
</body>
</html>