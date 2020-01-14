<?php
//======================================================================
// Patrick Roelofs | 584025 | 16/01/2020
//======================================================================
?>
<?php
    include('includes/sessionChecker.inc.php');
    $thisPage = 'AdminAddProject';
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
    <form id="loginform" action="includes/project.inc.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <div>
                <label>Title</label>
                <input name="title" type="text" required>
            </div>

            <div>
                <label>Tags</label>
                <input name="tags" type="text" required>
            </div>

            <div>
                <label>Date</label>
                <input name="date" type="date" required>
            </div>

            <div>
                <label>Description</label>
                <input name="description" type="text" required>
            </div>

            <div>
                <label>Thumbnail</label>
                <input id="thumbnail" name="thumbnail" type="file">
            </div>

            <div>
                <label>Content</label>
                <textarea name="content" rows="24"></textarea>
            </div>

            <div class="center">
                <button name="addproject-submit" class="button" type="submit">Add Project</button>
            </div>
        </fieldset>
    </form>

    <?php include('imports/editTutorial.php'); ?>
</main>

<?php include('imports/footer.php'); ?>
</body>
</html>