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

<body <?php body_class('font-sans text-xl'); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="masthead" class="site-header">

			<nav id="site-navigation" class="main-navigation px-4">
				<div class="flex justify-between items-center">
					<div class="site-branding">
						<h1 class="accent-text site-title font-['Satisfy'] font-bold py-7 text-3xl md:text-4xl lg:text-5xl">
							<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
						</h1>
					</div>

					<?php wp_nav_menu(array('theme_location'  => 'menu-1', 'container_class' => 'menu-container-desktop')); ?>

					<div id="toggle" class="md:hidden">
						<i class="fas fa-bars"></i>
					</div>
				</div>

				<?php wp_nav_menu(array('theme_location'  => 'menu-1', 'container_class' => 'menu-container-mobile')); ?>
			</nav>

			<div id="hero" class="section grid grid-cols-1 md:grid-cols-12 gap-x-4 items-center">
				<div class="mb-6 md:mb-0 md:col-span-8">
					<h2 class="text-3xl font-bold mb-2">Hi, my name is</h2>
					<h1 class="text-4xl font-extrabold mb-6"><span class="accent-text"><?php echo get_theme_mod('lucianovanderveekens_theme_hero_name', 'Luciano van der Veekens'); ?></span>.</h1>
					<h3 class="text-2xl mb-6"><?php echo get_theme_mod('lucianovanderveekens_theme_hero_description', 'I\'m a software engineer specializing in architecting, creating, testing and maintaining back-end applications.'); ?></h3>
					<a class="cta px-8 py-5" href="#contact">Contact Me</a>
				</div>
				<div class="w-2/3 md:w-full mx-auto md:col-span-3 md:col-start-10">
					<img class="aspect-square object-cover" src=<?php echo get_theme_mod('lucianovanderveekens_theme_hero_image') ?> alt="Hero image">
				</div>
			</div>

		</header>