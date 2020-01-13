<?php
    include 'includes/dbh.inc.php';

    $stmt = $connection->prepare("SELECT * FROM blog WHERE id = '{$_GET['blogitem']}'");
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $thisPage = 'BlogPost';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $result['title']; ?> | Patrick Roelofs</title>
    <?php include('imports/head.php'); ?>
</head>

<body>
<?php include('imports/navigation.php'); ?>

<header class="header">
    <div class="container container--large center">
        <div class="header__blocktext">

            <h2><?= $result["title"]; ?></h2>

        </div>
    </div>
</header>

<main class="project">
    <div class="container">
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