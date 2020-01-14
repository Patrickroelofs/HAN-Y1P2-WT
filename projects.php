<?php
//======================================================================
// Patrick Roelofs | 584025 | 16/01/2020
//======================================================================
?>
<?php
    include 'includes/dbh.inc.php';
    $thisPage = 'Projects';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $thisPage ?> | Patrick Roelofs</title>
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
                            $limitProjects = 999;
                            include('imports/projects.php');
                        ?>
                    </div>
                </div>
			</div>
		</div>
	</main>

	<?php include('imports/footer.php'); ?>

</body>

</html>