<?php

/**
 * lucianovanderveekens-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lucianovanderveekens-theme
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('lucianovanderveekens_theme_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lucianovanderveekens_theme_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on lucianovanderveekens-theme, use a find and replace
		 * to change 'lucianovanderveekens-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('lucianovanderveekens-theme', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'lucianovanderveekens-theme'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		// add_theme_support(
		// 	'custom-background',
		// 	apply_filters(
		// 		'lucianovanderveekens_theme_custom_background_args',
		// 		array(
		// 			'default-color' => 'ffffff',
		// 			'default-image' => '',
		// 		)
		// 	)
		// );

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'lucianovanderveekens_theme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lucianovanderveekens_theme_content_width()
{
	$GLOBALS['content_width'] = apply_filters('lucianovanderveekens_theme_content_width', 640);
}
add_action('after_setup_theme', 'lucianovanderveekens_theme_content_width', 0);

function theme_get_customizer_css()
{
	ob_start();

	$navbar_color = get_theme_mod('lucianovanderveekens_theme_navbar_color', '#ffffff');
	if (!empty($navbar_color)) {
?>
		nav, footer {
		background-color: <?php echo $navbar_color; ?>;
		}
	<?php
	}

	$background_color = get_theme_mod('lucianovanderveekens_theme_background_color', '#ffffff');
	if (!empty($background_color)) {
	?>
		body {
		background-color: <?php echo $background_color; ?>;
		}

		@media (hover: hover) {
			.cta:hover {
				color: <?php echo $background_color; ?>;
			}
		}
	<?php
	}

	$accent_color = get_theme_mod('lucianovanderveekens_theme_accent_color', '#FF0000');
	if (!empty($accent_color)) {
	?>
		.section > h1 > span {
			border-bottom: 4px solid <?php echo $accent_color; ?>;
			padding-bottom: 8px;
		}

		.accent-text {
			color: <?php echo $accent_color; ?>;
		}

		.cta {
			border: 4px solid <?php echo $accent_color; ?>;
			border-radius: 10px;
		}

		@media (hover: hover) {
			.cta:hover {
				background-color: <?php echo $accent_color; ?>;
			}
		}

		.site-title a:hover {
			color: <?php echo $accent_color; ?>;
		}

		.menu-container-desktop > ul > li > a:hover {
			color: <?php echo $accent_color; ?>;
		}

		a.text-link {
			color: <?php echo $accent_color; ?>;
			border-bottom: 1px solid <?php echo $accent_color; ?>;
		}

	<?php
	}

	$text_color = get_theme_mod('lucianovanderveekens_theme_text_color', '#000000');
	if (!empty($text_color)) {
	?>
		body {
		color: <?php echo $text_color; ?>;
		}

<?php
	}

	$css = ob_get_clean();
	return $css;
}

/**
 * Enqueue scripts and styles.
 */
