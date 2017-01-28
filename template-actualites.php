<?php
/**
 * The template for displaying pages
 Template Name: actualites
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
<div id="bandeau-actu">
    <div id="blackVeilbandeau">
		<div class="titreItalic">C'est l'amour de la pizza</div>
		<div class="titre">au coeur d'arômes simples<br/>et d'une pâte d'exception</div>
    </div>
</div>
<div class="clear"></div>
<div id="bandeauAriane">Accueil  »  <strong class="uppercase"><?php echo($pagename); ?></strong></div>

<div id="bg-actu">
	<div id="bg-actu-image">
		<section id="main-pageActu">
			<div class="clear"></div>
			<div id="categoryTitles_actu">
				<div id="catActu01"><a class="bouton-category" id="LienActu01">Les nouveautés</a></div>
				<div id="catActu02"><a class="bouton-category" id="LienActu02">La pizzeria</a></div>
				<div id="catActu03"><a class="bouton-category" id="LienActu03">Les événements</a></div>
				<div id="catActu04"><a class="bouton-category" id="LienActu04" >Tous les articles</a></div>
			</div>
			<div id="actu01">
				<?php 
				// the query
				$args=array(
					'showposts' => 5,
					'cat'=> 3,
					'orderby'  => 'date', 
		           	'order'  => 'desc',
		           	'post per page' =>'3'
				);

				$the_query = new WP_Query($args ); ?> 
				<?php if ( $the_query->have_posts() ) : ?>

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
					echo '<div class="thumbail-actu" style="' . $style . '"></div>';
				?>
				<div class="apercu-pageActu">
					<div class="smalltitrePost"><?php the_title(); ?></div>
					<h3>
						<div class="hack"><?php the_category(); ?></div> | Publié le <?php echo get_the_date(); ?>
					</h3>
					
					<div class="excerpt" style="height:110px;overflow: hidden;">
						<p><?php the_excerpt() ?></p>
					</div>
					
					<a href="<?php the_permalink()?>" class="bouton-slider ActuLink">Voir l'article
					<i class="fa fa-chevron-right" id="chevron-bouton" aria-hidden="true"></i></a><br/><br/><br/><br/>
				</div>
				<div class="clear"></div>
				<?php wp_reset_query(); ?>
				<?php endwhile; ?>
				<?php else : ?>
					<p id="msg_actu"><?php _e( 'Pas encore d\'article dans cette catégorie' ); ?></p>
				<?php endif;?>
			</div>

			<div id="actu02">
				<?php 
				// the query
				$args=array(
					'showposts' => 5,
					'cat'=> 4,
					'orderby'  => 'date', 
		           	'order'  => 'desc',
		           	'post per page' =>'3'
				);

				$the_query = new WP_Query($args ); ?> 
				<?php if ( $the_query->have_posts() ) : ?>

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
						echo '<div class="thumbail-actu" style="' . $style . '"></div>';
					?>
					<div class="apercu-pageActu">
						<div class="smalltitrePost"><?php the_title(); ?></div>
						<h3>
							<div class="hack"><?php the_category(); ?></div> | Publié le <?php echo get_the_date(); ?>
						</h3>
						
						<div class="excerpt" style="height:110px;overflow: hidden;">
							<p><?php the_excerpt() ?></p>
						</div>
						
					<a href="<?php the_permalink()?>" class="bouton-slider ActuLink">Voir l'article
					<i class="fa fa-chevron-right" id="chevron-bouton" aria-hidden="true"></i></a><br/><br/><br/><br/>
					</div>
					<div class="clear"></div>
					<?php wp_reset_query(); ?>
				<?php endwhile; ?>
				<?php else : ?>
					<p id="msg_actu"><?php _e( 'Pas encore d\'article dans cette catégorie' ); ?></p>
				<?php endif;?>
			</div>

			<div id="actu03">
				<?php 
				// the query
				$args=array(
					'showposts' => 5,
					'cat'=> 5,
					'orderby'  => 'date', 
		           	'order'  => 'desc',
		           	'post per page' =>'3'
				);

				$the_query = new WP_Query($args ); ?> 
				<?php if ( $the_query->have_posts() ) : ?>

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
						echo '<div class="thumbail-actu" style="' . $style . '"></div>';
					?>
					<div class="apercu-pageActu">
						<div class="smalltitrePost"><?php the_title(); ?></div>
						<h3>
							<div class="hack"><?php the_category(); ?></div> | Publié le <?php echo get_the_date(); ?>
						</h3>
						
						<div class="excerpt" style="height:110px;overflow: hidden;">
							<p><?php the_excerpt() ?></p>
						</div>
				
					<a href="<?php the_permalink()?>" class="bouton-slider ActuLink">Voir l'article
					<i class="fa fa-chevron-right" id="chevron-bouton" aria-hidden="true"></i></a><br/><br/><br/><br/>
					</div>
					<div class="clear"></div>
					<?php wp_reset_query(); ?>
				<?php endwhile; ?>
				<?php else : ?>
					<p id="msg_actu"><?php _e( 'Pas encore d\'article dans cette catégorie' ); ?></p>
				<?php endif;?>
			</div>

			<div id="actu04">
				<?php
				$nb = 3;
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => $nb,
					'paged' => $paged,
				);
				$query = new WP_Query( $args );
				if ( $query->have_posts() ) { ?>
						<?php
						while ( $query->have_posts() ) {
							$query->the_post();
							?>
						 <div class="hide">
			                <?php
			                    //.the_post_thumbnail().
			                    $thumb_id = get_post_thumbnail_id();
			                    $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
			                ?>
			            </div>
			            <?php
			                $style='background-image: url('.$thumb_url[0].');';
			                echo '<div class="thumbail-actu" style="' . $style . '"></div>';
			            ?>
			            <div class="apercu-pageActu">
			                <div class="smalltitrePost"><?php the_title(); ?></div>
			                <h3>
			                    <div class="hack"><?php the_category(); ?></div> | Publié le <?php echo get_the_date(); ?>
			                </h3>
			                
			                <div class="excerpt" style="height:110px;overflow: hidden;">
			                	<p><?php the_excerpt() ?></p>
			                </div>
			            
					<a href="<?php the_permalink()?>" class="bouton-slider ActuLink">Voir l'article
					<i class="fa fa-chevron-right" id="chevron-bouton" aria-hidden="true"></i></a><br/><br/><br/><br/>
			            </div>
		            	<div class="clear"></div>
					<?php
					} // endwhile ?>

					<div class="cd-pagination">
						<div class="cd-pagination-prev">
							<?php previous_posts_link( 'PR&Eacute;C&Eacute;DENT' ); ?>
						</div>
						<?php
							halles_pagination( $query->max_num_pages, '', $paged );
						?>
						<div class="cd-pagination-next">
							<?php next_posts_link( 'SUIVANT', $query->max_num_pages ); ?>
						</div>
					</div>
					<?php
						wp_reset_postdata();
						} else { ?>
								<div class="actus-posts columns is-multiline">
						<p id="msg_actu"><?php _e( 'Sorry, no posts matched your criteria.'); ?></p>
								</div>
						<?php
						} // endif
					?>
				</div>
		</section>
	</div>
</div>
<?php get_footer(); ?>