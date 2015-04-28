<?php
session_start();

//On inclut pour chaque page, l'entete générale au site (html, css, connexion bdd, ...)
include '../outils/connexbase.php';
include '../outils/fonctions.php';
include '../contenus/textes.php';
include '../contenus/entete.php';
?>
<nav></nav>
<section>
	<div class="menu_admin"></div>
	<?php 
	if ($_SESSION['droits']==$droits_admin)
	{
	?>
		<div class="menu_admin"><a href="gerer.php" class="menu_admin">G&eacute;rer les utilisateurs</a></div>
	<?php 
	}
	?>
	<?php 
	$q_problem = $bdd->query('SELECT * FROM problems');
	$pb_soumis = 0;
	$pb_refuse = 0;
	$pb_propose = 0;
	$pb_accepte = 0;
	$pb_prepare = 0;
	$pb_publie = 0;
	while ($r_problem = $q_problem->fetch())
	{
		if ($r_problem["etat"] == "1 - Soumis")
		{
			$pb_soumis += 1;
		}
			if ($r_problem["etat"] == "2 - Refusé")
		{
			$pb_refuse += 1;
		}
			if ($r_problem["etat"] == "3 - Proposé")
		{
			$pb_propose += 1;
		}
			if ($r_problem["etat"] == "4 - Accepté")
		{
			$pb_accepte += 1;
		}
			if ($r_problem["etat"] == "5 - Préparé")
		{
			$pb_prepare += 1;
		}
			if ($r_problem["etat"] == "6 - Publié")
		{
			$pb_publie += 1;
		}
	}
	?>
	<div class="menu_admin"><a href="soumis.php" class="menu_admin">Probl&egrave;mes soumis : <?php echo $pb_soumis; ?></a></div>
	<div class="menu_admin"><a href="refuse.php" class="menu_admin">Probl&egrave;mes refus&eacute;s : <?php echo $pb_refuse; ?></a></div>
	<div class="menu_admin"><a href="propose.php" class="menu_admin">Probl&egrave;mes propos&eacute;s : <?php echo $pb_propose; ?></a></div>
	<div class="menu_admin"><a href="accepte.php" class="menu_admin">Probl&egrave;mes accept&eacute;s : <?php echo $pb_accepte; ?></a></div>
	<div class="menu_admin"><a href="prepare.php" class="menu_admin">Probl&egrave;mes pr&eacute;par&eacute;s : <?php echo $pb_prepare; ?></a></div>
	<div class="menu_admin"><a href="publie.php" class="menu_admin">Probl&egrave;mes publi&eacute;s : <?php echo $pb_publie; ?></a></div>
	<div class="menu_admin"></div>
</section>
<aside></aside>
<script src="../js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript">captcha()</script>

<?php
//On inclut pour chaque page, le bas de page générale au site (html, css, connexion bdd, ...)
include '../contenus/piedpage.php';
 ?>