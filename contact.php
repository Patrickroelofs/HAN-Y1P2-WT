<?php
    include 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact | Patrick Roelofs</title>
	<?php include('imports/head.php'); ?>
</head>

<body>
	<?php include('imports/navigation.php'); ?>

	<header class="header">
		<div class="container container--large center">
			<div class="header__blocktext">
				<h2>Send me a message.</h2>
			</div>
		</div>
	</header>

	<main class="main--small">
		<div class="container">
			<div class="contactform">
				<form class="contactform__form">
					<fieldset>
						<div>
							<div>
								<div>
									<label for="name">Name</label>
									<input id="name" type="text" placeholder="A funny name">
								</div>
								<div>
									<label for="email">Email Address</label>
									<input id="email" type="email" placeholder="Your awkward email address">
								</div>
								<div>
									<label for="subject">Subject</label>
									<input id="subject" type="text" placeholder="A catchy title">
								</div>
								<div>
									<label for="projectSelect">Project specific information?</label>
									<select id="projectSelect">
										<option>Select a cool project</option>
										<option value="Nzayi">Nzayi</option>
										<option value="EnergyChallenge">Energy Challenge</option>
										<option value="TheFutureOfRetail">The Future Of Retail</option>
										<option value="Honigevents">Honigevents</option>
										<option value="DivingForTreasure">Diving For Treasure</option>
										<option value="Kaluandafest2019">Kaluandafest 2019</option>
									</select>
								</div>
							</div>
							<div>
								<label for="textarea">Text</label>
								<textarea id="textarea" rows="19"
									placeholder="An entire research paper worth of text."></textarea>
								<button class="button button--green">Submit</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</main>

	<?php include('imports/footer.php'); ?>

</body>

</html>