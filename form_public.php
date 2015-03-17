<?php
if(!isset($_POST['descriptif']))
{
	//On inclut pour chaque page, l'entete g�n�rale au site (html, css, connexion bdd, ...)
	include 'outils/connexbase.php';
	include 'contenus/textes.php';
	include 'contenus/entete.php';
	?>
	<nav></nav>
	<section class="form_public">
		<form class="form_public" name="form1" id="form1" method="post" action="/bot?form_public.php">
			<fieldset class="form_public">
				<legend class="form_public"><?php echo $t_form_probleme;?></legend>
				<div class="form_pub"><label for="nom" class="form_public"><?php echo $t_form_p1;?></label><input type="text" id="nom" name="nom"></div>
				<div class="form_pub"><label for="prenom" class="form_public"><?php echo $t_form_p2;?></label><input type="text" id="prenom" name="prenom"></div>
				<div class="form_pub"><label for="club" class="form_public"><?php echo $t_form_p3;?></label><input type="text" id="club" name="club"></div>
				<div class="form_pub"><label for="role" class="form_public"><?php echo $t_form_p4;?></label><select id="role" name="role"><option></option><option>Entraineur</option><option>Dirigeant</option><option>Arbitre</option><option>D&eacute;l&eacute;gu&eacute;</option><option>Autre</option></select></div>
				<div class="form_pub"><label for="tel" class="form_public"><?php echo $t_form_p5;?></label><input type="text" id="tel" name="tel"></div>
				<div class="form_pub"><label for="mail" class="form_public"><?php echo $t_form_p6;?></label><input type="text" id="mail" name="mail"></div>
				<div class="form_pub"><label for="date_match" class="form_public"><?php echo $t_form_p7;?></label><input type="text" id="date_match" name="date_match"  size="10"></div>
				<div class="form_pub">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
				<div class="form_pub"><label for="recevant" class="form_public"><?php echo $t_form_p8;?></label><input type="text" id="recevant" name="recevant"></div>
				<div class="form_pub"><label for="visiteur" class="form_public"><?php echo $t_form_p9;?></label><input type="text" id="visiteur" name="visiteur"></div>
				<div class="form_pub"><label for="cdg" class="form_public"><?php echo $t_form_p10;?></label><select id="cdg" name="cdg"><option></option><option>Ligue du Centre</option><option>District du Cher</option><option>District d'Eure-et-Loir</option><option>District de l'Indre</option><option>District d'Indre-et-Loire</option><option>District du Loir-et-Cher</option><option>District du Loiret</option></select></div>
				<div class="form_pub"><label for="categorie" class="form_public"><?php echo $t_form_p11;?></label><select id="categorie" name="categorie"><option></option><option>Senior</option><option>Autre</option></select></div>
				<div class="form_pub"><label for="division" class="form_public"><?php echo $t_form_p12;?></label><input type="text" id="division" name="division"></div>
				<div class="form_pub"><label for="poule" class="form_public"><?php echo $t_form_p13;?></label><input type="text" id="poule" name="poule" size="2"></div>
				<div class="form_pub"><label for="support" class="form_public"><?php echo $t_form_p14;?></label><select id="support" name="support"><option></option><option>Tablette Archos fournie</option><option>Autre tablette</option><option>Interface web</option></select></div>
				<div class="form_pub"><label for="rubrique" class="form_public"><?php echo $t_form_p15;?></label><select id="rubrique" name="rubrique"><option></option><option>Pr&eacute;paration</option><option>Feuille de match</option></select></div>
				<div class="form_pub"><label for="etape" class="form_public"><?php echo $t_form_p16;?></label><select id="etape" name="etape"><option></option><option>Pr&eacute;paration</option><option>Avant-match</option><option>Match en cours/mi-temps</option><option>Apr&egrave;s-match</option></select></div>
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
	//On inclut pour chaque page, le bas de page g�n�rale au site (html, css, connexion bdd, ...)
	include 'contenus/piedpage.php';
}
else
{
	include 'contenus/entete.php';
	$incomplet = '';
	
	if(isset($_POST['nom'])) {
		$nom = $_POST['nom']; 
	}
		else {
			$nom = '';
			$incomplet .= 'Nom obligatoire. ';
		}
	if(isset($_POST['prenom'])) {
		$prenom = $_POST['prenom'];
	}
		else {
			$prenom = '';
			$incomplet .= 'Pr�nom obligatoire. ';
		}
	if(isset($_POST['club'])) {
		$club = $_POST['club'];
	}
		else {
			$club = '';
		}
	if(isset($_POST['role'])) {
		$role = $_POST['role'];
	}
		else {
			$role = '';
		}
	if(isset($_POST['tel'])) {
		$tel = $_POST['tel'];
	}
		else {
			$tel = '';
		}
	if(isset($_POST['mail'])) {
		$mail = $_POST['mail'];
	}
		else {
			$mail = '';
		}
	if ($tel=='' && $mail=='') {
		$incomplet .= 'T�l�phone OU Email obligatoire. ';
	}		
	if(isset($_POST['date_match'])) {
		$date_match = $_POST['date_match'];
		$incomplet .= 'Date du match obligatoire. ';
	}
		else {
			$date_match = '';
		}
	if(isset($_POST['recevant'])) {
		$recevant = $_POST['recevant'];
	}
		else {
			$recevant = '';
		}
	if(isset($_POST['visiteur'])) {
		$visiteur = $_POST['visiteur'];
	}
		else {
			$visiteur = '';
		}
	if ($recevant=='' || $visiteur=='') {
		$incomplet .= 'Clubs recevant ET visiteur obligatoires. ';
	if(isset($_POST['cdg'])) {
		$cdg = $_POST['cdg'];
	}
		else {
			$cdg = '';
			$incomplet .= 'Gestionnaire de la comp�tition obligatoire. ';
		}
	if(isset($_POST['categorie'])) {
		$categorie = $_POST['categorie'];
	}
		else {
			$categorie = '';
			$incomplet .= 'Cat�gorie obligatoire. ';
		}
	if(isset($_POST['division'])) {
		$division = $_POST['division'];
	}
		else {
			$division = '';
			$incomplet .= 'Comp�tition obligatoire. ';
		}
	if(isset($_POST['poule'])) {
		$poule = $_POST['poule'];
	}
		else {
			$poule = '';
		}
	if(isset($_POST['support'])) {
		$support = $_POST['support'];
	}
		else {
			$support = '';
			$incomplet .= 'Pr�cision du support obligatoire. ';
		}
	if(isset($_POST['rubrique'])) {
		$rubrique = $_POST['rubrique'];
	}
		else {
			$rubrique = '';
			$incomplet .= 'Rubrique obligatoire. ';
		}
	if(isset($_POST['etape'])) {
		$etape = $_POST['etape'];
	}
		else {
			$etape = '';
			$incomplet .= 'Etape obligatoire. ';
		}
	if(isset($_POST['descriptif'])) {
		$descriptif = $_POST['descriptif'];
	}
		else {
			$descriptif = '';
			$incomplet .= 'Description du probl�me obligatoire. ';
		}
	
	
	?>
			<div class="form_pvalid">En cours de validation...</div>
		</body>
	</html>
	<?php
}
?>