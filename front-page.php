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

	<div id="about-section" class="">
		<h1>About</h1>
	</div>

	<div id="experience-section" class="">
		<h1>Experience</h1>
	</div>

	<div id="contact-section" class="">
		<h1>Contact</h1>
	</div>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
