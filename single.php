<?php get_header(); ?>


    <div id="bandeau-single">
      <div id="blackVeilbandeau">

      </div>
    </div>
<div class="clear"></div>
<div id="bandeauAriane"><div style="float:left;">Accueil » <a href="<?php echo site_url(); ?>/actualites/" style="color:#ffffff">Actualités</a> »&nbsp; </div><strong class="hack">
<a href="<?php echo site_url(); ?>/actualites/">
<?php 
$category = get_the_category();
echo $category[0]->cat_name;
?>
</a>
</strong> &nbsp;» <strong class="ariane-text"><?php the_title(); ?></strong></div>




<div class="site-main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div <?php post_class(); ?>>
      <div class="paragraphe-article">
         <div class="titrePage"><?php the_title(); ?></div>
          <div class="soustitrePage">
            Par <?php the_author(); ?>,le <?php the_date(); ?> 
          </div>
          <article id="article">
            <?php the_content(); ?>
          </article>
              <div class="sharify-container">
                <a title="Tweet on Twitter" href="https://twitter.com/intent/tweet?text=Un+%C3%A9v%C3%A9nement+styl%C3%A9: http://primeur-cours-des-halles.fr/?p=124" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                  <div class="socialicon">
                    <span class="sharify-icon"><i class="sharify sharify-twitter"></i></span>
                  </div>
                </a>
              
                <a title="Share on Facebook" href="http://www.facebook.com/sharer.php?u=http://primeur-cours-des-halles.fr/?p=124" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                  <div class="socialicon">
                     <span class="sharify-icon"><i class="sharify sharify-facebook"></i></span>
                  </div>
                </a>
              
              
                <a title="Share on Google+" href="http://plus.google.com/share?url=http://primeur-cours-des-halles.fr/?p=124" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                <div class="socialicon" style="padding-left: 11px;padding-top: 3px;">
                  <span class="sharify-icon"><i class="sharify sharify-gplus"></i></span>
                </div>
                </a>
              
                <a title="Save to read later on Pocket" href="https://getpocket.com/save?url=http://primeur-cours-des-halles.fr/?p=124" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                <div class="socialicon">
                  <span class="sharify-icon"><i class="sharify sharify-pocket"></i></span>
                </div>
                </a>
              
                <a title="Share on Pinterest" href="http://pinterest.com/pin/create/button/?url=http://primeur-cours-des-halles.fr/?p=124&media=http://primeur-cours-des-halles.fr/wp-content/uploads/2016/08/Bg-CDH-01.jpg&description=Un événement stylé - http://primeur-cours-des-halles.fr/?p=124" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;">
                <div class="socialicon">
                  <span class="sharify-icon"><i class="sharify sharify-pinterest"></i></span>
                </div>
                </a>
              
                <a title="Share on Linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=http://primeur-cours-des-halles.fr/?p=124&title=Un événement stylé" onclick="if(!document.getElementById('td_social_networks_buttons')){window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;}" >
                <div class="socialicon">
                  <span class="sharify-icon"><i class="sharify sharify-linkedin"></i></span>
                </div>
                </a>
              
                <a title="Share via mail" href="mailto:?subject=Un événement stylé&body=Hey, checkout this web page: - http://primeur-cours-des-halles.fr/?p=124">
                <div class="socialicon">
                    <span class="sharify-icon"><i class="sharify sharify-mail"></i></span>
                </div>
                </a>
              </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>

