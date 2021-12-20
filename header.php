<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lucianovanderveekens-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<script src="https://kit.fontawesome.com/c7a5ab81d1.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class('bg-base03 font-sans text-base0 text-xl'); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="masthead" class="site-header">

			<nav id="site-navigation" class="main-navigation bg-base02 text-base0-100">
				<div class="flex justify-between items-center">
					<div class="site-branding">
						<h1 class="site-title text-orange text-xl font-bold py-7 sm:text-4xl">
							<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
						</h1>
					</div>

					<?php wp_nav_menu(array('theme_location'  => 'menu-1', 'container_class' => 'menu-container-desktop')); ?>

					<div id="toggle" class="sm:hidden">
						<i class="fas fa-bars"></i>
					</div>
				</div>

				<?php wp_nav_menu(array('theme_location'  => 'menu-1', 'container_class' => 'menu-container-mobile')); ?>
			</nav>

			<div id="hero-section" class="grid grid-cols-1 sm:grid-cols-12 gap-4 items-center">
				<div class="sm:col-span-7">
					<h2 class="text-4xl font-bold">Hi, my name is</h2>
					<h1 class="text-5xl font-extrabold"><span class="text-orange">Luciano van der Veekens</span>.</h1>
					<h3 class="text-2xl">I’m a software engineer specializing in architecting, creating, testing and maintaining back-end applications.</h3>
				</div>
				<div class="sm:col-span-4 sm:col-start-9">
					<img src=<?php echo get_template_directory_uri() . "/images/luciano.jpeg" ?> alt="Luciano">
				</div>
			</div>

		</header>