<?php
    include 'includes/dbh.inc.php';
    $thisPage = 'Projects';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Projects | Patrick Roelofs</title>
	<?php include('imports/head.php'); ?>
</head>

<body>
	<?php include('imports/navigation.php'); ?>

	<header class="header">
		<div class="container container--large center">
			<div class="header__blocktext">
				<h2>Check out these cool projects.</h2>
			</div>
		</div>
	</header>

	<main>
		<div id="projects">
			<div class="container container--large">
                <div class="projects">
                    <div class="projects__column">
                        <?php

                        $stmt = $connection->prepare('SELECT * FROM projects');
                        $stmt->execute();

                        foreach ($stmt as $project) { ?>

                            <a href="project.php" class="projectthumb">
                                <figure>
                                    <img src="<?= $project['thumbnail'] ?>" alt="placeholder">
                                    <figcaption>
                                        <span class="projectthumb__category"><?= $project['tags'] ?></span>
                                        <span class="projectthumb__title"><?= $project['title'] ?></span>
                                        <p class="projectthumb__description"><?= $project['description'] ?></p>
                                        <span class="projectthumb__button">View Project</span>
                                    </figcaption>
                                </figure>
                            </a>

                        <?php } ?>
                    </div>
                </div>
			</div>
		</div>
	</main>

	<?php include('imports/footer.php'); ?>

</body>

</html>