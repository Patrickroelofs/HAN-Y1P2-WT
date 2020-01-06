<?php
//todo: add editable thumbnail

if(isset($_POST['editblog-submit'])) {

    require '../../includes/dbh.inc.php';
    $date           = $_POST['date'];
    $title          = $_POST['title'];
    $tags           = $_POST['tags'];
    $description    = $_POST['description'];
    $content        = $_POST['content'];

    // change current data in table
    if(empty($title)){
        header("Location: ../editblog.php?=EmptyFields");
        exit();
    } else {
        // start insert into setup table
        try{
            $stmt = $connection->prepare("UPDATE portfolio.blog SET date=:date, title=:title, tags=:tags, description=:description, content=:content WHERE id = '{$_GET['blog']}'");
            $stmt->execute(array(
                ':date' => $date,
                ':title' => $title,
                ':tags' => $tags,
                ':description' => $description,
                ':content' => $content
            ));

            //send user back to setup
            header("Location: ../projects.php");
            exit();

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}

if(isset($_POST['deleteblog-submit'])) {

    require '../../includes/dbh.inc.php';

    try{

        $stmt = $connection->prepare("DELETE FROM portfolio.blog WHERE id = '{$_GET['blog']}'");
        $stmt->execute();

        //send user back to setup
        header("Location: ../blog.php?=deleted");
        exit();

    } catch(PDOException $e){
        echo $e->getMessage();
    }

}