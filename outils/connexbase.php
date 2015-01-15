<?php 
//phpinfo();
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=faq-fmi', 'root', '');
//	$bdd = new PDO('mysql:host=servername;dbname=databasename','username','password');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
