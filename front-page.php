<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lucianovanderveekens-theme
 */

get_header();
?>

<main id="primary" class="site-main">

	<div id="about" class="container mx-auto px-4 md:mt-36">
		<h1 class="text-4xl font-bold text-blue">About</h1>
		<div class="grid grid-cols-1 sm:grid-cols-12 gap-4 items-center justify-items-center md:mt-20">
			<div class="sm:col-span-4">
				<img src=<?php echo get_template_directory_uri() . "/images/luciano2.jpeg" ?> alt="Luciano">
			</div>
			<div class="sm:col-span-7 sm:col-start-6 whitespace-pre-line">
				Hello! My name is Luciano and I enjoy building complex systems and the challenges that come with it. I’ve studied Computer Science at Utrecht University and I’m currently helping customers buy their groceries online at Albert Heijn.

				My main interests are sofware architecture and writing clean code.

				Here's a list featuring the technologies I'm most comfortable with:
				<div class="flex flex-wrap">
					<ul class="block colored-bullets">
						<li>Java</li>
						<li>Kotlin</li>
						<li>Go</li>
						<li>Spring Boot</li>
					</ul>
					<ul class="block colored-bullets">
						<li>Docker</li>
						<li>Kubernetes</li>
						<li>Postgres</li>
						<li>MongoDB</li>
					</ul>
					<ul class="block colored-bullets">
						<li>Git</li>
						<li>Maven</li>
						<li>Jenkins</li>
						<li>Linux</li>
					</ul>
				</div>

				<!-- <h2 class="text-4xl font-bold">Hi, my name is</h2>
				<h1 class="text-5xl font-extrabold"><span class="text-orange">Luciano van der Veekens</span>.</h1>
				<h3 class="text-2xl">I’m a software engineer specializing in architecting, creating, testing and maintaining back-end applications.</h3> -->
			</div>
		</div>
	</div>

	<div id="experience" class="container mx-auto px-4 md:mt-36">
		<h1 class="text-4xl font-bold text-blue">Experience</h1>
		<div>
			<div class="grid grid-cols-1 sm:grid-cols-12 gap-4 md:my-20">
				<div class="col-span-3">
					<img class="experience-logo" src=<?php echo get_template_directory_uri() . "/images/ah-logo.png" ?> alt="Luciano">
					<div class="font-bold">Software Engineer</div>
					<div>Albert Heijn</div>
					<div>Sep 2018 - Present</div>
					<div>Zaandam, Netherlands</div>
				</div>
				<div class="whitespace-pre-line sm:col-span-9 sm:col-start-4">I started out in a small team working on Albert Heijn for the Google Assistant which allowed customers to use their voice to, for example, search for recipes or add products to their shopping list.

					Eventually that team grew and became responsible for setting up a digital AI assistant to automatically handle customer support queries or, in case it couldn’t figure out the customer’s intent, hand over the conversation to a human agent.

					Technoglogies: Java - Kotlin - Spring Boot - Docker - Kubernetes - Postgres - MongoDB - Kafka
				</div>
			</div>

			<hr class="text-orange">

			<div class="grid grid-cols-1 sm:grid-cols-12 gap-4 md:my-20">
				<div class="col-span-3">
					<img class="experience-logo" src=<?php echo get_template_directory_uri() . "/images/bol-com-logo.png" ?> alt="Luciano">
					<div class="font-bold">Software Engineer</div>
					<div>bol.com</div>
					<div>Jan 2018 - Jul 2018</div>
					<div>Utrecht, Netherlands</div>
				</div>
				<div class="whitespace-pre-line sm:col-span-9 sm:col-start-4">At bol.com I joined a team in the purchasing domain. Among other things our applications were used to manage warehouse replenishment according to some forecast.

					Technologies: Kotlin - Spring Boot - Docker - Postgres
				</div>
			</div>

			<hr class="text-orange">

			<div class="grid grid-cols-1 sm:grid-cols-12 gap-4 md:my-20">
				<div class="col-span-3">
					<div class="experience-logo">
						<img src=<?php echo get_template_directory_uri() . "/images/netinium-logo.png" ?> alt="Luciano">
					</div>
					<div class="font-bold">Software Engineer</div>
					<div>Netinium</div>
					<div>Mar 2015 - Dec 2017</div>
					<div>Wormer, Netherlands</div>
				</div>
				<div class="whitespace-pre-line sm:col-span-9 sm:col-start-4">I began my career at Netinium, a small but innovative company that develops a single piece of software for energy providers to manage different types of smart electricity and gas meters.

					Part of my day-to-day work included writing code to communicate with those smart meters using a standardized (Dutch) Smart Meter Requirement protocol.

					Technologies: Java - Java EE - Oracle WebLogic Server - Oracle DB - Linux
				</div>
			</div>
		</div>
	</div>

	<div id="contact" class="container mx-auto px-4 md:mt-36">
		<h1>Contact</h1>
	</div>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
