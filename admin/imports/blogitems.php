<?php

$stmt = $connection->prepare('SELECT * FROM blog');
$stmt->execute();

$i = 0;

foreach ($stmt as $blogitem)
    if ($i < $limitBlog) { ?>

        <a href="editblog.php?blog=<?= $blogitem['id']; ?>" class="projectthumb">
            <figure>
                <img src="../<?= $blogitem['thumbnail'] ?>" alt="placeholder">
                <figcaption>
                    <span class="projectthumb__category"><?= $blogitem['tags'] ?></span>
                    <span class="projectthumb__title"><?= $blogitem['title'] ?></span>
                    <p class="projectthumb__description"><?= $blogitem['description'] ?></p>
                    <span class="projectthumb__button">View Blogitem</span>
                </figcaption>
            </figure>
        </a>


        <?php $i +=1; } ?>
