<?php
session_start();

if(!isset($_SESSION['uid'])){
    header('Location: index.php');
}
$thisPage = 'AdminAddBlog';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin | Patrick Roelofs</title>

    <link rel="stylesheet" href="css/admin-stylesheet.css">
</head>
<body>
<?php include('../includes/adminBar.inc.php'); ?>
<?php include('imports/navigation.php'); ?>

<main class="container container--large">

</main>

<?php include('imports/footer.php'); ?>
</body>
</html>