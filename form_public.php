<?php
//On inclut pour chaque page, l'entete générale au site (html, css, connexion bdd, ...)
include 'outils/connexbase.php';
include 'contenus/textes.php';
include 'contenus/entete.php';
include 'outils/fonctions.php';

	$incomplet = '';
	
	if(isset($_POST['nom'])) {
		$nom = $_POST['nom']; 
		if ($nom=='') $incomplet .= 'Nom obligatoire. ';
	}
		else {
			$nom = '';
			$incomplet .= 'Nom obligatoire. ';
		}
	if(isset($_POST['prenom'])) {
		$prenom = $_POST['prenom'];
		if ($prenom=='') $incomplet .= 'Pr&eacute;nom obligatoire. ';
	}
		else {
			$prenom = '';
			$incomplet .= 'Pr&eacute;nom obligatoire. ';
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
		$incomplet .= 'T&eacute;l&eacute;phone OU Email obligatoire. ';
	}		
	if(isset($_POST['date_match'])) {
		$date_match = $_POST['date_match'];
		if ($date_match=='') $incomplet .= 'Date du match obligatoire. ';
	}
		else {
			$date_match = '';
			$incomplet .= 'Date du match obligatoire. ';
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
	}
	if(isset($_POST['cdg'])) {
		$cdg = $_POST['cdg'];
		if ($cdg=='') $incomplet .= 'Gestionnaire de la comp&eacute;tition obligatoire. ';
	}
		else {
			$cdg = '';
			$incomplet .= 'Gestionnaire de la comp&eacute;tition obligatoire. ';
		}
	if(isset($_POST['categorie'])) {
		$categorie = $_POST['categorie'];
		if ($categorie=='') $incomplet .= 'Cat&eacute;gorie obligatoire. ';
	}
		else {
			$categorie = '';
			$incomplet .= 'Cat&eacute;gorie obligatoire. ';
		}
	if(isset($_POST['division'])) {
		$division = $_POST['division'];
		if ($division=='') $incomplet .= 'Comp&eacute;tition obligatoire. ';
	}
		else {
			$division = '';
			$incomplet .= 'Comp&eacute;tition obligatoire. ';
		}
	if(isset($_POST['poule'])) {
		$poule = $_POST['poule'];
	}
		else {
			$poule = '';
		}
	if(isset($_POST['support'])) {
		$support = $_POST['support'];
		if ($support=='') $incomplet .= 'Pr&eacute;cision du support obligatoire. ';
	}
		else {
			$support = '';
			$incomplet .= 'Pr&eacute;cision du support obligatoire. ';
		}
	if(isset($_POST['rubrique'])) {
		$rubrique = $_POST['rubrique'];
		if ($rubrique=='') $incomplet .= 'Rubrique obligatoire. ';
	}
		else {
			$rubrique = '';
			$incomplet .= 'Rubrique obligatoire. ';
		}
	if(isset($_POST['etape'])) {
		$etape = $_POST['etape'];
		if ($etape=='') $incomplet .= 'Etape obligatoire. ';
	}
		else {
			$etape = '';
			$incomplet .= 'Etape obligatoire. ';
		}
	if(isset($_POST['descriptif'])) {
		$descriptif = $_POST['descriptif'];
		if ($descriptif=='') $incomplet .= 'Description du probl&egrave;me obligatoire. ';
	}
		else {
			$descriptif = '';
			$incomplet .= 'Description du probl&egrave;me obligatoire. ';
		}
	
	if ($incomplet!='')
	{
		echo "<div class='form_erreur'>".$t_form_non_renseigne.$incomplet."</div>";
	
	?>
	<nav></nav>
	<section class="form_public">
		<form class="form_public" name="form1" id="form1" method="post" action="/bot?form_public.php">
			<fieldset class="form_public">
				<legend class="form_public"><?php echo $t_form_probleme;?></legend>
				<div class="form_pub"><label for="nom" class="form_public"><?php echo $t_form_p1;?></label><input type="text" id="nom" name="nom" value="<?php echo $nom;?>"></div>
				<div class="form_pub"><label for="prenom" class="form_public"><?php echo $t_form_p2;?></label><input type="text" id="prenom" name="prenom" value="<?php echo $prenom;?>"></div>
				<div class="form_pub"><label for="club" class="form_public"><?php echo $t_form_p3;?></label><input type="text" id="club" name="club" value="<?php echo $club;?>"></div>
				<div class="form_pub"><label for="role" class="form_public"><?php echo $t_form_p4;?></label><select id="role" name="role"><option></option><option<?php if ($role=="Entraineur") echo " selected";?>>Entraineur</option><option<?php if ($role=="Dirigeant") echo " selected";?>>Dirigeant</option><option<?php if ($role=="Arbitre") echo " selected";?>>Arbitre</option><option<?php if ($role=="D&eacute;l&eacute;gu&eacute;") echo " selected";?>>D&eacute;l&eacute;gu&eacute;</option><option<?php if ($role=="Autre") echo " selected";?>>Autre</option></select></div>
				<div class="form_pub"><label for="tel" class="form_public"><?php echo $t_form_p5;?></label><input type="text" id="tel" name="tel" value="<?php echo $tel;?>"></div>
				<div class="form_pub"><label for="mail" class="form_public"><?php echo $t_form_p6;?></label><input type="text" id="mail" name="mail" value="<?php echo $mail;?>"></div>
				<div class="form_pub"><label for="date_match" class="form_public"><?php echo $t_form_p7;?></label><input type="text" id="date_match" name="date_match"  size="10" value="<?php echo $date_match;?>"></div>
				<div class="form_pub">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
				<div class="form_pub"><label for="recevant" class="form_public"><?php echo $t_form_p8;?></label><input type="text" id="recevant" name="recevant" value="<?php echo $recevant;?>"></div>
				<div class="form_pub"><label for="visiteur" class="form_public"><?php echo $t_form_p9;?></label><input type="text" id="visiteur" name="visiteur" value="<?php echo $visiteur;?>"></div>
				<div class="form_pub"><label for="cdg" class="form_public"><?php echo $t_form_p10;?></label><select id="cdg" name="cdg"><option></option><option<?php if ($cdg=="Ligue du Centre") echo " selected";?>>Ligue du Centre</option><option<?php if ($cdg=="District du Cher") echo " selected";?>>District du Cher</option><option<?php if ($cdg=="District d'Eure-et-Loir") echo " selected";?>>District d'Eure-et-Loir</option><option<?php if ($cdg=="District de l'Indre") echo " selected";?>>District de l'Indre</option><option<?php if ($cdg=="District d'Indre-et-Loire") echo " selected";?>>District d'Indre-et-Loire</option><option<?php if ($cdg=="District du Loir-et-Cher") echo " selected";?>>District du Loir-et-Cher</option><option<?php if ($cdg=="District du Loiret") echo " selected";?>>District du Loiret</option></select></div>
				<div class="form_pub"><label for="categorie" class="form_public"><?php echo $t_form_p11;?></label><select id="categorie" name="categorie"><option></option><option<?php if ($categorie=="Senior") echo " selected";?>>Senior</option><option<?php if ($categorie=="Autre") echo " selected";?>>Autre</option></select></div>
				<div class="form_pub"><label for="division" class="form_public"><?php echo $t_form_p12;?></label><input type="text" id="division" name="division" value="<?php echo $division;?>"></div>
				<div class="form_pub"><label for="poule" class="form_public"><?php echo $t_form_p13;?></label><input type="text" id="poule" name="poule" size="2" value="<?php echo $poule;?>"></div>
				<div class="form_pub"><label for="support" class="form_public"><?php echo $t_form_p14;?></label><select id="support" name="support"><option></option><option<?php if ($support=="Tablette Archos fournie") echo " selected";?>>Tablette Archos fournie</option><option<?php if ($support=="Autre tablette") echo " selected";?>>Autre tablette</option><option<?php if ($support=="Interface web") echo " selected";?>>Interface web</option></select></div>
				<div class="form_pub"><label for="rubrique" class="form_public"><?php echo $t_form_p15;?></label><select id="rubrique" name="rubrique"><option></option><option<?php if ($rubrique=="Pr&eacute;paration") echo " selected";?>>Pr&eacute;paration</option><option<?php if ($rubrique=="Feuille de match") echo " selected";?>>Feuille de match</option></select></div>
				<div class="form_pub"><label for="etape" class="form_public"><?php echo $t_form_p16;?></label><select id="etape" name="etape"><option></option><option<?php if ($etape=="Pr&eacute;paration") echo " selected";?>>Pr&eacute;paration</option><option<?php if ($etape=="Avant-match") echo " selected";?>>Avant-match</option><option<?php if ($etape=="Match en cours/mi-temps") echo " selected";?>>Match en cours/mi-temps</option><option<?php if ($etape=="Apr&egrave;s-match") echo " selected";?>>Apr&egrave;s-match</option></select></div>
				<div class="form_pub">&nbsp;</div>
				<p class="form_pub"><label for="descriptif" class="form_public"><?php echo $t_form_p17;?></label><textarea id="descriptif" name="descriptif" rows="5" cols="85"><?php echo $descriptif;?></textarea></p>
				<p class="form_pub">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Valider">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
			</fieldset>
		</form>
	</section>
	<aside></aside>
	<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script type="text/javascript">captcha()</script>
	<?php
	}
	else {
		try {
			//Requêtes pour enregistrer les données du formulaire dans la base
			$req_decl = "INSERT INTO declarant (nom,prenom, club, role, tel, mail) VALUES ('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['club']."','".$_POST['role']."','".$_POST['tel']."','".$_POST['mail']."')";
			$bdd->query($req_decl);
			$lastiddeclarant = $bdd->lastInsertId();
			$req_prob = "INSERT INTO problems (id_declarant,descriptif,etat) VALUES ($lastiddeclarant,'".$_POST['descriptif']."','".$t_etat6."')";
			$bdd->query($req_prob);
			$lastidproblem = $bdd->lastInsertId();
			$req_det = "INSERT INTO details (id_pb, date_match, opposants, competition, support, rubrique, etape) VALUES ($lastidproblem,'".conv_date_fr_en($_POST['date_match'])."','".$_POST['recevant']." - ".$_POST['visiteur']."','".$_POST['cdg']."#".$_POST['categorie']."#".$_POST['division']."#".$_POST['poule']."#"."','".$_POST['support']."','".$_POST['rubrique']."','".$_POST['etape']."')";
			$bdd->query($req_det);
		}
		catch (PDOException $e)
		{
	        die('Erreur : ' . $e->getMessage());
		}
		echo "<div class='form_reussi'>".$t_form_reussi."</div>";
		header('refresh:6;url=index.php');
	}

	//On inclut pour chaque page, le bas de page générale au site (html, css, connexion bdd, ...)
	include 'contenus/piedpage.php';
?>