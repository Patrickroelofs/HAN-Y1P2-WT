<?php
require '../../includes/dbh.inc.php';

if(isset($_POST['addproject-submit'])) {

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
		header("Location: ../addproject.php?error=emptyfields");
		exit();

	} else {

		try{
			mkdir('../../images/thumbnails/projects/'.$newfolder);
			move_uploaded_file($_FILES['thumbnail']["tmp_name"], "../../images/thumbnails/projects/".$newfolder."/".$newname);
			$newname = 'images/thumbnails/projects/'.$newfolder.'/'.$newname;


			$stmt = $connection->prepare('INSERT INTO projects (thumbnail, date, title, tags, description, content) VALUES (:thumbnail, :date, :title, :tags, :description, :content)');
			$stmt->execute(array(
				':thumbnail' => $newname,
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


if (isset($_POST['editproject-submit'])) {

	$date = $_POST['date'];
	$title = $_POST['title'];
	$tags = $_POST['tags'];
	$description = $_POST['description'];
	$content = $_POST['content'];

	// change current data in table
	if (empty($title)) {
		header("Location: ../editproject.php?=EmptyFields");
		exit();
	} else {
		// start insert into setup table
		try {
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

		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
}

if (isset($_POST['deleteproject-submit'])) {

	try {
		//TODO: Cleaner delete image
		//Search and destroy files
		$stmt1 = $connection->prepare("SELECT thumbnail from portfolio.projects WHERE id = '{$_GET['project']}'");
		$stmt1->execute();

		$file = $stmt1->fetch(PDO::FETCH_COLUMN);
		unlink('../../' . $file);

		//Search and destroy folder
		$stmt2 = $connection->prepare("SELECT title from portfolio.projects WHERE id = '{$_GET['project']}'");
		$stmt2->execute();

		$title = $stmt2->fetch(PDO::FETCH_COLUMN);
		rmdir('../../images/thumbnails/projects/' . substr(str_replace(' ', '', $title), 0, 16));

		//Delete project from database
		$stmt3 = $connection->prepare("DELETE FROM portfolio.projects WHERE id = '{$_GET['project']}'");
		$stmt3->execute();

		//send user back to setup
		header("Location: ../projects.php?=$title");
		exit();

	} catch (PDOException $e) {
		echo $e->getMessage();
	}

}