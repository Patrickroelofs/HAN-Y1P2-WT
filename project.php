<?php
    include 'includes/dbh.inc.php';
    include 'includes/functions.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Honigevents | <?php echo getSetup('title'); ?></title>
	<?php include('imports/head.php'); ?>
</head>

<body>
	<?php include('imports/navigation.php'); ?>

	<header class="header">
		<div class="container container--large center">
			<div class="header__blocktext">
				<h2>Honigevents: Event management.</h2>
			</div>
			<video loop="" autoplay="" muted="">
				<source src="projects/honigevents/honigevents-video.mp4" type="video/mp4">
			</video>
		</div>
	</header>

	<main class="project">
		<div class="container container--large">
			<p>
				Honigevents is an event management system for the company <a href="">Honigevents</a> who organize events
				at the Honigcomplex in
				Nijmegen, The Netherlands where many different companies work in an old soup factory.
			</p>
			<p>
				Keeping an eye on all the events was an issue, thats why they in association with <a href="">Basemedia</a> where
				I
				had my internship at the time designed and developed the Honigevents management system.
			</p>
			<img src="projects/honigevents/honigevents-dashboard.jpg" alt="A picture of the Honigevents dashboard">
			<p>
				On the Dashboard employee's of Honigevents can quickly see what is going on right now,
				what events have come in and what events havent been booked.
			</p>
			<img src="projects/honigevents/honigevents-events.jpg" alt="A picture of the Honigevents events page">
			<p>
				When you click a specific event you get all the information you need to completely secure that event
				within the system,
				employee's can create todo lists allowing them to notify other employee's of their progress.
			</p>
			<img src="projects/honigevents/honigevents-event.jpg" alt="A picture of the Honigevents event page">
			<p>
				Some events require multiple companies and rooms to work together, the status icons allows the
				employee's to see if the
				room is booked or is currently being booked. With specific time, dates and notes to make sure everything
				goes correctly!
			</p>
			<div class="project__info">
				<div>
					<p class="info">Co-Creators</p>
					<a href="https://mikevp.me/" target="_blank">Mike van Putten</a>
				</div>
				<div>
					<p class="info">Date</p>
					<span>2016</span>
				</div>
				<div>
					<p class="info">Companies</p>
					<span><a href="https://www.basemedia.nl/" target="_blank">Basemedia</a></span>
					<span><a href="https://honigevents.nl/" target="_blank">Honigevents</a></span>
				</div>
			</div>
		</div>
	</main>

	<?php include('imports/footer.php'); ?>

</body>

</html>