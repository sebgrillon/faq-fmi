<?php
session_start();
include "authconfig.php";
include "authcheck.php";

unset($_SESSION['dernier_acces']);
unset($_SESSION['id']);
unset($_SESSION['ipaddr']);
unset($_SESSION['nom']);
unset($_SESSION['prenom']);
unset($_SESSION['fonction']);
unset($_SESSION['cdg']);
header("Location:../index.php");
die();


?>