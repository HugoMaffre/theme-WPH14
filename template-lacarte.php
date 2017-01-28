<?php
/**
 * The template for displaying pages
 Template Name: Template menu / carte 
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


<div class="bodypage" id="body-laCarte">

<div id="bandeau-lacarte">
    <div id="blackVeilbandeau">
        <div class="titreItalic">C'est l'amour de la pizza</div>
        <div class="titre">au coeur d'arômes simples<br/>et d'une pâte d'exception</div>
    </div>
</div>
<div class="clear"></div>
<div id="bandeauAriane">Accueil  »  <strong class="uppercase">la carte</strong></div>
<!-- ancres carte -->
<section class="sectionCarte" id="categoriesPlats">
    <div class="lienCarte"><a class="bouton-category-carte" href="#pizzas">Les pizzas</a></div>
    <div class="lienCarte"><a class="bouton-category-carte" href="#pizzaninis">Les pizzaninis</a></div>
    <div class="lienCarte"><a class="bouton-category-carte" href="#pates">Les plats</a></div>
    <div class="lienCarte"><a class="bouton-category-carte" href="#salades">Les salades</a></div>
    <div class="lienCarte"><a class="bouton-category-carte" href="#desserts">Les desserts</a></div>
    <div class="lienCarte"><a class="bouton-category-carte" href="#boissons">Les boissons</a></div>
    <div class="lienCarte" style="margin-right: 0px"><a class="bouton-category" href="#menus">Les menus</a></div>
</section>

    <div class="paragraphe" id="comp" style="padding-top:130px;margin-bottom: 90px;">
        <div class="titrePage">
            Histoire et savoir-faire
        </div>

        <div class="soustitrePage">
            Histoire et savoir-faire
        </div>
        <p class="ParagPage">
            l call center è attivo dal lunedì al venerdì dalle 8:00 alle 21:00 e il sabato dalle 9:00 alle 17:30.I l costo della chiamata da rete fissa è di 1 euro al minuto senza scatto alla risposta. La durata massima della chiamata tariffata èdi dodici minuti e 30 secondi. Il costo massimo del servizio da rete mobile è di 1 euro e 50 centesimi al minuto con scatto alla risposta di 12,91 centesimi. Il servizio è riservato ai maggiorenni. Tutti i costi evidenziati sono espressi al netto I.V.A.
        </p><br/><br/><br/>
        <a href="#" class="bouton-slider">Télécharger le menu <i class="fa fa-chevron-right" id="chevron-bouton" aria-hidden="true"></i></a>
    </div>


<!-- section pizzas -->
<section class="sectionCarte" id="pizzas">
<div class="cartTitle">Les pizzas</div>
    <div class="carte-column-left">
    <?php
    ////////////////////////////// a c f ////////////////////////*/
    
        // Contrôle si le repeater a des champs
        if( have_rows('pizza_colonne_de_gauche') ):
            // boucle sur les champs du repeater
                while ( have_rows('pizza_colonne_de_gauche') ) : the_row();
                        // affichage des sous-champs
                    ?>
                        <div class="plat"><?php the_sub_field('pizza_left');?></div>
                        <div class="prix"><?php the_sub_field('pizza_price_left');?></div>
                        <div class="ingredients"><?php the_sub_field('pizza_ing_left');?></div>
                        <div class="clear"></div>
                <?php endwhile;
        else :
                // pas de champs Repeater
                echo "pas de champs Repeater dans le coin !";
        endif;
    ?>

    </div>
    <div class="carte-column-right">
    <?php
    ////////////////////////////// a c f ////////////////////////*/
    
        // Contrôle si le repeater a des champs
        if( have_rows('pizza_colonne_de_droite') ):
            // boucle sur les champs du repeater
                while ( have_rows('pizza_colonne_de_droite') ) : the_row();
                        // affichage des sous-champs
                    ?>
                        <div class="plat"><?php the_sub_field('pizza_right');?></div>
                        <div class="prix"><?php the_sub_field('pizza_price_right');?></div>
                        <div class="ingredients"><?php the_sub_field('pizza_ing_right');?></div>
                        <div class="clear"></div>
                <?php endwhile;
        else :
                // pas de champs Repeater
                echo "pas de champs Repeater dans le coin !";
        endif;
    ?>
    </div>


</section>


