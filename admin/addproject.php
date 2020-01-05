<?php
session_start();

if(!isset($_SESSION['uid'])){
    header('Location: index.php');
}
$thisPage = 'AdminAddProject';
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

<section class="wrapper wrapper--flex">

    <main class="container container--large">
        <form id="loginform" action="includes/addproject.inc.php" method="POST" enctype="multipart/form-data">
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
                    <input name="thumbnail[]" type="file">
                </div>

                <div>
                    <label>Content</label>
                    <textarea name="content"></textarea>
                </div>

                <div class="center">
                    <button name="addproject-submit" class="button" type="submit">Add Project</button>
                </div>
            </fieldset>
        </form>
    </main>
</section>

<?php include('imports/footer.php'); ?>
</body>
</html>