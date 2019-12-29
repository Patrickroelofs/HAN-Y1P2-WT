<?php
    include 'includes/dbh.inc.php';
    $thisPage = 'About';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>About | Patrick Roelofs</title>
	<?php include('imports/head.php'); ?>
</head>

<body>
	<?php include('imports/navigation.php'); ?>

	<header class="header">
		<div class="container container--large center">
			<div class="header__blocktext">
				<h2>I'm a creator.</h2>
			</div>
		</div>
	</header>

	<main>
		<div class="skills">
			<div class="skills__list">
				<ul>
					<li>UX Design</li>
					<li>User Research</li>
					<li>Prototyping</li>
					<li>Web Development</li>
				</ul>
			</div>
			<div class="skills__text">
				<img class="skills__person" src="images/Happy-Man-Transparent-Background.png" alt="Placeholder image">
				<p>When creating a design or developing I try to take care of all users, from the people that need a little help
					to the ones that need none. By thinking about the latest usability features and working directly with users I
					can improve the quality of my designs and also makes them usable when I develop.</p>
			</div>
		</div>


		<section class="about__me">
			<div class="container">
				<div class="me__title">
					<h3>About me</h3>
				</div>
				<div class="me__contents">
					<p>Hi! I'm Patrick I have always loved computers and have always been interested in design and development! When I was a kid I played around with making websites and all kinds of other programming stuff, that really stuck around.</p>
					<div class="me__content">
						<div class="me__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 24 24">
								<path
									d="M7.961 7.5h1.303l2.47 6.5h-1.349l-.538-1.5h-2.438l-.535 1.5h-1.392l2.479-6.5zm1.517 3.965l-.857-2.451-.851 2.451h1.708zm8.092-1.402c.062-.243.1-.426.135-.605l-1.1-.214-.109.5c-.371-.054-.767-.061-1.166-.021.009-.268.025-.531.049-.784h1.229v-1.042h-1.081c.054-.265.099-.424.144-.575l-1.074-.322c-.079.263-.145.521-.211.897h-1.226v1.042h1.092c-.028.337-.046.686-.051 1.038-1.207.443-1.719 1.288-1.719 2.054 0 .904.714 1.7 1.842 1.598 1.401-.128 2.337-1.186 2.885-2.487.567.327.805.876.591 1.385-.197.471-.78.919-1.892.896v1.121c1.234.019 2.448-.45 2.925-1.583.465-1.108-.066-2.318-1.263-2.898zm-1.446.766c-.175.387-.404.771-.697 1.075-.045-.323-.076-.676-.093-1.054.268-.035.537-.041.79-.021zm-1.894.362c.03.473.084.909.158 1.298-.997.183-1.037-.801-.158-1.298zm-2.23-8.191c5.514 0 10 3.592 10 8.007 0 4.917-5.145 7.961-9.91 7.961-1.937 0-3.384-.397-4.394-.644-1 .613-1.594 1.037-4.272 1.82.535-1.373.722-2.748.601-4.265-.837-1-2.025-2.4-2.025-4.872 0-4.415 4.486-8.007 10-8.007zm0-2c-6.338 0-12 4.226-12 10.007 0 2.05.739 4.063 2.047 5.625.055 1.83-1.023 4.456-1.993 6.368 2.602-.47 6.301-1.508 7.978-2.536 1.417.345 2.774.503 4.059.503 7.083 0 11.91-4.837 11.91-9.961-.001-5.811-5.702-10.006-12.001-10.006z" />
							</svg>
							<span>Language's</span>
						</div>
						<div class="me__description">
							<p>Dutch, English</p>
						</div>
					</div>

					<div class="me__content">
						<div class="me__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 24 24">
								<path
									d="M17.492 15.432c-.433 0-.855-.087-1.253-.259l.467-1.082c.25.107.514.162.786.162.222 0 .441-.037.651-.11l.388 1.112c-.334.118-.683.177-1.039.177zm-10.922-.022c-.373 0-.741-.066-1.093-.195l.407-1.105c.221.081.451.122.686.122.26 0 .514-.05.754-.148l.447 1.09c-.382.157-.786.236-1.201.236zm8.67-.783l-1.659-.945.583-1.024 1.66.945-.584 1.024zm-6.455-.02l-.605-1.011 1.639-.981.605 1.011-1.639.981zm3.918-1.408c-.243-.101-.5-.153-.764-.153-.23 0-.457.04-.674.119l-.401-1.108c.346-.125.708-.188 1.075-.188.42 0 .83.082 1.217.244l-.453 1.086zm7.327-.163c-.534 0-.968.433-.968.968 0 .535.434.968.968.968.535 0 .969-.434.969-.968 0-.535-.434-.968-.969-.968zm-16.061 0c-.535 0-.969.433-.969.968 0 .535.434.968.969.968s.969-.434.969-.968c0-.535-.434-.968-.969-.968zm18.031-.832v6.683l-4 2.479v-4.366h-1v4.141l-4-2.885v-3.256h-2v3.255l-4 2.885v-4.14h-1v4.365l-4-2.479v-13.294l4 2.479v3.929h1v-3.927l4-2.886v4.813h2v-4.813l1.577 1.138c-.339-.701-.577-1.518-.577-2.524l.019-.345-2.019-1.456-5.545 4-6.455-4v18l6.455 4 5.545-4 5.545 4 6.455-4v-11.618l-.039.047c-.831.982-1.614 1.918-1.961 3.775zm2-8.403c0-2.099-1.9-3.801-4-3.801s-4 1.702-4 3.801c0 3.121 3.188 3.451 4 8.199.812-4.748 4-5.078 4-8.199zm-5.5.199c0-.829.672-1.5 1.5-1.5s1.5.671 1.5 1.5-.672 1.5-1.5 1.5-1.5-.671-1.5-1.5zm-.548 8c-.212-.992-.547-1.724-.952-2.334v2.334h.952z" />
							</svg>
							<span>Location</span>
						</div>
						<div class="me__description">
							<p>Nijmegen, the Netherlands</p>
						</div>
					</div>

					<div class="me__content">
						<div class="me__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 24 24">
								<path
									d="M4 9v-1.974h2v1.974h5v-4h2v4h5v-2h2v2h.755c1.803.091 3.243 1.646 3.243 3.519 0 .961-.382 1.829-.998 2.458v9.023h-22v-9.02c-.43-.438-.747-.993-.9-1.621-.067-.276-.1-.558-.1-.841 0-2.009 1.629-3.479 3.242-3.518h.758zm17 11h-18v2h18v-2zm-18-4.027v2.027h18v-2.027l-.407.025c-.775 0-1.541-.27-2.154-.79-.576.488-1.333.789-2.155.789-.812 0-1.566-.295-2.142-.779-.581.487-1.341.78-2.136.78-.807 0-1.575-.292-2.149-.78-.586.491-1.346.78-2.137.78-.775 0-1.526-.26-2.16-.79-.561.479-1.328.79-2.154.79l-.406-.025zm.29-4.973c-.627.049-1.243.635-1.288 1.421-.051.887.632 1.585 1.454 1.576 1.176-.014 1.915-.86 2.117-1.997.217.88.986 1.975 2.145 1.996 1.156.021 1.99-.959 2.161-1.958l.008-.038c.199 1.04.99 1.996 2.109 1.996 1.155 0 1.917-.872 2.172-1.996.248 1.138 1.035 1.994 2.117 1.997 1.108.003 1.955-.928 2.203-1.997.188.828.804 1.985 2.051 1.998.759.008 1.46-.65 1.46-1.483 0-.837-.649-1.481-1.318-1.517l-17.391.002zm.863-4.451c-1.897-.621-1.351-3.444.89-4.523.08 1.422 1.957 1.566 1.957 3.002 0 .602-.441 1.274-1.084 1.521.154-.509-.186-1.416-.88-1.809-.702.407-1.063 1.302-.883 1.809zm13.999-.026c-1.896-.621-1.35-3.444.891-4.523.08 1.422 1.957 1.566 1.957 3.002 0 .602-.441 1.274-1.084 1.521.153-.509-.186-1.416-.88-1.809-.702.407-1.063 1.302-.884 1.809zm-6.999-2c-1.897-.621-1.351-3.444.89-4.523.08 1.422 1.957 1.566 1.957 3.002 0 .602-.441 1.274-1.084 1.521.153-.509-.186-1.416-.88-1.809-.702.407-1.063 1.302-.883 1.809z" />
							</svg>
							<span>Birthday</span>
						</div>
						<div class="me__description">
							<p>6th of February 1997 (23)</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="experiences">
			<div class="experiences__title">
				<h3>Experiences</h3>
				<p>I've worked at and worked for a bunch of places!</p>
			</div>
			<div class="experiences__double">
				<div class="experiences__educations">
					<h4>Educations</h4>
					<div class="education">
						<div class="education__location">
							<a href="https://www.han.nl/international/english/" target="_blank">HAN University <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
									viewbox="0 0 24 24">
									<path
										d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z" />
								</svg></a>
							<span>2019 - Current</span>
						</div>
						<div class="education__description">
							<span>IT</span>
							<p>I'm currently studying IT at the same school, I want to go into webdevelopment and I'm happy that I can apply my previous studies here. IT is really fun!</p>
						</div>
					</div>
					<div class="education">
						<div class="education__location">
							<a href="https://www.han.nl/international/english/" target="_blank">HAN University <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
									viewbox="0 0 24 24">
									<path
										d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z" />
								</svg></a>
							<span>2016 - 2019</span>
						</div>
						<div class="education__description">
							<span>Communication & Multimedia design</span>
							<p>Here I focussed on Interaction design and had a great few years of learning design theory on a higher level, but in the end I preferred to go a different way. This is not a thrown away study tho! I'll apply it in the future.</p>
						</div>
					</div>
					<div class="education">
						<div class="education__location">
							<a href="https://www.roc-nijmegen.nl/" target="_blank">ROC Nijmegen <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
									viewbox="0 0 24 24">
									<path
										d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z" />
								</svg></a>
							<span>2013 - 2016</span>
						</div>
						<div class="education__description">
							<span>Multimedia design</span>
							<p>ROC Nijmegen really taught me the basics of working with the different Adobe products and applying design theories helping me kickstart other studies.</p>
						</div>
					</div>
				</div>

				<div class="experiences__career">
					<h4>Work Experiences</h4>
					<div class="experience">
						<div class="experience__location">
							<a href="https://www.lidl.nl/" target="_blank">Lidl <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24">
									<path
										d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z" />
								</svg></a>
							<span>2016 - Present</span>
						</div>
						<div class="experience__description">
							<span>Store clerk</span>
							<p>I've worked at a lidl franchise for a few years now and its been really fun, it takes me away from the computer and also lets me earn a little bit of money!</p>
						</div>
					</div>
					<div class="experience">
						<div class="experience__location">
							<a href="https://www.basemedia.nl/" target="_blank">Basemedia <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24">
									<path
										d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z" />
								</svg></a>
							<span>2016</span>
						</div>
						<div class="experience__description">
							<span>Development internship</span>
							<p>My experience at Basemedia was really great, a wonderfull small family team that really let me go and do some awesome stuff!</p>
						</div>
					</div>
				</div>

			</div>
		</section>
	</main>

	<?php include('imports/footer.php'); ?>

</body>

</html>