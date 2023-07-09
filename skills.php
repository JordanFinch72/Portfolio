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
	<script src="resources/js/playground.js"></script>
	<title>Jordan Elliot Finch - Skills</title>
</head>
<body>
	<?php require("modules/header.php") ?>

	<div class="title-header">
		<h2>Skills</h2>
	</div>

	<main class="playground">
		<section>
			<div class="card-row">
				<span class="arrow"><</span>
				<div class="card active" id="rails" style="background-image: url('resources/images/skills/ruby.png')">
					<span>Ruby on Rails</span>
				</div>
				<div class="card" id="react" style="background-image: url('resources/images/skills/react.png')">
					<span>React</span>
				</div>
				<div class="card" id="node" style="background-image: url('resources/images/skills/node_js.png')">
					<span>Node.js</span>
				</div>
				<span class="arrow">></span>
			</div>
			<div class="info-box active" id="rails">
				<div class="title">
					Ruby on Rails
				</div>
				<div class="content">
					<p>
						Since 2022 I've been working with Ruby on Rails and have fully fallen in love with the technology. I have experience with many core Rails gems and features (e.g the asset pipeline) and have worked with too many project-specific, third-party gems to count. <br /><br />
						I also have experience with deploying Rails projects through Heroku, Cloud66, and AWS.
						<br /><br />
					</p>
					Specific skills:
					<ul>
						<li>Greenfield project design and implementation</li>
						<li>Working with third-party gems (e.g. Devise)</li>
						<li>I've actually read the <a href="https://guides.rubyonrails.org" target="_blank">Rails Guides</a> documentation in its entirety. Honest.</li>
					</ul>
				</div>
			</div>
			<div class="info-box" id="react">
				<div class="title">
					React
				</div>
				<div class="content">
					<p>
						I have 1-2 years' experience in React, having used it for my university thesis project (LEMA) as part of the MERN stack (for which I won an award from the respected Institution of Analysts and Programmers), as well as at my current job.
						<br /><br />
						Additionally, I used React for any other project that I could while at university, finding it to be a great way to rapidly develop front-end web applications.
					</p>
				</div>
			</div>
			<div class="info-box" id="node">
				<div class="title">
					Node.js
				</div>
				<div class="content">
					<p>
						Node.js is steadily becoming an inextricable tool of the modern web developer, and is utilised by tech stacks such as Ruby on Rails, MERN, and many more.
						<br /><br />
						As one might expect, I've spent most of the last 4 years working with Node.js in some capacity, having used it for my current job, as well as as many university projects as possible and some hobby projects.
					</p>
				</div>
			</div>
		</section>
	</main>

	<?php require("modules/footer.php"); ?>
</body>
</html>