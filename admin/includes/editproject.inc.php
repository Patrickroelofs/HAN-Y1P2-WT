<?php
//todo: add editable thumbnail

if(isset($_POST['editproject-submit'])) {

    require '../../includes/dbh.inc.php';

    $date           = $_POST['date'];
    $title          = $_POST['title'];
    $tags           = $_POST['tags'];
    $description    = $_POST['description'];
    $content        = $_POST['content'];

    // change current data in table
    if(empty($title)){
        header("Location: ../editproject.php?=EmptyFields");
        exit();
    } else {
        // start insert into setup table
        try{
            $stmt = $connection->prepare("UPDATE portfolio.projects SET date=:date, title=:title, tags=:tags, description=:description, content=:content WHERE id = '{$_GET['project']}'");
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

if(isset($_POST['deleteproject-submit'])) {

    require '../../includes/dbh.inc.php';

    try{
        //TODO: Cleaner delete image
        //Search and destroy files
        $stmt1 = $connection->prepare("SELECT thumbnail from portfolio.projects WHERE id = '{$_GET['project']}'");
        $stmt1->execute();

        $file = $stmt1->fetch(PDO::FETCH_COLUMN);
        unlink('../../'.$file);

        //Search and destroy folder
        $stmt2 = $connection->prepare("SELECT title from portfolio.projects WHERE id = '{$_GET['project']}'");
        $stmt2->execute();

        $title = $stmt2->fetch(PDO::FETCH_COLUMN);
        rmdir( '../../images/thumbnails/projects/'.substr(str_replace(' ', '', $title), 0, 16) );

        //Delete project from database
        $stmt3 = $connection->prepare("DELETE FROM portfolio.projects WHERE id = '{$_GET['project']}'");
        $stmt3->execute();

        //send user back to setup
        header("Location: ../projects.php?=$title");
        exit();

    } catch(PDOException $e){
        echo $e->getMessage();
    }

}