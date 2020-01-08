<?php

if(isset($_POST['send-message'])) {

    require 'dbh.inc.php';

    $date       =   date('Y-m-d');
    $name 		= 	$_POST['name'];
    $mail 		= 	$_POST['email'];
    $subject 	= 	$_POST['subject'];
    $content 	= 	$_POST['textarea'];

    if(empty($name) || empty($mail) || empty($subject) || empty($content)){

        header("Location: ../index.php?=EmptyFields");
        exit();

    } else {

        try{
            $stmt = $connection->prepare('INSERT INTO messages (date, name, email, subject, content) VALUES (:date, :name, :email, :subject, :content)');
            $stmt->execute(array(
                ':date' => $date,
                ':name' => $name,
                ':email' => $mail,
                ':subject' => $subject,
                ':content' => $content
            ));

            header("Location: ../contact.php?message=success");
            exit();


        } catch(PDOException $e) {
            echo $e->getMessage();
        }

    }
}