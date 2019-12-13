<?php

function getSetup($select){
    global $connection;

    $stmt = $connection->prepare('SELECT * FROM setup');
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result[$select];
}