<?php
//On inclut pour chaque page, l'entete générale au site (html, css, connexion bdd, ...)
include '../outils/connexbase.php';
include '../outils/textes.php';
include '../contenus/entete.php';
?>
<nav></nav>
<section>
	<div class="login"><p class="login"><?php echo $t_username;?></p><p class="login"><input type="text" name="id"></p></div>
</section>
<aside></aside>
<script src="../js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript">captcha()</script>

<?php
//On inclut pour chaque page, le bas de page générale au site (html, css, connexion bdd, ...)
include 'piedpage.php';
 ?>