function lucianovanderveekens_theme_scripts()
{
	wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/css/tailwind.prod.css', array(), filemtime(get_template_directory() . '/css/tailwind.prod.css'), 'all');

	$custom_css = theme_get_customizer_css();
	wp_add_inline_style('tailwindcss', $custom_css);

	wp_enqueue_style('google-fonts-raleway', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap', false);

	wp_enqueue_script('lucianovanderveekens-theme-app-js', get_template_directory_uri() . '/js/app.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('lucianovanderveekens-theme-navigation-js', get_template_directory_uri() . '/js/navigation.js', array('jquery'), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}	
}

add_action('wp_enqueue_scripts', 'lucianovanderveekens_theme_scripts');

function register_custom_post_types()
{
	register_post_type(
		'experience',
		array(
			'labels' => array(
				'name' => __('Experience'),
				'singular_name' => __('Experience')
			),
			'supports' => array(
				'title',
				'custom-fields',
				'page-attributes',
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'experience'),
			'show_in_rest' => true,
			'menu_icon' => 'dashicons-businessman',
		)
	);
	register_post_type(
		'social',
		array(
			'labels' => array(
				'name' => __('Socials'),
				'singular_name' => __('Social')
			),
			'supports' => array(
				'title',
				'custom-fields',
				'page-attributes',
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'social'),
			'show_in_rest' => true,
			'menu_icon' => 'dashicons-instagram',
		)
	);
	register_post_type(
		'project',
		array(
			'labels' => array(
				'name' => __('Projects'),
				'singular_name' => __('Project')
			),
			'supports' => array(
				'title',
				'custom-fields',
				'page-attributes',
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'project'),
			'show_in_rest' => true,
			'menu_icon' => 'dashicons-palmtree',
		)
	);
}
// Hooking up our function to theme setup
add_action('init', 'register_custom_post_types');

function change_columns($cols)
{
	$cols = array(
		'cb'         => '<input type="checkbox" />',
		'title'      => 'Title',
		'date'       => 'Date',
		'order'      => 'Order',
	);
	return $cols;
}
add_filter("manage_experience_posts_columns", "change_columns");
add_filter("manage_social_posts_columns", "change_columns");

function custom_columns($column)
{
	global $post;
	if ($column == 'order') {
		echo $post->menu_order;
	}
}
add_action("manage_experience_posts_custom_column", "custom_columns", 10, 2);
add_action("manage_social_posts_custom_column", "custom_columns", 10, 2);

// Generated using ACF plugin
if (function_exists('acf_add_local_field_group')) :

	acf_add_local_field_group(array(
		'key' => 'group_61e321b46c4d2',
		'title' => 'Experience field group',
		'fields' => array(
			array(
				'key' => 'field_61e321c36d0ef',
				'label' => 'Employer name',
				'name' => 'employer-name',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_61e323201d695',
				'label' => 'Employer image',
				'name' => 'employer-image',
				'type' => 'image',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'id',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_61e3227598dc3',
				'label' => 'Role',
				'name' => 'role',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_61e3227e98dc4',
				'label' => 'When',
				'name' => 'when',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_61e322a198dc5',
				'label' => 'Location',
				'name' => 'location',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_61e32417deeb9',
				'label' => 'Summary',
				'name' => 'summary',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 0,
				'delay' => 0,
			),
			array(
				'key' => 'field_63fa0fcb125cf',
				'label' => 'Technologies',
				'name' => 'technologies',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'experience',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));

	acf_add_local_field_group(array(
		'key' => 'group_61e85c07e5776',
		'title' => 'Social field group',
		'fields' => array(
			array(
				'key' => 'field_61e85c4c6ae5a',
				'label' => 'Icon',
				'name' => 'icon',
				'type' => 'image',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'id',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_61e85c0d6ae59',
				'label' => 'URL',
				'name' => 'url',
				'type' => 'url',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'social',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));

	acf_add_local_field_group(array(
		'key' => 'group_63fcfe8d20ccd',
		'title' => 'Project field group',
		'fields' => array(
			array(
				'key' => 'field_63fd004b70e8e',
				'label' => 'Description',
				'name' => 'description',
				'aria-label' => '',
				'type' => 'textarea',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'rows' => '',
				'placeholder' => '',
				'new_lines' => '',
			),
			array(
				'key' => 'field_63fd003370e8d',
				'label' => 'Technologies',
				'name' => 'technologies',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_63fcfe8d70e8b',
				'label' => 'GitHub link',
				'name' => 'github_link',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_63fd002870e8c',
				'label' => 'App Store link',
				'name' => 'app_store_link',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'maxlength' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_63fd005d70e8f',
				'label' => 'Image 1',
				'name' => 'image_1',
				'aria-label' => '',
				'type' => 'image',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'id',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
				'preview_size' => 'medium',
			),
			array(
				'key' => 'field_63fd008570e90',
				'label' => 'Image 2',
				'name' => 'image_2',
				'aria-label' => '',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'id',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
				'preview_size' => 'medium',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'project',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));

endif;

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// TODO: do not use in production
// function liveReload(){
// 	echo '<script>document.write(\'<script src="http://\' + (location.host || \'localhost\').split(\':\')[0] +\':35729/livereload.js?snipver=1"></\' + \'script>\')</script>';
// }
// add_action('wp_footer', 'liveReload', 100);