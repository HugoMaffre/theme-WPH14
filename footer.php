<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage ThemeWPH14
 * @since ThemeWPH14 1.0
 */
?>

<div id="footer">
	<!-- PARTIE GAUCHE -->
		<div id="footerleft">	
			<div class="FooterTitle">Menu</div> 
			<div class="separation"></div>
			<?php wp_nav_menu( array( 'theme_location' => 'MenuFooter' ) ); ?><br/>
			<a href="<?php echo site_url(); ?>/plan-du-site/">plan du site</a><br>
			<a href="<?php echo site_url(); ?>/mentions-legales/">mentions légales</a>
		</div>
	<!-- PARTIE DU MILIEU -->
		<div id="footercenter">	
			<div class="FooterTitle">Newsletter</div>
			<div class="separation"></div>
			<p>Inscrivez-vous à la newsletter et ne ratez aucune nouveauté sur la pizzeria.<br/><br/>
			<div class="FooterTitle">Entrez votre Email :</div><br/>
			<div id="formNewsletter">
				<form class="ajax" method="POST" action="<?php echo get_template_directory_uri(); ?>/process_newsletter.php">
					<input type="email" id="newsletter_email" name="newsletter_email" tabindex="2" placeholder="  VOTRE EMAIL" required/>
					<span id="msg_email"></span><br/><br/>
					<button type="submit" id="envoi" name="envoi">inscription</button><br/><br/><br/>
					<span id="ggorfail" style="margin-top:30px;"></span>
				</form>
			</div>
		</div>	
	<!-- PARTIE DE DROITE -->
	<div id="footerright">	
		<div class="FooterTitle">contactez-nous</div>
		<div class="separation"></div>
		<p>Vous souhaitez obtenir des renseignements ?<br/>
		N’hésitez pas à remplir le formulaire<br/>
		de contact, nous tâcherons de vous<br/>
		répondre dans les plus brefs délais.</p>
		<br/>

		<p style="font-weight:600;">63, rue Bizanet<br/>
		38000 Grenoble<br/>
		Tel : 04 76 54 70 84</p><br/>

		<p>
			<a href="mailto:contact@aromapizza.fr" style="font-size:15px;text-transform: none;letter-spacing: 0px;font-weight: 400;"> 
				Email : [contact[at]aromapizza.fr]
			</a>
		</p>
	</div>
</div>
<div id="social">
	<div id="socialIcons">
		<a href="hhttps://www.facebook.com/aroma.aromapizza" alt="notre facebook" target="blank" ><div id="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></div></a>
		<a href="https://plus.google.com/u/4/113905973880141961789" alt="notre google+" target="blank" ><div id="google"><i class="fa fa-google-plus" aria-hidden="true"></i></div></a>
	</div>
</div>	

<div id="pieddepage">
	<p>Copyright © 2016 - AROMA PIZZA - Tous droits réservés</p>
</div>
</div>
<?php wp_footer() ?>
</body>

<script>
    $(function(){
        $('form.ajax').submit(function(event){
            var email      = $("#newsletter_email").val();
            var dataString = email;
            var msg_all    = "<p>Merci de remplir tous les champs</p>";
            var msg_alert  = "<p>Merci de remplir ce champ <i class=\"ion-chevron-up\"></i></p>";
            var success = "<p><i class=\"ion-ios-arrow-thin-right\"></i>  Email enregistré. Merci !</p>";
            var fail = "<p>Il y a un problème avec l'envoi du formulaire</p>";
            var datas = $(this).serialize();

            if (dataString  == "") {
                $("#ggorfail").html(msg_all);
            } else {
                $.ajax({
                	type : 'POST',
                    url: $(this).attr('action'),  // process_newsletter.php
                    data: $(this).serialize(),
                    datatype: 'html',
                    success : function() {
                    	$("#msg_email").empty();
                    	$("#ggorfail").empty(fail);
                        $("#ggorfail").show().html(success).fadeIn(1500);
                        //alert('success :'+datas);     TEST DATAS
                    },
                    error: function() {
                    	$("#msg_email").empty();
                    	$("#ggorfail").empty(success);
                        $("#ggorfail").show().html(fail).fadeIn(1500);
                    }
                });
            }
            return false;
        });
    });
</script>
</html>

