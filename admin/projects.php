<?php
//TODO: Edit and Delete projects
//TODO: Display projects

require '../includes/dbh.inc.php';
session_start();

if(!isset($_SESSION['uid'])){
    header('Location: index.php');
}
$thisPage = 'AdminProjects';
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

    <main class="container container--large">
        <a href="addproject.php">+ Add a Project</a>

        <div class="projects__column">
        <?php
            $stmt = $connection->prepare('SELECT * FROM projects');
            $stmt->execute();

            foreach ($stmt as $project) {
        ?>
        <a href="editproject.php?project=<?= $project['id']; ?>" class="projectthumb">
            <figure>
                <img src="../<?= $project['thumbnail'] ?>" alt="placeholder">
                <figcaption>
                    <span class="projectthumb__category"><?= $project['tags'] ?></span>
                    <span class="projectthumb__title"><?= $project['title'] ?></span>
                    <p class="projectthumb__description"><?= $project['description'] ?></p>
                </figcaption>
            </figure>
        </a>
        <?php } ?>
        </div>
    </main>
</section>

<?php include('imports/footer.php'); ?>
</body>
</html>