<!-- section pizzaninis -->
<section class="sectionCarte" id="pizzaninis">
<div class="cartTitle">Les pizzaninis</div>
    <div class="carte-column-left">

    <?php
    ////////////////////////////// a c f ////////////////////////*/
    
        // Contrôle si le repeater a des champs
        if( have_rows('pizzanini_colonne_de_gauche') ):
            // boucle sur les champs du repeater
                while ( have_rows('pizzanini_colonne_de_gauche') ) : the_row();
                        // affichage des sous-champs
                    ?>
                        <div class="plat"><?php the_sub_field('pizzanini_left');?></div>
                        <div class="prix"><?php the_sub_field('pizzanini_price_left');?></div>
                        <div class="ingredients"><?php the_sub_field('pizzanini_ing_left');?></div>
                        <div class="clear"></div>
                <?php endwhile;
        else :
                // pas de champs Repeater
                echo "pas de champs Repeater dans le coin !";
        endif;
    ?>

    </div>
    <div class="carte-column-right">
    <?php
    ////////////////////////////// a c f ////////////////////////*/
    
        // Contrôle si le repeater a des champs
        if( have_rows('pizzanini_colonne_de_droite') ):
            // boucle sur les champs du repeater
                while ( have_rows('pizzanini_colonne_de_droite') ) : the_row();
                        // affichage des sous-champs
                    ?>
                        <div class="plat"><?php the_sub_field('pizzanini_right');?></div>
                        <div class="prix"><?php the_sub_field('pizzanini_price_right');?></div>
                        <div class="ingredients"><?php the_sub_field('pizzanini_ing_right');?></div>
                        <div class="clear"></div>
                <?php endwhile;
        else :
                // pas de champs Repeater
                echo "pas de champs Repeater dans le coin !";
        endif;
    ?>
    </div>
</section>


<!-- section pates -->
<section class="sectionCarte" id="pates">
<div class="cartTitle">Les plats</div>
    <div class="carte-column-left">
    <?php
    ////////////////////////////// a c f ////////////////////////*/
    
        // Contrôle si le repeater a des champs
        if( have_rows('pates_colonne_de_gauche') ):
            // boucle sur les champs du repeater
                while ( have_rows('pates_colonne_de_gauche') ) : the_row();
                        // affichage des sous-champs
                    ?>
                        <div class="plat"><?php the_sub_field('pates_left');?></div>
                        <div class="prix"><?php the_sub_field('pates_price_left');?></div>
                        <div class="ingredients"><?php the_sub_field('pates_ing_left');?></div>
                        <div class="clear"></div>
                <?php endwhile;
        else :
                // pas de champs Repeater
                echo "pas de champs Repeater dans le coin !";
        endif;
    ?>
    </div>
    <div class="carte-column-right">
    <?php
    ////////////////////////////// a c f ////////////////////////*/
    
        // Contrôle si le repeater a des champs
        if( have_rows('pates_colonne_de_droite') ):
            // boucle sur les champs du repeater
                while ( have_rows('pates_colonne_de_droite') ) : the_row();
                        // affichage des sous-champs
                    ?>
                        <div class="plat"><?php the_sub_field('pates_right');?></div>
                        <div class="prix"><?php the_sub_field('pates_price_right');?></div>
                        <div class="ingredients"><?php the_sub_field('pates_ing_right');?></div>
                        <div class="clear"></div>
                <?php endwhile;
        else :
                // pas de champs Repeater
                echo "pas de champs Repeater dans le coin !";
        endif;
    ?>
    </div>
</section>


<!-- section salades -->
<section class="sectionCarte" id="salades">
<div class="cartTitle">Les salades</div>
    <div class="carte-column-left">
    <?php
    ////////////////////////////// a c f ////////////////////////*/
    
        // Contrôle si le repeater a des champs
        if( have_rows('salade_colonne_de_gauche') ):
            // boucle sur les champs du repeater
                while ( have_rows('salade_colonne_de_gauche') ) : the_row();
                        // affichage des sous-champs
                    ?>
                        <div class="plat"><?php the_sub_field('salade_left');?></div>
                        <div class="prix"><?php the_sub_field('salade_price_left');?></div>
                        <div class="ingredients"><?php the_sub_field('salade_ing_left');?></div>
                        <div class="clear"></div>
                <?php endwhile;
        else :
                // pas de champs Repeater
                echo "pas de champs Repeater dans le coin !";
        endif;
    ?>
    </div>
    <div class="carte-column-right">
    <?php
    ////////////////////////////// a c f ////////////////////////*/
    
        // Contrôle si le repeater a des champs
        if( have_rows('salade_colonne_de_droite') ):
            // boucle sur les champs du repeater
                while ( have_rows('salade_colonne_de_droite') ) : the_row();
                        // affichage des sous-champs
                    ?>
                        <div class="plat"><?php the_sub_field('salade_right');?></div>
                        <div class="prix"><?php the_sub_field('salade_price_right');?></div>
                        <div class="ingredients"><?php the_sub_field('salade_ing_right');?></div>
                        <div class="clear"></div>
                <?php endwhile;
        else :
                // pas de champs Repeater
                echo "pas de champs Repeater dans le coin !";
        endif;
    ?>
    </div>
</section>


