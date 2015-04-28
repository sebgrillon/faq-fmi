<?php
session_start();
$_SESSION['id'] = '';
$_SESSION['nom'] = '';
$_SESSION['prenom'] = '';
$_SESSION['dernier_acces'] = '';
$_SESSION['ipaddr'] = '';
$_SESSION['fonction'] = '';
$_SESSION['cdg'] = '';
$_SESSION['droits'] = '';

if(!isset($_POST['pseudo']))
{
	//On inclut pour chaque page, l'entete générale au site (html, css, connexion bdd, ...)
	include '../outils/connexbase.php';
	include '../contenus/textes.php';
	include '../contenus/entete.php';
	?>
	<nav></nav>
	<section class="login">
		<form class="login" name="form1" id="form1" method="post" action="/bot?checklog.php">
			<fieldset class="login">
				<legend class="login"><?php echo $t_invit_connexion;?></legend>
				<div class="login"><p class="login"><?php echo $t_username;?></p><p class="login"><input type="text" name="pseudo"></p></div>
				<div class="login"><p class="login"><?php echo $t_password;?></p><p class="login"><input type="password" name="mdp"></p></div>
				<div class="login"><input type="submit" value="Valider"></div>
			</fieldset>
		</form>
	</section>
	<aside></aside>
	<script src="../js/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script type="text/javascript">captcha()</script>
	
	<?php
	//On inclut pour chaque page, le bas de page générale au site (html, css, connexion bdd, ...)
	include '../contenus/piedpage.php';
}
else
{
	include "../outils/connexbase.php";
	
	$q_user = $bdd->query('SELECT * FROM users WHERE pseudo=\''.$_POST['id'].'\' AND mdp=\''.$_POST['mdp'].'\'');
	$r_user = $q_user->fetch();
	if (!$r_user)
	{
		include '../contenus/entete.php';
		?>
				<div class="erreur">Nom d'utilisateur ou mot de passe erron&eacute; ! Vous serez redirig&eacute; vers la page d'acc&eagrave;s dans quelques secondes...</div>
			</body>
		</html>
		<?php
		header('Refresh: 3; url=\'admin.php\''); 
		ob_flush();
	}
	else
	{
		$_SESSION['dernier_acces'] = time();
		$_SESSION['ipaddr'] = $_SERVER['REMOTE_ADDR'];
		$_SESSION['id'] = $r_user[0];
		$_SESSION['nom'] = $rep1[2];
		$_SESSION['prenom'] = $rep1[3];
		$_SESSION['droits'] = $rep1[1];
		
		header('Refresh: 0; url=\'home.php\'');
		ob_flush();
	}
}
?>