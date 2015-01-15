<?php
if(!isset($_SESSION['dernier_acces']) || !isset($_SESSION['ipaddr']) || !isset($_SESSION['id']))
{
	header("Location:../admin/admin.php");
		die();
}
 
if(time()-$_SESSION['dernier_acces']>$session_timeout)
{
	unset($_SESSION['dernier_acces']);
	unset($_SESSION['id']);
	unset($_SESSION['ipaddr']);
	unset($_SESSION['nom']);
	unset($_SESSION['prenom']);
	unset($_SESSION['fonction']);
	unset($_SESSION['cdg']);
	header("Location:../admin/admin.php");
		die();
}

if($_SERVER['REMOTE_ADDR']!=$_SESSION['ipaddr'])
{
	unset($_SESSION['dernier_acces']);
	unset($_SESSION['id']);
	unset($_SESSION['ipaddr']);
	unset($_SESSION['nom']);
	unset($_SESSION['prenom']);
	unset($_SESSION['fonction']);
	unset($_SESSION['cdg']);
	header("Location:../admin/admin.php");
			die();
	}

$_SESSION['dernier_acces']=time();
?>