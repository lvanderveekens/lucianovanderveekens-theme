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
</head>

<body <?php body_class('bg-base03 font-sans text-base0 text-xl'); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="masthead" class="site-header">

			<nav id="site-navigation" class="main-navigation bg-base02 flex justify-between items-center text-base0-100">
				<div class="site-branding">
					<h1 class="site-title text-orange text-4xl font-bold py-7">
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
					</h1>
				</div>

				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'menu-1',
						'container_class' => 'menu-container',
					)
				);
				?>
			</nav>

			<div id="hero-section">
				<h1>Hero</h1>
			</div>

		</header>