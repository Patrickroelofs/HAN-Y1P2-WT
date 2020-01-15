<?php
//======================================================================
// Patrick Roelofs | 584025 | 16/01/2020
//======================================================================
?>
<?php

    require '../includes/dbh.inc.php';
    require('includes/sessionChecker.inc.php');

    $thisPage = 'AdminEditProject';

    $stmt = $connection->prepare("SELECT * FROM projects WHERE id = '{$_GET['project']}'");
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

<main class="container container--large">
	<form id="editproject" action="includes/project.inc.php?project=<?= $result['id'] ?>" method="POST" enctype="multipart/form-data">
		<fieldset>
			<div>
				<label>Title</label>
				<input name="title" type="text" required value="<?= $result['title']; ?>">
			</div>

			<div>
				<label>Tags</label>
				<input name="tags" type="text" required value="<?= $result['tags']; ?>">
			</div>

			<div>
				<label>Date</label>
				<input name="date" type="date" required value="<?= $result['date']; ?>">
			</div>

			<div>
				<label>Description</label>
				<input name="description" type="text" required value="<?= $result['description']; ?>">
			</div>

			<div>
				<label>Content</label>
				<textarea name="content" rows="24"><?= $result['content']; ?></textarea>
			</div>

			<div class="center">
				<button name="editproject-submit" class="button" type="submit">Edit Project</button>
                <button name="deleteproject-submit" class="button" type="submit">Delete Project</button>
			</div>
		</fieldset>
	</form>

    <?php include('imports/editTutorial.php'); ?>
</main>

<?php include('imports/footer.php'); ?>
</body>
</html>