<!-- section desserts -->
<section class="sectionCarte" id="desserts">
<div class="cartTitle">Les desserts</div>
    <div class="carte-column-left">
    <?php
    ////////////////////////////// a c f ////////////////////////*/
    
        // Contrôle si le repeater a des champs
        if( have_rows('dessert_colonne_de_gauche') ):
            // boucle sur les champs du repeater
                while ( have_rows('dessert_colonne_de_gauche') ) : the_row();
                        // affichage des sous-champs
                    ?>
                        <div class="plat"><?php the_sub_field('dessert_left');?></div>
                        <div class="prix"><?php the_sub_field('dessert_price_left');?></div>
                        <div class="ingredients"><?php the_sub_field('dessert_ing_left');?></div>
                        <div class="clear"></div>
                <?php endwhile;
        else :
                // pas de champs Repeater
                echo "pas de champs Repeater dans le coin !";
        endif;
    ?>
    </div>
    <div class="carte-column-right">
    <?php
    ////////////////////////////// a c f ////////////////////////*/
    
        // Contrôle si le repeater a des champs
        if( have_rows('dessert_colonne_de_droite') ):
            // boucle sur les champs du repeater
                while ( have_rows('dessert_colonne_de_droite') ) : the_row();
                        // affichage des sous-champs
                    ?>
                        <div class="plat"><?php the_sub_field('dessert_right');?></div>
                        <div class="prix"><?php the_sub_field('dessert_price_right');?></div>
                        <div class="ingredients"><?php the_sub_field('dessert_ing_right');?></div>
                        <div class="clear"></div>
                <?php endwhile;
        else :
                // pas de champs Repeater
                echo "pas de champs Repeater dans le coin !";
        endif;
    ?>
    </div>
</section>


<!-- section boissons -->
<section class="sectionCarte" id="boissons">
<div class="cartTitle">Les boissons</div>
    <div class="carte-column-left">
    <?php
    ////////////////////////////// a c f ////////////////////////*/
    
        // Contrôle si le repeater a des champs
        if( have_rows('boisson_colonne_de_gauche') ):
            // boucle sur les champs du repeater
                while ( have_rows('boisson_colonne_de_gauche') ) : the_row();
                        // affichage des sous-champs
                    ?>
                        <div class="plat"><?php the_sub_field('boisson_left');?></div>
                        <div class="prix"><?php the_sub_field('boisson_price_left');?></div>
                        <div class="ingredients"><?php the_sub_field('boisson_ing_left');?></div>
                        <div class="clear"></div>
                <?php endwhile;
        else :
                // pas de champs Repeater
                echo "pas de champs Repeater dans le coin !";
        endif;
    ?>
    </div>
    <div class="carte-column-right">
    <?php
    ////////////////////////////// a c f ////////////////////////*/
    
        // Contrôle si le repeater a des champs
        if( have_rows('boisson_colonne_de_droite') ):
            // boucle sur les champs du repeater
                while ( have_rows('boisson_colonne_de_droite') ) : the_row();
                        // affichage des sous-champs
                    ?>
                        <div class="plat"><?php the_sub_field('boisson_right');?></div>
                        <div class="prix"><?php the_sub_field('boisson_price_right');?></div>
                        <div class="ingredients"><?php the_sub_field('boisson_ing_right');?></div>
                        <div class="clear"></div>
                <?php endwhile;
        else :
                // pas de champs Repeater
                echo "pas de champs Repeater dans le coin !";
        endif;
    ?>
    </div>
</section>


<!-- section menus -->
<section class="sectionCarte" id="menus" style="padding-bottom: 130px">
<div class="cartTitle">Les menus</div>
    <div class="carte-column-left">
    <?php
    ////////////////////////////// a c f ////////////////////////*/
    
        // Contrôle si le repeater a des champs
        if( have_rows('menu_colonne_de_gauche') ):
            // boucle sur les champs du repeater
                while ( have_rows('menu_colonne_de_gauche') ) : the_row();
                        // affichage des sous-champs
                    ?>
                        <div class="plat"><?php the_sub_field('menu_left');?></div>
                        <div class="prix"><?php the_sub_field('menu_price_left');?></div>
                        <div class="ingredients"><?php the_sub_field('menu_ing_left');?></div>
                        <div class="clear"></div>
                <?php endwhile;
        else :
                // pas de champs Repeater
                echo "pas de champs Repeater dans le coin !";
        endif;
    ?>
    </div>
    <div class="carte-column-right">
    <?php
    ////////////////////////////// a c f ////////////////////////*/
    
        // Contrôle si le repeater a des champs
        if( have_rows('menu_colonne_de_droite') ):
            // boucle sur les champs du repeater
                while ( have_rows('menu_colonne_de_droite') ) : the_row();
                        // affichage des sous-champs
                    ?>
                        <div class="plat"><?php the_sub_field('menu_right');?></div>
                        <div class="prix"><?php the_sub_field('menu_price_right');?></div>
                        <div class="ingredients"><?php the_sub_field('menu_ing_right');?></div>
                        <div class="clear"></div>
                <?php endwhile;
        else :
                // pas de champs Repeater
                echo "pas de champs Repeater dans le coin !";
        endif;
    ?>
    </div>
</section>






</div>

<script type="text/javascript">
if($(window).width() > 1161){
    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > 520) {
            $('#categoriesPlats').addClass('categoriesPlats_sticky');
            $('#comp').addClass('compensator');
        } else {
            $('#categoriesPlats').removeClass('categoriesPlats_sticky');
            $('#comp').removeClass('compensator');
        }
    });
}
</script>
<?php get_footer(); ?>
