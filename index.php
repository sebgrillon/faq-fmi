<?php
//On inclut pour chaque page, l'entete générale au site (html, css, connexion bdd, ...)
include 'outils/connexbase.php';
include 'contenus/textes.php';
include 'contenus/entete.php';
?>
	<nav></nav>
	<section class="chapeau"><?php echo $t_chapeau_faq;?></section>
<?php 
$problems = $bdd->query('SELECT * FROM problems WHERE etat=\'6 - Publié\'');
while ($r_prob = $problems->fetch())
{
?>
	<section class="probleme">
<?php 
		echo "<li>".$r_prob['finalisation']."</li>";
		echo "<p>".$r_prob['solution']."</p>";
?>	
	</section>
<?php 
}
?>
	<section class="form_public">
		<form class="form_public" name="form1" id="form1" method="post" action="/bot?form_public.php">
			<fieldset class="form_public">
				<legend class="form_public"><?php echo $t_form_probleme;?></legend>
				<div class="form_pub"><label for="nom" class="form_public"><?php echo $t_form_p1;?></label><input type="text" id="nom" name="nom"></div>
				<div class="form_pub"><label for="prenom" class="form_public"><?php echo $t_form_p2;?></label><input type="text" id="prenom" name="prenom"></div>
				<div class="form_pub"><label for="club" class="form_public"><?php echo $t_form_p3;?></label><input type="text" id="club" name="club"></div>
				<div class="form_pub"><label for="role" class="form_public"><?php echo $t_form_p4;?></label><select id="role" name="role"><option>Entraineur</option><option>Dirigeant</option><option>Arbitre</option><option>D&eacute;l&eacute;gu&eacute;</option><option>Autre</option></select></div>
				<div class="form_pub"><label for="tel" class="form_public"><?php echo $t_form_p5;?></label><input type="text" id="tel" name="tel"></div>
				<div class="form_pub"><label for="mail" class="form_public"><?php echo $t_form_p6;?></label><input type="text" id="mail" name="mail"></div>
				<div class="form_pub"><label for="date_match" class="form_public"><?php echo $t_form_p7;?></label><input type="text" id="date_match" name="date_match"  size="10"></div>
				<div class="form_pub">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
				<div class="form_pub"><label for="recevant" class="form_public"><?php echo $t_form_p8;?></label><input type="text" id="recevant" name="recevant"></div>
				<div class="form_pub"><label for="visiteur" class="form_public"><?php echo $t_form_p9;?></label><input type="text" id="visiteur" name="visiteur"></div>
				<div class="form_pub"><label for="cdg" class="form_public"><?php echo $t_form_p10;?></label><input type="text" id="cdg" name="cdg"></div>
				<div class="form_pub"><label for="categorie" class="form_public"><?php echo $t_form_p11;?></label><select id="categorie" name="categorie"><option>Senior</option><option>Autre</option></select></div>
				<div class="form_pub"><label for="division" class="form_public"><?php echo $t_form_p12;?></label><input type="text" id="division" name="division"></div>
				<div class="form_pub"><label for="poule" class="form_public"><?php echo $t_form_p13;?></label><input type="text" id="poule" name="poule" size="2"></div>
				<div class="form_pub"><label for="support" class="form_public"><?php echo $t_form_p14;?></label><select id="support" name="support"><option>Tablette Archos fournie</option><option>Autre tablette</option><option>Interface web</option></select></div>
				<div class="form_pub"><label for="rubrique" class="form_public"><?php echo $t_form_p15;?></label><select id="rubrique" name="rubrique"><option>Pr&eacute;paration</option><option>Feuille de match</option></select></div>
				<div class="form_pub"><label for="etape" class="form_public"><?php echo $t_form_p16;?></label><select id="etape" name="etape"><option>Pr&eacute;paration</option><option>Avant-match</option><option>Match en cours/mi-temps</option><option>Apr&egrave;s-match</option></select></div>
				<div class="form_pub">&nbsp;</div>
				<p class="form_pub"><label for="descriptif" class="form_public"><?php echo $t_form_p17;?></label><textarea id="descriptif" name="descriptif" rows="5" cols="85"></textarea></p>
				<p class="form_pub">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Valider">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
			</fieldset>
		</form>
	</section>
	<aside></aside>
	<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script type="text/javascript">captcha()</script>
	
	<?php
	//On inclut pour chaque page, le bas de page générale au site (html, css, connexion bdd, ...)
	include 'contenus/piedpage.php';
