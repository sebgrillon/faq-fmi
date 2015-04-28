<?php
session_start();
$_SESSION['id'] = '';
$_SESSION['nom'] = '';
$_SESSION['prenom'] = '';
$_SESSION['dernier_acces'] = '';
$_SESSION['ipaddr'] = '';
$_SESSION['fonction'] = '';
$_SESSION['droits'] = '';
$_SESSION['cdg'] = '';

include '../contenus/textes.php';
include "../outils/connexbase.php";
//include "../tools/fonctions.php";

$q_user = $bdd->query('SELECT * FROM users WHERE pseudo=\''.$_POST['pseudo'].'\' AND mdp=\''.$_POST['mdp'].'\'');
$r_user = $q_user->fetch();
if (!$r_user)
{
include '../contenus/entete.php';
?>
		<div class="erreur"><?php echo $t_mauvaislogin;?></div>
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
	$_SESSION['nom'] = $r_user[2];
	$_SESSION['prenom'] = $r_user[3];
	$_SESSION['fonction'] = $r_user[5];
	$_SESSION['droits'] = $r_user[1];
	$_SESSION['cdg'] = $r_user[4];

	header('Refresh: 0; url=\'home.php\'');
	ob_flush();
}
?>