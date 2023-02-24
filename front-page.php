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
		<h1><span>About</span></h1>
		<div class="grid grid-cols-12 gap-x-4">
			<div class="col-span-5">
				<div class="font-bold">Who?</div>
				<div class="whitespace-pre-line">
					<?php echo get_theme_mod('lucianovanderveekens_theme_about_description', 'Hello! My name is Luciano and I enjoy building complex systems and the challenges that come with it. I\'ve studied Computer Science at Utrecht University and I\'m currently helping customers buy their groceries online at Albert Heijn.'); ?> 
				</div>
			</div>
			<div class="col-span-5 col-start-8">
				<span class="font-bold">Skills</span>
				<div class="grid" style="grid-template-columns: min-content auto;">
					<div class="mr-4">
						<div>Java</div>
						<div>Go</div>
					</div>
					<div>
						<div class="flex items-center" style="padding: 9px 0;">
							<div class="inline-block w-full h-2.5" style="background-color: #D9D9D9;">
								<div class="bg-black h-full" style="width: 80%;"></div>
							</div>
						</div>
						<div class="flex items-center" style="padding: 9px 0;">
							<div class="inline-block w-full h-2.5" style="background-color: #D9D9D9;">
								<div class="bg-black h-full" style="width: 80%;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="experience" class="section">
		<h1><span>Experience</span></h1>
		<div>
			<?php
			$the_query = new WP_Query(array('post_type' => 'experience', 'orderby' => 'menu_order'));
			?>
			<?php if ($the_query->have_posts()) : ?>
				<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
					<div class="grid grid-cols-1 md:grid-cols-12 gap-x-4 my-12 md:my-20">
						<div class="md:col-span-4 lg:col-span-3 mb-6 md:mb-0 flex md:block">
							<div class="flex items-center shrink-0 w-1/4 md:w-2/5 my-auto mr-6 md:ml-10 md:mb-8">
								<div class="aspect-ratio-box">
									<?php $image_id = get_field('employer-image'); ?>
									<?php $image = wp_get_attachment_image_src($image_id, 'full'); ?>
									<?php $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true); ?>

									<img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
								</div>
							</div>
							<div>
								<span class="font-bold"><?php the_field('role'); ?></span><br>
								<?php the_field('employer-name'); ?><br>
								<?php the_field('when'); ?><br>
								<?php the_field('location'); ?><br>
							</div>
						</div>
						<div class="md:col-span-8 md:col-start-5 lg:col-span-9 lg:col-start-4">
							<?php the_field('summary'); ?>
						</div>
					</div>

					<?php
					if ($the_query->current_post + 1 != $the_query->post_count) { ?>
						<!-- this is not the last post -->
						<hr class="text-base0">
					<?php } ?>

				<?php endwhile;
				wp_reset_postdata(); ?>
			<?php else : ?>
				<p><?php _e('No experience found! Add them in the WP Admin Dashboard.'); ?></p>
			<?php endif; ?>
		</div>
	</div>

	<div id="contact" class="section">
		<h1><span>Contact</span></h1>

		<div class="grid grid-cols-1 md:grid-cols-12 gap-x-4 items-center justify-items-center">

			<div class="md:col-span-6 mb-12 md:mb-0 whitespace-pre-line"><?php echo get_theme_mod('lucianovanderveekens_theme_contact_description', "Whether you got some questions or business opportunities for me, or you just want to say hi, don't hesitate to reach out!\n\nI'm available on some of the social networks, but you can also send an email to <a class=\"text-link\" href=\"mailto:lucianovanderveekens@gmail.com\">lucianovanderveekens@gmail.com</a>.\n\nI'll try my best to get back to you."); ?></div>

			<div class="md:col-span-5 md:col-start-8 w-full flex justify-between">
				<?php
				$the_query = new WP_Query(array('post_type' => 'social', 'orderby' => 'menu_order'));
				?>
				<?php if ($the_query->have_posts()) : ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<a class="social-logo" href="<?php echo get_field('url') ?>">
							<?php $image_id = get_field('icon'); ?>
							<?php $image = wp_get_attachment_image_src($image_id, 'full'); ?>
							<?php $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true); ?>

							<img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
						</a>
					<?php endwhile;
					wp_reset_postdata(); ?>
				<?php else : ?>
					<p><?php _e('No socials found! Add them in the WP Admin Dashboard.'); ?></p>
				<?php endif; ?>

			</div>
		</div>
	</div>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
