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

	<div id="about" class="section">
		<h1>About</h1>
		<div class="grid grid-cols-1 md:grid-cols-12 gap-x-4 items-center justify-items-center">
			<div class="w-2/3 md:w-full mx-auto mb-6 md:mb-0 md:col-span-4">

				<div class="aspect-ratio-box">
					<img class="object-cover" src=<?php echo get_template_directory_uri() . "/images/luciano4.jpeg" ?> alt="Luciano">
				</div>

			</div>
			<div class="md:col-span-7 md:col-start-6">
				Hello! My name is Luciano and I enjoy building complex systems and the challenges that come with it. I’ve studied Computer Science at Utrecht University and I’m currently helping customers buy their groceries online at Albert Heijn.
				<br><br>
				My main interests are sofware architecture and writing clean code.
				<br><br>
				Here's a list featuring the technologies I'm most comfortable with:
				<div class="flex flex-wrap">
					<ul>
						<li>Java</li>
						<li>Kotlin</li>
						<li>Go</li>
						<li>Spring Boot</li>
					</ul>
					<ul>
						<li>Docker</li>
						<li>Kubernetes</li>
						<li>Postgres</li>
						<li>MongoDB</li>
					</ul>
					<ul>
						<li>Git</li>
						<li>Maven</li>
						<li>Jenkins</li>
						<li>Linux</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="experience" class="section">
		<h1>Experience</h1>
		<div>
			<div class="grid grid-cols-1 md:grid-cols-12 gap-x-4 my-12 md:my-20">
				<div class="md:col-span-4 lg:col-span-3 mb-6 md:mb-0 flex md:block">
					<div class="flex items-center shrink-0 w-1/4 md:w-2/5 my-auto mr-6 md:ml-10 md:mb-8">
						<div class="aspect-ratio-box">
							<img src=<?php echo get_template_directory_uri() . "/images/ah-logo.png" ?> alt="Luciano">
						</div>
					</div>
					<div>
						<span class="font-bold">Software Engineer</span><br>
						Albert Heijn<br>
						Sep 2018 - Present<br>
						Zaandam, Netherlands<br>
					</div>
				</div>
				<div class="md:col-span-8 md:col-start-5 lg:col-span-9 lg:col-start-4">
					I started out in a small team working on Albert Heijn for the Google Assistant which allowed customers to use their voice to, for example, search for recipes or add products to their shopping list.
					<br><br>
					Eventually that team grew and became responsible for setting up a digital AI assistant to automatically handle customer support queries or, in case it couldn’t figure out the customer’s intent, hand over the conversation to a human agent.
					<br><br>
					Technoglogies: Java - Kotlin - Spring Boot - Docker - Kubernetes - Postgres - MongoDB - Kafka
				</div>
			</div>

			<hr class="text-base0">

			<div class="grid grid-cols-1 md:grid-cols-12 gap-x-4 my-12 md:my-20">
				<div class="md:col-span-4 lg:col-span-3 mb-6 md:mb-0 flex md:block">
					<div class="flex items-center shrink-0 w-1/4 md:w-2/5 my-auto mr-6 md:ml-10 md:mb-8">
						<div class="aspect-ratio-box">
							<img class="experience-logo" src=<?php echo get_template_directory_uri() . "/images/bol-com-logo.png" ?> alt="Luciano">
						</div>
					</div>
					<div>
						<span class="font-bold">Software Engineer</span><br>
						bol.com<br>
						Jan 2018 - Jul 2018<br>
						Utrecht, Netherlands
					</div>
				</div>
				<div class="md:col-span-8 md:col-start-5 lg:col-span-9 lg:col-start-4">
					At bol.com I joined a team in the purchasing domain. Among other things our applications were used to manage warehouse replenishment according to some forecast.
					<br><br>
					Technologies: Kotlin - Spring Boot - Docker - Postgres
				</div>
			</div>

			<hr class="text-base0">

			<div class="grid grid-cols-1 md:grid-cols-12 gap-x-4 my-12 md:my-20">
				<div class="md:col-span-4 lg:col-span-3 mb-6 md:mb-0 flex md:block">
					<div class="flex items-center shrink-0 w-1/4 md:w-2/5 my-auto mr-6 md:ml-10 md:mb-8">
						<div class="aspect-ratio-box">
							<img src=<?php echo get_template_directory_uri() . "/images/netinium-logo.png" ?> alt="Luciano">
						</div>
					</div>
					<div>
						<span class="font-bold">Software Engineer</span><br>
						Netinium<br>
						Mar 2015 - Dec 2017<br>
						Wormer, Netherlands
					</div>
				</div>
				<div class="md:col-span-8 md:col-start-5 lg:col-span-9 lg:col-start-4">
					I began my career at Netinium, a small but innovative company that develops a single piece of software for energy providers to manage different types of smart electricity and gas meters.
					<br><br>
					Part of my day-to-day work included writing code to communicate with those smart meters using a standardized (Dutch) Smart Meter Requirement protocol.
					<br><br>
					Technologies: Java - Java EE - Oracle WebLogic Server - Oracle DB - Linux
				</div>
			</div>
		</div>
	</div>

	<div id="contact" class="section">
		<h1>Contact</h1>

		<div class="grid grid-cols-1 md:grid-cols-12 gap-x-4 items-center justify-items-center">
			<div class="md:col-span-6 mb-12 md:mb-0">
				Whether you got some questions or business opportunities for me, or you just want to say hi, don't hesitate to reach out!
				<br><br>
				I'm available on some of the social networks, but you can also send an email to <a class="text-link" href="mailto:lucianovanderveekens@gmail.com">lucianovanderveekens@gmail.com</a>.
				<br><br>
				I'll try my best to get back to you.
			</div>
			<div class="md:col-span-5 md:col-start-8 w-full flex justify-between">
				<a class="social-logo" href="https://twitter.com/lvanderveekens">
					<?php echo file_get_contents(get_template_directory_uri() . '/images/twitter-logo.svg'); ?>
				</a>
				<a class="social-logo" href="https://www.instagram.com/lvanderveekens">
					<?php echo file_get_contents(get_template_directory_uri() . '/images/instagram-logo.svg'); ?>
				</a>
				<a class="social-logo" href="https://github.com/lvanderveekens">
					<?php echo file_get_contents(get_template_directory_uri() . '/images/github-logo.svg'); ?>
				</a>
			</div>
		</div>
	</div>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
