<?php
//======================================================================
// Patrick Roelofs | 584025 | 16/01/2020
//======================================================================
?>
<?php
require 'includes/dbh.inc.php';

$stmt = $connection->prepare("SELECT * FROM projects WHERE id = '{$_GET['project']}'");
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

$thisPage = 'Project';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $result['title']; ?> | Patrick Roelofs</title>
    <?php include('imports/head.php'); ?>
</head>

<body>
<?php include 'includes/adminBar.inc.php'; ?>
<?php include('imports/navigation.php'); ?>

<header class="header">
    <div class="container container--large center">
        <div class="header__blocktext">

            <h2><?= $result["title"]; ?></h2>

        </div>
    </div>
</header>

<main class="project">
    <div class="container container--small">
        <?php
            include('includes/customTextParser.inc.php');
            $input = $result['content'];
            $output = customTextParser($input);

            echo $output;
        ?>
    </div>
</main>

<?php include('imports/footer.php'); ?>

</body>

</html>