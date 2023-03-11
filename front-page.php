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
		<div class="grid grid-cols-1 md:grid-cols-12 gap-x-4">
			<div class="mb-20 md:col-span-5">
				<div class="font-bold">Who?</div>
				<div class="whitespace-pre-line">
					<?php echo get_theme_mod('lucianovanderveekens_theme_about_description', 'Hello! My name is Luciano and I enjoy building complex systems and the challenges that come with it. I\'ve studied Computer Science at Utrecht University and I\'m currently helping customers buy their groceries online at Albert Heijn.'); ?>
				</div>
			</div>
			<div class="md:col-span-5 md:col-start-8">
				<div class="font-bold mb-7">Skills</div>
				<div class="grid" style="grid-template-columns: min-content auto;">
					<div class="mr-4 whitespace-nowrap">
						<div>Java</div>
						<div>Kotlin</div>
						<div>Spring Boot</div>
						<div>Go</div>
						<div>Docker</div>
						<div>Kubernetes</div>
						<div>Postgres</div>
						<div>MongoDB</div>
						<div>Kafka</div>
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
						<div class="flex items-center" style="padding: 9px 0;">
							<div class="inline-block w-full h-2.5" style="background-color: #D9D9D9;">
								<div class="bg-black h-full" style="width: 80%;"></div>
							</div>
						</div>
						<div class="flex items-center" style="padding: 9px 0;">
							<div class="inline-block w-full h-2.5" style="background-color: #D9D9D9;">
								<div class="bg-black h-full" style="width: 50%;"></div>
							</div>
						</div>
						<div class="flex items-center" style="padding: 9px 0;">
							<div class="inline-block w-full h-2.5" style="background-color: #D9D9D9;">
								<div class="bg-black h-full" style="width: 70%;"></div>
							</div>
						</div>
						<div class="flex items-center" style="padding: 9px 0;">
							<div class="inline-block w-full h-2.5" style="background-color: #D9D9D9;">
								<div class="bg-black h-full" style="width: 70%;"></div>
							</div>
						</div>
						<div class="flex items-center" style="padding: 9px 0;">
							<div class="inline-block w-full h-2.5" style="background-color: #D9D9D9;">
								<div class="bg-black h-full" style="width: 60%;"></div>
							</div>
						</div>
						<div class="flex items-center" style="padding: 9px 0;">
							<div class="inline-block w-full h-2.5" style="background-color: #D9D9D9;">
								<div class="bg-black h-full" style="width: 60%;"></div>
							</div>
						</div>
						<div class="flex items-center" style="padding: 9px 0;">
							<div class="inline-block w-full h-2.5" style="background-color: #D9D9D9;">
								<div class="bg-black h-full" style="width: 50%;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="experience" class="section">
		<h1><span>Experience</span></h1>
		<div class="grid gap-x-4 grid-cols-1 md:grid-cols-12">
			<div class="mb-20 md:mb-0 flex md:col-span-5 lg:col-span-4">
				<div style="margin-top: 4px; margin-right: 2.5rem;">
					<?php $the_query = new WP_Query(array('post_type' => 'experience', 'orderby' => 'menu_order')); ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<?php $index = $the_query->current_post ?>
						<?php $is_last_post = $index + 1 == $the_query->post_count ?>

						<div class="hover:cursor-pointer" onclick="selectExperience(<?php echo $index; ?>)" data-experience-index="<?php echo $index; ?>">
							<div class="dot"></div>
						</div>
						<?php if (!$is_last_post) { ?>
							<div class="line"></div>
						<?php } ?>

					<?php endwhile;
					wp_reset_postdata(); ?>
				</div>
				<div class="">
					<?php $the_query = new WP_Query(array('post_type' => 'experience', 'orderby' => 'menu_order')); ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<?php $index = $the_query->current_post ?>
						<?php $is_last_post = $index + 1 == $the_query->post_count ?>

						<div class="experience-name hover:cursor-pointer" style="<?php echo (!$is_last_post ? 'margin-bottom: 32px;' : ''); ?>" onclick="selectExperience(<?php echo $index; ?>)" data-experience-index="<?php echo $index; ?>">
							<span class="">
								<?php the_field('employer-name'); ?>
							</span>
						</div>
					<?php endwhile;
					wp_reset_postdata(); ?>
				</div>
			</div>
			<div class="md:col-start-6 md:col-span-7 lg:col-start-5 lg:col-span-8">
				<?php
				$the_query = new WP_Query(array('post_type' => 'experience', 'orderby' => 'menu_order'));
				?>
				<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
					<div class="experience" data-experience-index="<?php echo $the_query->current_post; ?>">
						<div class="flex">
							<div class="shrink-0 mr-8" style="width: 75px;">
								<div class="aspect-ratio-box">
									<?php $image_id = get_field('employer-image'); ?>
									<?php $image = wp_get_attachment_image_src($image_id, 'full'); ?>
									<?php $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true); ?>
									<img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
								</div>
							</div>

							<div class="">
								<div>
									<div>
										<?php the_field('role'); ?> <span class="font-bold">@ <?php the_field('employer-name'); ?></span>
									</div>
									<div>
										<?php the_field('when'); ?>
									</div>
									<div>
										<?php the_field('location'); ?>
									</div>

								</div>
							</div>
						</div>
						<br>
						<div class="whitespace-pre-line"><?php the_field('summary'); ?></div>
						<div class="whitespace-pre-wrap" style="color: #00000060;"><?php the_field('technologies'); ?></div>
					</div>
				<?php endwhile;
				wp_reset_postdata(); ?>
			</div>
		</div>
	</div>

	<div id="projects" class="section">
		<h1><span>Projects</span></h1>
		<?php
		$the_query = new WP_Query(array('post_type' => 'project', 'orderby' => 'menu_order'));
		?>
		<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
			<?php $index = $the_query->current_post ?>
			<?php $is_even_index = $index % 2 == 0 ?>

			<div class="project grid grid-cols-1 md:grid-cols-12 gap-x-4 grid-flow-dense">
				<div class="mb-20 md:mb-0 <?php echo $is_even_index ? 'md:col-span-5' : 'md:col-start-7 md:col-span-6' ?>">
					<div class="text-2xl font-bold">
						<?php echo get_the_title(); ?>
					</div>
					<div class="whitespace-pre-line">
						<?php the_field('description'); ?>
					</div>
					<div class="whitespace-pre-wrap" style="color: #00000060;"><br><?php the_field('technologies'); ?></div>
					<?php if (get_field('github_link') || get_field('app_store_link')) : ?>
						<br>
						<div class="flex">
							<?php if (get_field('app_store_link')) : ?>
								<div class="mr-4">
									<a href="<?php the_field('app_store_link') ?>" target="_blank">
										<img style="height: 46px;" src="<?php echo get_template_directory_uri(); ?>/images/app-store-badge.svg" alt="App Store badge">
									</a>
								</div>
							<?php endif ?>
							<?php if (get_field('github_link')) : ?>
								<div>
									<a href="<?php the_field('github_link') ?>" target="_blank">
										<img style="height: 46px;" src="<?php echo get_template_directory_uri(); ?>/images/github-icon.svg" alt="GitHub icon">
									</a>
								</div>
							<?php endif ?>
						</div>
					<?php endif ?>
				</div>
				<div class="flex <?php echo $is_even_index ? 'md:col-start-7 md:col-span-6' : 'md:col-span-5' ?>">
					<div class="w-full">
						<?php $image_id = get_field('image_1'); ?>
						<?php $image = wp_get_attachment_image_src($image_id, 'full'); ?>
						<?php $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true); ?>
						<img class="w-full" src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
					</div>
					<?php if (get_field('image_2')) : ?>
						<div class="ml-4 w-full">
							<?php $image_id = get_field('image_2'); ?>
							<?php $image = wp_get_attachment_image_src($image_id, 'full'); ?>
							<?php $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true); ?>
							<img class="w-full" src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
						</div>
					<?php endif ?>
				</div>
			</div>
		<?php endwhile;
		wp_reset_postdata(); ?>
	</div>
	</div>

	<div id="contact" class="section">
		<h1><span>Contact</span></h1>

		<div class="grid grid-cols-1 md:grid-cols-12 gap-x-4 items-center justify-items-center">

			<div class="md:col-span-6 mb-20 md:mb-0 whitespace-pre-line"><?php echo get_theme_mod('lucianovanderveekens_theme_contact_description', "Whether you got some questions or business opportunities for me, or you just want to say hi, don't hesitate to reach out!\n\nI'm available on some of the social networks, but you can also send an email to <a class=\"text-link\" href=\"mailto:lucianovanderveekens@gmail.com\">lucianovanderveekens@gmail.com</a>.\n\nI'll try my best to get back to you."); ?></div>

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
