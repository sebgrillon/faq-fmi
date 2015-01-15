<?php
session_start();
$_SESSION['id'] = '';
$_SESSION['nom'] = '';
$_SESSION['prenom'] = '';
$_SESSION['dernier_acces'] = '';
$_SESSION['ipaddr'] = '';
$_SESSION['fonction'] = '';
$_SESSION['cdg'] = '';

include "../outils/connexbase.php";
//include "../tools/fonctions.php";

$q_user = $bdd->query('SELECT * FROM users WHERE pseudo=\''.$_POST['pseudo'].'\' AND mdp=\''.$_POST['mdp'].'\'');
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
	$_SESSION['nom'] = $rep1[1];
	$_SESSION['prenom'] = $rep1[2];
	$_SESSION['fonction'] = $rep1[4];
	$_SESSION['cdg'] = $rep1[3];

	header('Refresh: 0; url=\'home.php\'');
	ob_flush();
}
?>