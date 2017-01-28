<?php
/**
 * The template for displaying pages
 Template Name: paragraph-gallery
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage WPH14
 * @since WPH14 1.0
 */

get_header(); ?>


<div class="bodypage">
    <div id="bandeau-lapizzeria">
        <div id="blackVeilbandeau">
            <div class="titreItalic">C'est l'amour de la pizza</div>
            <div class="titre">au coeur d'arômes simples<br/>et d'une pâte d'exception</div>
        </div>
    </div>
    <div class="clear"></div>
    <div id="bandeauAriane">Accueil  »  <strong class="uppercase">La pizzeria</strong></div>

    <div class="paragraphe" style="padding-top:130px;">
        <div class="titrePage">
            <?php the_field('titre_parag_1_pizzeria');?>
        </div>

        <div class="soustitrePage">
            <?php the_field('sous_titre_parag_1_pizzeria');?>
        </div>
        <p class="ParagPage">
            <?php the_field('texte_parag_1_pizzeria');?>
        </p>
    </div>
    <section class="gallery" data-chocolat-title="gallery-left">
        <div class="box-gallery-left">
            <a id="single_image" href="<?php the_field('img_left');?>" class="chocolat-image">
                <div class="thumbail-gallery" id="thumbail-gallery-left-lapizzeria" style="background-image:url('<?php the_field('img_left');?>');">
                    <div class="hover-gallery">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                </div>
            </a>
            <a id="single_image" href="<?php the_field('img_left');?>" class="chocolat-image">
                Agrandir l'image
            </a>
        </div>
        <div class="box-gallery-center">
            <a id="single_image" href="<?php the_field('img_center');?>" class="chocolat-image">
                <div class="thumbail-gallery" id="thumbail-gallery-center-lapizzeria" style="background-image:url('<?php the_field('img_center');?>');">
                    <div class="hover-gallery">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                </div> 
            </a>          
            <a id="single_image" href="<?php the_field('img_center');?>" class="chocolat-image">
                Agrandir l'image
            </a>
        </div>
        <div class="box-gallery-right">
             <a id="single_image" href="<?php the_field('img_right');?>" class="chocolat-image">
            <div class="thumbail-gallery" id="thumbail-gallery-right-lapizzeria" style="background-image:url('<?php the_field('img_right');?>');">
                <div class="hover-gallery">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
            </div>
            </a>
            <a id="single_image" href="<?php the_field('img_right');?>" class="chocolat-image">
                Agrandir l'image
            </a>
        </div>
        <div class="clear"></div>
    </section>

    <div class="paragraphe">
        <div class="titrePage">
            <?php the_field('titre_parag_2_pizzeria');?>
        </div>

        <div class="soustitrePage">
            <?php the_field('sous_titre_parag_2_pizzeria');?>
        </div>
        <p class="ParagPage">
            <?php the_field('texte_parag_2_pizzeria');?>
        </p>
    </div>




    <div class="paragraphe">
        <div class="titrePage">
            <?php the_field('titre_parag_3_pizzeria');?>
        </div>

        <div class="soustitrePage">
            <?php the_field('sous_titre_parag_3_pizzeria');?>
        </div>
        <p class="ParagPage">
            <?php the_field('texte_parag_3_pizzeria');?>
        </p>
    </div>

    <div class="paragraphe">
        <div class="titrePage">
            <?php the_field('titre_parag_4_pizzeria');?>
        </div>

        <div class="soustitrePage">
            <?php the_field('sous_titre_parag_4_pizzeria');?>
        </div>
        <p class="ParagPage">
            <?php the_field('texte_parag_4_pizzeria');?>
        </p>
    </div>
    <section id="labels">

        <div id="logosLabels"> 
                <?php
                ////////////////////////////// a c f ////////////////////////*/
                
                    // Contrôle si le repeater a des champs
                    if( have_rows('labels') ):
                        // boucle sur les champs du repeater
                            while ( have_rows('labels') ) : the_row();
                                    // affichage des sous-champs
                                    ?>
                                    <div class="logoLabel"><a href="<?php the_sub_field('lien_du_label');?>" target="blank"><img src="<?php the_sub_field('logo_du_label');?>"/></div></a>
                    <?php
                            endwhile;
                    else :
                            // pas de champs Repeater
                            echo "pas de champs Repeater dans le coin !";
                    endif;
                ?>   
        </div>
    </section>    

    <div class="paragraphe">
        <div class="titrePage">
            <?php the_field('titre_parag_5_pizzeria');?>
        </div>

        <div class="soustitrePage">
            <?php the_field('sous_titre_parag_5_pizzeria');?>
        </div>
        <p class="ParagPage">
            <?php the_field('texte_parag_5_pizzeria');?>
        </p>
    </div>

    <section id="partenaires">

        <div id="logosPartenaires"> 
                <?php
                ////////////////////////////// a c f ////////////////////////*/
                
                    // Contrôle si le repeater a des champs
                    if( have_rows('partenaires') ):
                        // boucle sur les champs du repeater
                            while ( have_rows('partenaires') ) : the_row();
                                    // affichage des sous-champs
                                    ?>
                                    <div class="logoPartenaire"><a href="<?php the_sub_field('lien_du_partenaire');?>" target="blank"><img src="<?php the_sub_field('logo_du_partenaire');?>"/></div></a>
                    <?php
                            endwhile;
                    else :
                            // pas de champs Repeater
                            echo "pas de champs Repeater dans le coin !";
                    endif;
                ?>   
        </div>
    </section>  


</div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.gallery').Chocolat({
                'loop': true,
            });
        });
    </script>
<?php get_footer(); ?>
