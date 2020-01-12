<?php
    include '../includes/dbh.inc.php';
    include('includes/sessionChecker.inc.php');

    $thisPage = 'AdminViewMessage';

    $stmt = $connection->prepare("SELECT * FROM messages WHERE id = '{$_GET['message']}'");
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
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

<main class="container container--large viewmessage">
    <a href="messages.php">Return to all messages</a>
    <h1><?= $result['subject']; ?></h1>
    <em><?= $result['date']; ?> | <?= $result['name']; ?></em>

    <p><?= $result['content']; ?></p>
    <a href="mailto: <?= $result['email']; ?>"><?= $result['email']; ?></a>
</main>

<?php include('imports/footer.php'); ?>
</body>
</html>