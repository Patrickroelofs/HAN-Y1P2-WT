<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "portfolio";

try {

    $connection = new PDO("mysql:host=$servername:3306;dbname=$database", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /* Stop XSS input and output */
    $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

} catch (PDOException $e) {

    echo "Connection to database failed: " . $e->getMessage();

}