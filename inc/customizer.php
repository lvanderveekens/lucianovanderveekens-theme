<?php

/**
 * lucianovanderveekens-theme Theme Customizer
 *
 * @package lucianovanderveekens-theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function lucianovanderveekens_theme_customize_register($wp_customize)
{
	$wp_customize->get_setting('blogname')->transport         = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	if (isset($wp_customize->selective_refresh)) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'lucianovanderveekens_theme_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'lucianovanderveekens_theme_customize_partial_blogdescription',
			)
		);
	}

	// remove defaults
	$wp_customize->remove_section('colors');
	$wp_customize->remove_section('header_image');
	$wp_customize->remove_section('background_image');
	$wp_customize->remove_section('static_front_page');

	// remove_theme_mod('lucianovanderveekens_theme_primary_color');
	// remove_theme_mod('lucianovanderveekens_theme_accent_color');

	$wp_customize->add_section('lucianovanderveekens_theme_colors', array(
		'title'    => 'Colors',
		'priority' => 30,
	));
	$wp_customize->add_setting('lucianovanderveekens_theme_navbar_color', array(
		'default'   => '#fff',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lucianovanderveekens_theme_navbar_color', array(
		'label'    => 'Navbar color',
		'section'  => 'lucianovanderveekens_theme_colors',
		'settings' => 'lucianovanderveekens_theme_navbar_color',
	)));
	$wp_customize->add_setting('lucianovanderveekens_theme_background_color', array(
		'default'   => '#ffffff',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lucianovanderveekens_theme_background_color', array(
		'label'    => 'Background color',
		'section'  => 'lucianovanderveekens_theme_colors',
		'settings' => 'lucianovanderveekens_theme_background_color',
	)));
	$wp_customize->add_setting('lucianovanderveekens_theme_primary_color', array(
		'default'   => '#FF1900',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lucianovanderveekens_theme_primary_color', array(
		'label'    => 'Primary color',
		'section'  => 'lucianovanderveekens_theme_colors',
		'settings' => 'lucianovanderveekens_theme_primary_color',
	)));
	$wp_customize->add_setting('lucianovanderveekens_theme_accent_color', array(
		'default'   => '#47FFFF',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lucianovanderveekens_theme_accent_color', array(
		'label'    => 'Accent color',
		'section'  => 'lucianovanderveekens_theme_colors',
		'settings' => 'lucianovanderveekens_theme_accent_color',
	)));
	$wp_customize->add_setting('lucianovanderveekens_theme_text_color', array(
		'default'   => '#000000',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lucianovanderveekens_theme_text_color', array(
		'label'    => 'Text color',
		'section'  => 'lucianovanderveekens_theme_colors',
		'settings' => 'lucianovanderveekens_theme_text_color',
	)));

	$wp_customize->add_section('lucianovanderveekens_theme_hero', array(
		'title'    => 'Hero',
		'priority' => 40,
	));
	$wp_customize->add_setting('lucianovanderveekens_theme_hero_name', array(
		'default'           => 'Luciano van der Veekens',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'lucianovanderveekens_theme_hero_name', array(
		'label'    => 'Hero name',
		'section'  => 'lucianovanderveekens_theme_hero',
		'settings' => 'lucianovanderveekens_theme_hero_name',
		'type'     => 'text'
	)));
	$wp_customize->add_setting('lucianovanderveekens_theme_hero_description', array(
		'default'           => 'I\'m a software engineer specializing in architecting, creating, testing and maintaining back-end applications.',
		'sanitize_callback' => 'sanitize_textarea_field'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'lucianovanderveekens_theme_hero_description', array(
		'label'    => 'Hero description',
		'section'  => 'lucianovanderveekens_theme_hero',
		'settings' => 'lucianovanderveekens_theme_hero_description',
		'type'     => 'textarea'
	)));
	$wp_customize->add_setting('lucianovanderveekens_theme_hero_image', array(
		'default'           => get_template_directory_uri() . '/images/luciano3.jpeg',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'lucianovanderveekens_theme_hero_image', array(
		'label'    => 'Hero image',
		'section'  => 'lucianovanderveekens_theme_hero',
		'settings' => 'lucianovanderveekens_theme_hero_image'
	)));

	$wp_customize->add_section('lucianovanderveekens_theme_about', array(
		'title'    => 'About',
		'priority' => 50,
	));

	$wp_customize->add_section('lucianovanderveekens_theme_contact', array(
		'title'    => 'Contact',
		'priority' => 60,
	));

	$wp_customize->add_section('lucianovanderveekens_theme_footer', array(
		'title'    => 'Footer',
		'priority' => 70,
	));
	$wp_customize->add_setting('lucianovanderveekens_theme_footer_text', array(
		'default'           => 'Designed and built by Luciano van der Veekens',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'lucianovanderveekens_theme_footer_text', array(
		'label'    => 'Footer text',
		'section'  => 'lucianovanderveekens_theme_footer',
		'settings' => 'lucianovanderveekens_theme_footer_text',
		'type'     => 'text'
	)));
}
add_action('customize_register', 'lucianovanderveekens_theme_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function lucianovanderveekens_theme_customize_partial_blogname()
{
	bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function lucianovanderveekens_theme_customize_partial_blogdescription()
{
	bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function lucianovanderveekens_theme_customize_preview_js()
{
	wp_enqueue_script('lucianovanderveekens-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), _S_VERSION, true);
}
add_action('customize_preview_init', 'lucianovanderveekens_theme_customize_preview_js');

if (class_exists('Kirki')) {
	Kirki::add_config('base', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'theme_mod',
		'option_name'   => 'base',
	));

	Kirki::add_field('base', array(
		'type'        => 'editor',
		'settings'    => 'lucianovanderveekens_theme_about_description',
		'label'       => __('About description', 'base'),
		'section'     => 'lucianovanderveekens_theme_about',
		'default'     => 'Hello! My name is Luciano and I enjoy building complex systems and the challenges that come with it. I’ve studied Computer Science at Utrecht University and I’m currently helping customers buy their groceries online at Albert Heijn.',
	));

	Kirki::add_field('base', array(
		'type'        => 'editor',
		'settings'    => 'lucianovanderveekens_theme_contact_description',
		'label'       => __('Contact description', 'base'),
		'section'     => 'lucianovanderveekens_theme_contact',
		'default'     => "Whether you got some questions or business opportunities for me, or you just want to say hi, don't hesitate to reach out!\n\nI'm available on some of the social networks, but you can also send an email to <a class=\"text-link\" href=\"mailto:lucianovanderveekens@gmail.com\">lucianovanderveekens@gmail.com</a>.\n\nI'll try my best to get back to you.",
	));
}
