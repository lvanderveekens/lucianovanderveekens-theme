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

<body <?php body_class('bg-base1-100'); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'lucianovanderveekens-theme'); ?></a>

		<header id="masthead" class="site-header">

			<nav id="site-navigation" class="main-navigation bg-base2-100">

				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				</div><!-- .site-branding -->

				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'lucianovanderveekens-theme'); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'menu-1',
						'menu_id'         => 'primary-menu',
						'container_class' => 'primary-menu-container',
					)
				);
				?>
			</nav><!-- #site-navigation -->

			<div id="hero-section">
				<h1>Hero</h1>
			</div>

		</header><!-- #masthead -->