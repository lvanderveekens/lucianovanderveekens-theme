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

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-VYPF1G6EZB"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-VYPF1G6EZB');
	</script>
</head>

<body <?php body_class('font-sans text-xl'); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="masthead" class="site-header">

			<nav id="site-navigation" class="main-navigation px-4">
				<div class="flex justify-between items-center">
					<div class="site-branding">
						<h1 class="site-title font-bold py-7 md:text-xl lg:text-2xl">
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
				<div class="mb-12 md:mb-0 md:col-span-8">
					<h2 class="text-4xl font-bold mb-7">Hi, I'm <?php echo get_theme_mod('lucianovanderveekens_theme_hero_name', 'Luciano van der Veekens');?>.</h2>
					<h3 class="text-2xl mb-12"><?php echo get_theme_mod('lucianovanderveekens_theme_hero_description', 'I\'m a freelance software engineer'); ?></h3>
					<a class="cta px-6 py-4" href="#contact">Get in touch</a>
				</div>
				<div class="w-2/3 md:w-full mx-auto md:col-span-4 md:col-start-9">
					<div class="aspect-ratio-box">
						<img class="object-cover" src="<?php echo get_theme_mod('lucianovanderveekens_theme_hero_image', get_template_directory_uri() . '/images/luciano1.jpeg') ?>" alt="Hero image">
					</div>
				</div>
			</div>

		</header>