<?php
/**
 * The template for the sidebar containing the main widget area.
 *
 * @package  ThemeWPH14
 * @since    1.0.0
 *
 */
?>
<?php if ( is_active_sidebar( 'Main Sidebar' ) ) : ?>
	<section id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'Main Sidebar' ); ?>
	</section><!-- #secondary -->
<?php endif; ?>
