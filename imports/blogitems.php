<?php

$stmt = $connection->prepare('SELECT * FROM blog');
$stmt->execute();

$i = 0;

foreach ($stmt as $blog)
    if ($i < $limitBlogitems) { ?>

        <a href="blogpost.php?blogitem=<?= $blog['id']; ?>" class="projectthumb">
            <figure>
                <img src="<?= $blog['thumbnail'] ?>" alt="placeholder">
                <figcaption>
                    <span class="projectthumb__category"><?= $blog['tags'] ?></span>
                    <span class="projectthumb__title"><?= $blog['title'] ?></span>
                    <p class="projectthumb__description"><?= $blog['description'] ?></p>
                    <span class="projectthumb__button">View blog</span>
                </figcaption>
            </figure>
        </a>


        <?php $i +=1; } ?>