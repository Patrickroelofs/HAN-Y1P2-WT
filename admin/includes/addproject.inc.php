<?php
// todo: Upload image in filesystem

if(isset($_POST['addproject-submit'])) {

    require '../../includes/dbh.inc.php';

    $thumbnail      = $_POST["thumbnail"];
    $date           = $_POST['date'];
    $title          = $_POST['title'];
    $tags           = $_POST['tags'];
    $description    = $_POST['description'];
    $content        = $_POST['content'];

    if(empty($title)) {

        //Empty fields!
        header("Location: ../addproject.php?error=emptyfields");
        exit();

    } else {

        try{

            $stmt = $connection->prepare('INSERT INTO projects (thumbnail, date, title, tags, description, content) VALUES (:thumbnail, :date, :title, :tags, :description, :content)');
            $stmt->execute(array(
                ':thumbnail' => $thumbnail,
                ':date' => $date,
                ':title' => $title,
                ':tags' => $tags,
                ':description' => $description,
                ':content' => $content
            ));



            // Project is successfully added
            header("Location: ../projects.php?=success");
            exit();

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}