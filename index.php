<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Portfolio for Jordan Elliot Finch, web and software developer.">
	<meta name="author" content="Jordan Elliot Finch">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#FFCC00" /> <!-- TODO: Check that this doesn't look abysmal -->
	<link rel="stylesheet" type="text/css" href="resources/css/main.css" />
	<link rel="stylesheet" type="text/css" href="resources/css/playground.css" />
	<title>Jordan Elliot Finch's Portfolio</title>
</head>
<body>
	<?php require("modules/header.php") ?>

	<div class="title-header">
		<h2>Welcome</h2>
	</div>

	<main class="playground">
		<section>
			<div class="card-row">
				<div class="card cover" style="background-image: url('resources/images/jordan_and_marcie.jpg');">
					<span>Myself and Marcie</span>
				</div>
			</div>
			<div class="info-box active">
				<div class="title">My name is Jordan Elliot Finch.</div>
				<div class="content">
					<p>
						I'm a full-stack developer residing in England. I have a range of experience with various frameworks and tech stacks and currently work as a Ruby on Rails developer.
						<br/><br/>
						Feel free to take a look through my portfolio and check out the projects I've worked on in the past!
					</p>
				</div>
			</div>
		</section>
	</main>

	<?php require("modules/footer.php"); ?>
</body>
</html>