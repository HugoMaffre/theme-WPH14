<?php
/**
 * The template for displaying pages
 Template Name: mentionslegales
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage ThemeWPH14
 * @since ThemeWPH14 1.0
 */

get_header(); ?>
<div class="bodypage">
	<div id="bandeau-actu">
	    <div id="blackVeilbandeau">
            <div class="titreItalic">Mentions légales</div>
	    </div>
	</div>
	<div class="clear"></div>
	<div id="bandeauAriane">Accueil  »  <strong class="uppercase">Mentions légales</strong></div>
	<section id="mentions_legales">
		<?php the_field('mentions_legales'); ?>
	</section>
</div>
<?php get_footer(); ?>