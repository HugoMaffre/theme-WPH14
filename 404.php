<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package  ThemeWPH14
 * @since    1.0.0
 *
 */

get_header(); ?>
<div class="bodypage">
	<div id="bandeau-actu">
	    <div id="blackVeilbandeau">

	    </div>
	</div>
	<div class="clear"></div>
	<div id="bandeauAriane">Accueil  »  <strong class="uppercase"><?php echo($pagename); ?></strong></div>
	<section id="pagenotfound">
		<h1>Page non trouvée</h1><br/><br/>
		<p>Désolé, cette page n'existe pas sur ce site</p><br/><br/>
		<a href="<?php echo site_url(); ?>" class="bouton-slider">Retour à l'accueil<i class="fa fa-chevron-right" id="chevron-bouton" aria-hidden="true"></i></a>
	</section>
</div>
<?php get_footer(); ?>
