<?php
include('includes/sessionChecker.inc.php');
$thisPage = 'AdminAddBlog';
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
    <form id="loginform" action="includes/blog.inc.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <div>
                <label>Title</label>
                <input name="title" type="text">
            </div>

            <div>
                <label>Tags</label>
                <input name="tags" type="text">
            </div>

            <div>
                <label>Date</label>
                <input name="date" type="date">
            </div>

            <div>
                <label>Description</label>
                <input name="description" type="text">
            </div>

            <div>
                <label>Thumbnail</label>
                <input name="thumbnail" id="thumbnail" type="file">
            </div>

            <div>
                <label>Content</label>
                <textarea name="content" rows="24"></textarea>
            </div>

            <div class="center">
                <button name="addblog-submit" class="button" type="submit">Add Blog</button>
            </div>
        </fieldset>
    </form>

    <?php include('imports/editTutorial.php'); ?>
</main>

<?php include('imports/footer.php'); ?>
</body>
</html>