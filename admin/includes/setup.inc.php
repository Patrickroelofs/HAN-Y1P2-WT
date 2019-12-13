<?php

if(isset($_POST['setup-submit'])) {

    require '../../includes/dbh.inc.php';

    $title          = $_POST['title'];
    $author         = $_POST['author'];
    $description    = $_POST['description'];
    $keywords       = $_POST['keywords'];

    // change current data in table
    if(empty($title)){
        header("Location: ../setup.php");
        exit();
    } else {
        // start insert into setup table
        try{
            $stmt = $connection->prepare('UPDATE portfolio.setup SET title=:title, author=:author, description=:description, keywords=:keywords');
            $stmt->execute(array(
                ':title' => $title,
                ':author' => $author,
                ':description' => $description,
                ':keywords' => $keywords
            ));

            //send user back to setup
            header("Location: ../setup.php");
            exit();

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}