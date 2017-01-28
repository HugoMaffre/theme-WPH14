<?php
/**
 * The template for displaying pages
 Template Name: home
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
<!-- slide d'accueil -->
	<section class="slide" id="accueil">
		<div class="slideshow">
			<div id="TopLeft-one">
				<div class="blackVeil"> <!-- voile noir sur l'image -->
					<h1><?php the_field('titre_ligne_1_slide1'); ?><br/><?php the_field('titre_ligne_2_slide1'); ?></h1>
					<div class="P_width_70">
						<?php the_field('paragraphe_slide1'); ?>
					</div>	<br/>
					<a href="<?php echo site_url(); ?>/la-pizzeria" class="bouton-slider">Découvrir notre histoire <i class="fa fa-chevron-right" id="chevron-bouton" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</section>

	<!-- LES TROIS DIVS SOUS LE SLIDER ACCUEIL -->
	<section class="slide" id="second-slide">
		<div class="fond_three" id="fond_three_left">
			<div id="home_rect_left" class="home_rect"> <!-- rectangle à gauche -->
				<h3>La pizza du moment</h3>
				<h2><?php the_field('titre_rect_gauche'); ?></h2>
				<div class="P_width_30">
					<?php the_field('texte_rect_gauche'); ?>
				</div>
				<a href="<?php echo site_url(); ?>/la-carte" class="bouton-slider">Commandez nos pizzas <i class="fa fa-chevron-right" id="chevron-bouton" aria-hidden="true">
				</i></a>
			</div>
		</div>
		<div class="fond_three" id="fond_three_center">
			<div id="home_rect_center" class="home_rect"> <!-- rectangle au milieu -->
				<h3>Le plat du moment</h3>
				<h2><?php the_field('titre_rect_center'); ?></h2>
				<div class="P_width_30">
					<?php the_field('texte_rect_center'); ?>
				</div>
				<a href="<?php echo site_url(); ?>/la-carte" class="bouton-slider">Commandez nos pizzas <i class="fa fa-chevron-right" id="chevron-bouton" aria-hidden="true">
				</i></a>
			</div>
		</div>
		<div class="fond_three" id="fond_three_right">
			<div id="home_rect_right" class="home_rect"> <!-- rectangle à droite -->
				<h3>Le menu du moment</h3>
				<h2><?php the_field('titre_rect_right'); ?></h2>
				<div class="P_width_30">
				<?php the_field('texte_rect_right'); ?>
				</div>
				<a href="<?php echo site_url(); ?>/la-carte" class="bouton-slider">Commandez nos pizzas <i class="fa fa-chevron-right" id="chevron-bouton" aria-hidden="true">
				</i></a>
			</div>
		</div>

	<!-- les deux en dessous -->
			<div id="MiddleLeft">
				<div id="bgMiddleLeft"><!-- rectangle en haut à droite -->
					<h3 style="font-size:23px;font-weight: bold"><?php the_field('titre_rect_visite'); ?></h3>
					<h2 style="font-size:23px;font-weight: 100;line-height: 20px;"><?php the_field('sous_titre_rect_visite'); ?></h2><br/>
					<p class="P_width_30">
						<strong><?php the_field('horaires_rect_visite_1'); ?></strong><br/>
						<?php the_field('horaires_rect_visite_2'); ?><br/><br/>
						<strong>Notre adresse :</strong><br/>
						<?php the_field('adresse_rect_visite'); ?>
					</p><br/>
					<a href="https://www.google.fr/maps/place/Aroma+Pizza/@45.1974335,5.7369771,18.25z/data=!4m5!3m4!1s0x0:0x37bce77bc0ad691a!8m2!3d45.1970229!4d5.7355767" class="bouton-slider" target="_blank">Rendez-nous visite<i class="fa fa-chevron-right" id="chevron-bouton" aria-hidden="true">
					</i></a>
				</div>
			</div>
			<div id="MiddleRight"><!-- rectangle en haut à gauche -->
				<div id="Veil-MiddleRight"><!-- voile noir sur l'image -->
					<div class="titreItalic">C'est l'amour de la pizza</div>
					<div class="titre">au coeur d'arômes simples<br/>et d'une pâte d'exception</div>
				</div>
			</div>

		</section>
		<div class="clear"></div>
		<!-- LE SLIDE 3 -->
		<!-- le slide d'actualité -->
		<section class="slide" id="Actu">
		<div id="bg-actu-image-home">
				
					<div id="titleActu">		
						<div class="titreItalic">Suivez l'actualité de nos produits</div>
					</div>	
					<div class="clear"></div>
					<!-- catégories -->
					<div id="categoryTitles">
							<a href="<?php echo site_url(); ?>/actualites" class="bouton-category" id="catleft">Les nouveautés</a>
							<a href="<?php echo site_url(); ?>/actualites" class="bouton-category" id="catmiddle">La pizzeria</a>		
							<a href="<?php echo site_url(); ?>/actualites" class="bouton-category" id="catright">Les événements</a>
							<a href="<?php echo site_url(); ?>/actualites" class="bouton-category" id="catright-resp">Toutes les actualités</a>
					</div>
					<div id="main-slideActu">
						<div class="wrapper_slides">
						<!-- ///////////////////////// ZONE D'ARTICLE ////////////////////-->
							<?php 
							// the query
							$args=array(
								'showposts' => 1,
								'orderby'  => 'date', 
	           					'order'  => 'desc',
							);

							$the_query = new WP_Query($args ); ?> 

							<?php if ( $the_query->have_posts() ) : ?>

								<!-- pagination here -->

								<!-- the loop -->
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<div class="hide">
									<?php 
										//.the_post_thumbnail().
										$thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
									?>
								</div>
								<?php
										$style='background-image: url('.$thumb_url[0].');';
										echo '<div class="thumbail" style="' . $style . '"></div>';
								?>

								<div class="apercu">
									<div class="smalltitrePost"><?php the_title(); ?></div>
									<h3>
										<div class="hack"><?php the_category(); ?> |</div> Publié le <?php echo get_the_date(); ?>
									</h3>
									<div class="excerpt" style="height:120px;overflow: hidden;">
										<p><?php the_excerpt(); ?></p>
									</div>
									<?php endwhile; ?>
									
									<a href="<?php the_permalink()?>" class="bouton-slider ActuLink">Voir l'article<i class="fa fa-chevron-right" id="chevron-bouton" aria-hidden="true">
									</i></a>
								</div>

							<?php wp_reset_postdata(); ?>
							<div class="clear"></div>
								
						<?php else : ?>
							<p><?php _e( 'Pas encore d\'articles' ); ?></p>
						<?php endif; ?>			
					</div>
					<a href="<?php echo site_url(); ?>/actualites" class="bouton-category" id="actu_button_responsive">Toutes les actualités</a>
					</div>
				</section>

		<!-- La carte de google (avec sont script) -->
		<div id="map"></div>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
		<script type="text/javascript">
			// When the window has finished loading create our google map below
			google.maps.event.addDomListener(window, 'load', init);

			function init() {
				// Basic options for a simple Google Map
				// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions


  				var myLatLng = {lat: 45.197454, lng: 5.735566};
				var mapOptions = {
					// How zoomed in you want the map to start at (always required)
					zoom: 17,
					disableDefaultUI: true,
					zoomControl: true,
					scrollwheel:  false,
					scaleControl: true,
					streetViewControl: false,

					// The latitude and longitude to center the map (always required)
					center: myLatLng,
					styles:  
						[
						    {
						        "featureType": "administrative",
						        "elementType": "labels.text.fill",
						        "stylers": [
						            {
						                "color": "#444444"
						            }
						        ]
						    },
						    {
						        "featureType": "landscape",
						        "elementType": "all",
						        "stylers": [
						            {
						                "color": "#faf8ea"
						            }
						        ]
						    },
						    {
						        "featureType": "poi",
						        "elementType": "all",
						        "stylers": [
						            {
						                "visibility": "off"
						            }
						        ]
						    },
						    {
						        "featureType": "road",
						        "elementType": "all",
						        "stylers": [
						            {
						                "saturation": -100
						            },
						            {
						                "lightness": 45
						            }
						        ]
						    },
						    {
						        "featureType": "road.highway",
						        "elementType": "all",
						        "stylers": [
						            {
						                "visibility": "simplified"
						            }
						        ]
						    },
						    {
						        "featureType": "road.arterial",
						        "elementType": "labels.icon",
						        "stylers": [
						            {
						                "visibility": "off"
						            }
						        ]
						    },
						    {
						        "featureType": "transit",
						        "elementType": "all",
						        "stylers": [
						            {
						                "visibility": "on"
						            }
						        ]
						    },
						    {
						        "featureType": "transit",
						        "elementType": "geometry.fill",
						        "stylers": [
						            {
						                "visibility": "on"
						            },
						            {
						                "color": "#f56000"
						            }
						        ]
						    },
						    {
						        "featureType": "water",
						        "elementType": "all",
						        "stylers": [
						            {
						                "visibility": "on"
						            }
						        ]
						    }
						]
				};

				// Get the HTML DOM element that will contain your map 
				// We are using a div with id="map" seen below in the <body>
				var mapElement = document.getElementById('map');

				// Create the Google Map using our element and options defined above
				var map = new google.maps.Map(mapElement, mapOptions);

				  var image = {
				    url: 'http://arkadia.digital/Aroma/wp-content/uploads/2017/01/Ellipse-Aroma.png',
				    // This marker is 20 pixels wide by 32 pixels high.
				    size: new google.maps.Size(100, 100),
				    // The origin for this image is (0, 0).
				    origin: new google.maps.Point(0, 0),
				    // The anchor for this image is the base of the flagpole at (0, 32).
				    anchor: new google.maps.Point(60, 0)
				  };



				  var marker = new google.maps.Marker({
				    position: myLatLng,
				    map: map,
				    icon : image,
				    title: 'Aroma'
				  });

				marker.setMap(map);

			}

		</script>
<?php get_footer(); ?>
