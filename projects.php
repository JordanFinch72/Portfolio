<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="theme-color" content="#FFCC00" /> <!-- TODO: Check that this doesn't look abysmal -->
	<!-- TODO: Metadata: descriptions, etc. -->
	<link rel="stylesheet" type="text/css" href="resources/css/main.css" />
	<link rel="stylesheet" type="text/css" href="resources/css/playground.css" />
	<script src="resources/js/playground.js"></script>
	<title>Jordan Elliot Finch - Projects</title>
</head>
<body>
	<?php require("modules/header.php") ?>

	<div class="title-header">
		<h2>Projects</h2>
	</div>

	<main class="playground">
		<section>
			<div class="card-row">
				<div class="card active" id="bhma" style="background-image: url('https://placekitten.com/300/250')">
					<span>Bath Historical Martial Arts</span>
				</div>
				<div class="card" id="lema" style="background-image: url('https://placekitten.com/300/250')">
					<span>LEMA: Linguistic Etymology Map Assistant</span>
				</div>
				<div class="card" id="io" style="background-image: url('https://placekitten.com/300/250')">
					<span>Into Oblivion</span>
				</div>
			</div>
			<div class="info-box active" id="bhma">
				<div class="title">
					Bath Historical Martial Arts
					<a href="https://bath-hema.com" target="_blank">https://bath-hema.com</a>
				</div>
				<div class="content">
					<p>
						In 2023, I developed a website for my local Historical European Martial Arts (HEMA) club in Ruby on Rails. The site makes use of a bespoke admin-side CMS to display information about the club to users, using Ruby on Rails "site objects" to render information such as instructors, fighting styles, and courses that are offered by the club. <br /><br />
						In addition, the website features a blog and will soon feature a gallery, with more features well on the way!
					</p>
				</div>
			</div>
			<div class="info-box" id="lema">
				<div class="title">
					LEMA: Linguistic Etymology Map Assistant
					<a href="https://lema-tool.herokuapp.com" target="_blank">https://lema-tool.herokuapp.com</a>
				</div>
				<div class="content">
					<p>
						In 2022, as part of my thesis project for (BSc) Computing and Software Development, I developed an <a href="https://www.iap.org.uk/main/the-iap-prize/" target="_blank">award-winning</a> tool inspired by the <a href='https://www.reddit.com/r/etymologymaps/' target='_blank'>/r/etymologymaps</a> subreddit. Made in collaboration with the kind creator of <a href="https://etymologyexplorer.com" target='_blank'>Etymology Explorer</a>, this tool allows users to enter any word they can think of and see the etymology of that word be displayed on a map of the world before their very eyes!
						<br /><br />
						The users could then use the tool to tweak the map to their liking, by changing the size, labels, and colours of the nodes. They could also export or import the maps (in image and data form) for sharing. In addition, there is also a "community" feature of the tool that allows people to share the maps they've made.
						<br /><br />
						This was coded in React and Express.js, using a PouchDB document-based database for storing users' map data.
						<br /><br />
						The site is live but currently in a limited state, but I heartily encourage you to check out the <a href="https://youtu.be/7k8QdBcTOe0" target="_blank">demonstration video</a> to see it in all its glory!
					</p>
				</div>
			</div>
			<div class="info-box" id="io">
				<div class="title">
					Into Oblivion
					<a href="https://intooblivion.co.uk" target="_blank">https://intooblivion.co.uk</a>
				</div>
				<div class="content">
					<p>
						Long ago, my friend and I were playing a Dungeons and Dragons-esque game with each other online, when he had the idea that I should make our virtual world into reality into a game. Thus, this side-project of mine was born. This project has been on-and-off since about 2015 and was written in raw JavaScript and PHP with a custom, RESTful API and MySQL database.
						<br /><br />
						It has a fair bit of content, but is also largely a playground for me to play around with new versions of web technologies as they emerge; and to practise new design patterns as I learn about them.
						<br /><br />
						Specific features:
					</p>
					<ul>
						<li>A huge PHP back-end, handling data processing and security via a bespoke RESTful API</li>
						<li>Heavy use of JavaScript to handle the game, including:
							<ul>
								<li>AJAX, for calling API endpoints without disrupting gameplay</li>
								<li>Seamless navigation</li>
								<li>Inventory handling</li>
								<li>Combat handling</li>
								<li>Quest handling</li>
								<li>Dialogue and NPC/event interaction</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</section>
	</main>

	<?php require("modules/footer.php"); ?>
</body>
</html>