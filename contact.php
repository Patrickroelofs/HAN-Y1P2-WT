<?php
//======================================================================
// Patrick Roelofs | 584025 | 16/01/2020
//======================================================================
?>
<?php
    include 'includes/dbh.inc.php';
    $thisPage = 'Contact';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $thisPage ?> | Patrick Roelofs</title>
	<?php include('imports/head.php'); ?>
</head>

<body>
    <?php include 'includes/adminBar.inc.php'; ?>
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

                <?php
                    $message = "<strong>Message sent</strong>, Thank you! I will reply with an email asap!";
                    include('includes/warningsAndErrors.inc.php');
                ?>

				<form class="contactform__form" action="includes/sendMessage.inc.php" method="post" enctype="multipart/form-data" >
					<fieldset>
						<div>
							<div>
								<div>
									<label for="name">Name</label>
									<input name="name" id="name" type="text" placeholder="A funny name">
								</div>
								<div>
									<label for="email">Email Address</label>
									<input name="email" id="email" type="email" required placeholder="Your awkward email address">
								</div>
								<div>
									<label for="subject">Subject</label>
									<input name="subject" id="subject" type="text" required placeholder="A catchy title">
								</div>
							</div>
							<div>
								<label for="textarea">Text</label>
								<textarea name="textarea" id="textarea" rows="19"
									placeholder="An entire research paper worth of text."></textarea>
								<button name="send-message" class="button button--green">Submit</button>
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