<?php
    include 'includes/dbh.inc.php';
    $thisPage = 'Blog';
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
                <h2>Check out these cool blog posts.</h2>
            </div>
            <form id="searchform" action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                <input type="text" name="field" placeholder="Search..."><button type="submit" name="search" class="button button--green">Submit</button>
            </form>
        </div>
    </header>

    <main>
        <div id="projects">
            <div class="container container--large">
                <div class="projects">
                    <div class="projects__column">
                        <?php
                            if(isset($_POST['search'])){
                                $searchQuery = $_POST['field'];

                                $stmt = $connection->prepare("SELECT * FROM blog WHERE title LIKE '%$searchQuery%' OR description LIKE '%$searchQuery%' OR content LIKE '%$searchQuery%'");
                                $stmt->execute(array(
                                    ':query' => $searchQuery
                                ));

                                if($stmt){
                                    if($stmt->rowCount() > 0){
                                        foreach($stmt as $row){
                                            ?>
                                            <a href="blogpost.php?blogitem=<?= $row['id']; ?>" class="projectthumb">
                                                <figure>
                                                    <img src="<?= $row['thumbnail'] ?>" alt="placeholder">
                                                    <figcaption>
                                                        <span class="projectthumb__category"><?= $row['tags'] ?></span>
                                                        <span class="projectthumb__title"><?= $row['title'] ?></span>
                                                        <p class="projectthumb__description"><?= $row['description'] ?></p>
                                                        <span class="projectthumb__button">View blog</span>
                                                    </figcaption>
                                                </figure>
                                            </a>
                                            <?php
                                        }
                                    } else {
                                        echo 'error';
                                    }
                                } else {
                                    echo 'error';
                                }
                            } else {
                                $limitBlogitems = 999;
                                include('imports/blogitems.php');
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php include('imports/footer.php'); ?>

</body>

</html>