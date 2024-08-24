<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lucianovanderveekens-theme
 */

?>

<footer id="colophon" class="site-footer text-center text-sm py-8">
	<p><?php echo get_theme_mod('lucianovanderveekens_theme_footer_text', 'Designed and built by Luciano van der Veekens'); ?></p>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>