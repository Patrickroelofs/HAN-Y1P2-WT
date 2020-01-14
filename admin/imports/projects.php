<?php
//======================================================================
// Patrick Roelofs | 584025 | 16/01/2020
//======================================================================
?>
<?php

    $stmt = $connection->prepare('SELECT * FROM projects');
    $stmt->execute();

    $i = 0;

    foreach ($stmt as $project)
        if ($i < $limitProjects) { ?>

        <a href="editproject.php?project=<?= $project['id']; ?>" class="projectthumb">
            <figure>
                <img src="../<?= $project['thumbnail'] ?>" alt="placeholder">
                <figcaption>
                    <span class="projectthumb__category"><?= $project['tags'] ?></span>
                    <span class="projectthumb__title"><?= $project['title'] ?></span>
                    <p class="projectthumb__description"><?= $project['description'] ?></p>
                    <span class="projectthumb__button">View Project</span>
                </figcaption>
            </figure>
        </a>


        <?php $i +=1; } ?>
