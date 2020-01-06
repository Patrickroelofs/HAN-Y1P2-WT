<?php

if(isset($_POST['addblog-submit'])) {

	require '../../includes/dbh.inc.php';

	$thumbnail      = $_FILES["thumbnail"]["name"];
	$date           = $_POST['date'];
	$title          = $_POST['title'];
	$tags           = $_POST['tags'];
	$description    = $_POST['description'];
	$content        = $_POST['content'];

	$ext = pathinfo($thumbnail, PATHINFO_EXTENSION);

	$newname = rand() . '.' . $ext;
	$newfolder = substr(str_replace(' ', '', $title), 0, 8);

	if(empty($title)) {

		//Empty fields!
		header("Location: ../addblog.php?error=emptyfields");
		exit();

	} else {

		try{
			mkdir('../../images/thumbnails/blog/'.$newfolder);
			move_uploaded_file($_FILES['thumbnail']["tmp_name"], "../../images/thumbnails/blog/".$newfolder."/".$newname);
			$newname = 'images/thumbnails/blog/'.$newfolder.'/'.$newname;


			$stmt = $connection->prepare('INSERT INTO blog (thumbnail, date, title, tags, description, content) VALUES (:thumbnail, :date, :title, :tags, :description, :content)');
			$stmt->execute(array(
				':thumbnail' => $newname,
				':date' => $date,
				':title' => $title,
				':tags' => $tags,
				':description' => $description,
				':content' => $content
			));



			// Project is successfully added
			header("Location: ../blog.php?=success");
			exit();

		} catch(PDOException $e) {
			echo $e->getMessage();
		}
	}
}