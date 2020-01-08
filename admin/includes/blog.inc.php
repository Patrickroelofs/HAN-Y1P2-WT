<?php
require '../../includes/dbh.inc.php';

if(isset($_POST['addblog-submit'])) {

	$thumbnail      = $_FILES["thumbnail"]["name"];
	$date           = $_POST['date'];
	$title          = $_POST['title'];
	$tags           = $_POST['tags'];
	$description    = $_POST['description'];
	$content        = $_POST['content'];

	$ext = pathinfo($thumbnail, PATHINFO_EXTENSION);

	$newname = rand() . '.' . $ext;
	$newfolder = substr(str_replace(' ', '', $title), 0, 16);

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

//todo: add editable thumbnail

if(isset($_POST['editblog-submit'])) {

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

	try{
		//TODO: Cleaner delete image
		//Search and destroy files
		$stmt1 = $connection->prepare("SELECT thumbnail from portfolio.blog WHERE id = '{$_GET['blog']}'");
		$stmt1->execute();

		$file = $stmt1->fetch(PDO::FETCH_COLUMN);
		unlink('../../'.$file);

		//Search and destroy folder
		$stmt2 = $connection->prepare("SELECT title from portfolio.blog WHERE id = '{$_GET['blog']}'");
		$stmt2->execute();

		$title = $stmt2->fetch(PDO::FETCH_COLUMN);
		rmdir( '../../images/thumbnails/blog/'.substr(str_replace(' ', '', $title), 0, 16) );

		//Delete blogitem from database
		$stmt = $connection->prepare("DELETE FROM portfolio.blog WHERE id = '{$_GET['blog']}'");
		$stmt->execute();

		//send user back to setup
		header("Location: ../blog.php?=deleted");
		exit();

	} catch(PDOException $e){
		echo $e->getMessage();
	}

}