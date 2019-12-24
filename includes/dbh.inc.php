<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "portfolio";

try {

    $connection = new PDO("mysql:host=$servername:3306;dbname=$database", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo "Connection to database failed: " . $e->getMessage();

}