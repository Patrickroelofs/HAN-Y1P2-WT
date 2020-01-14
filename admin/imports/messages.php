<?php
//======================================================================
// Patrick Roelofs | 584025
//======================================================================
?>
<?php

    $stmt = $connection->prepare('SELECT * FROM messages ORDER BY date DESC');
    $stmt->execute();

    $i = 0;

    foreach($stmt as $message)
        if($i < $limitMessages) { ?>

    <a href="viewMessage.php?message=<?php echo $message['id']; ?>" class="message">
        <em><?php echo $message['date']; ?> | <?php echo $message['name']; ?> | <?php echo $message['email']; ?></em>
        <h3><?php echo $message['subject']; ?></h3>
        <p><?php echo substr($message['content'], 0, 420); ?>...</p>
        <hr>
    </a>

<?php $i +=1; } ?>