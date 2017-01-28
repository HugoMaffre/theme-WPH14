<?php
/**
 * The template for displaying the header.
 *
 * @package  ThemeWPH14
 * @since    1.0.0
 *
 */
?>
<!doctype html>
<head>
<!--[if lt IE 7 ]> <html class="no-js ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]> <html class="no-js ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]> <html class="no-js ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

	

	<meta name="author" content="<?php the_author_meta( 'display_name', 1 ); ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">


	<!--<script src="https://use.fontawesome.com/67c5576e4f.js"></script>-->

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php



	// Default theme stylesheet
	//wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );


	wp_head();
?>
</head>
<body <?php echo body_class(); ?>>
<div id="header" role="banner" class="main-header">
	<div class="header-inner">
		<div id="menu" class="non-scrolled">
			<nav class="header-nav">
					<div id="logo">
						<a href="<?php echo site_url(); ?>" class="linkLogo">
							<img src="http://arkadia.digital/Aroma/wp-content/uploads/2016/12/logoAroma.png" style="opacity:1;"><br/>
						</a>
					</div>
				<div id="navRight" class="bounceInRight animated">
					<?php wp_nav_menu( array( 'theme_location' => 'TopRight' ) ); ?>
				</div>
				
				<div class="show_hide_menu js-menu">
					<i class="fa fa-bars hamburger-menu toggleMenu" aria-hidden="true"></i>
					<i class="fa fa-times cross toggleMenu" aria-hidden="true"></i>
				</div>
			</nav>
			<div class="hide_anim"></div>
		</div>
		<div id="Stickymenu" class="scrolled">
			<nav class="header-nav">
					<div id="logo-sticky" class="flipInX animated">
						<a href="<?php echo site_url(); ?>" class="linkLogo">
							<img src="http://arkadia.digital/Aroma/wp-content/uploads/2016/12/logoAroma.png" style="opacity:1;"><br/>
						</a>
						<br/>
					</div>
				<div id="navRight-sticky" class="bounceInRight animated">
					<?php wp_nav_menu( array( 'theme_location' => 'TopRight' ) ); ?>
				</div>
				
				<div class="show_hide_menu_sticky  js-menu">
					<i class="fa fa-bars hamburger-menu toggleMenu" aria-hidden="true"></i>
					<i class="fa fa-times cross toggleMenu" aria-hidden="true"></i>
				</div>
			</nav>
			<div class="hide_anim"></div>
		</div>
	</div>
</div>




<div id="menu-mobile" class="bounceInRight animated">
	<nav id="nav-menu-mobile">
		<a href="<?php echo site_url(); ?>">Accueil</a><br>
		<a href="<?php echo site_url(); ?>/la-pizzeria/">La pizzeria</a><br>
		<a href="<?php echo site_url(); ?>/la-carte/">la carte</a><br>
		<a href="<?php echo site_url(); ?>/actualites/">Actualités</a><br>
		<a href="<?php echo site_url(); ?>/contact/">contactez-nous</a><br>
		<a href="<?php echo site_url(); ?>/plan-du-site/">plan du site</a><br>
		<a href="<?php echo site_url(); ?>/mentions-legales/">mentions légales</a>
	</nav>
</div>

<div class="clear"></div>