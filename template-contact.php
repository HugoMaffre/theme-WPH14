<?php
/**
 * The template for displaying pages
 Template Name: contact
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
<div id="bandeau-contact">
    <div id="blackVeilbandeau">
    	<div class="titreItalic"> Venez découvrir de nouvelles saveurs </div>
		<div class="titre">autour d'une de nos pizzas</div>
    </div>
</div>
    <div class="clear"></div>
    <div id="bandeauAriane">Accueil  »  <strong class="uppercase"><?php echo($pagename); ?></strong></div>
<div id="contact">
	    <div class="paragraphe" style="width:100%">
	        <div class="titrePage">
	            <?php the_field('titre_pg_contact');?>
	        </div>

	        <div class="soustitrePage">
	            <?php the_field('sous_titre_pg_contact');?>
	        </div>
	        <p class="ParagPage">
	            <?php the_field('texte_pg_contact');?>
	        </p>
	    </div>
    <?php
        gravity_form( 1, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = true, 1, $echo = true );
    ?>
</div>

</div>

	<?php get_footer(); ?>

