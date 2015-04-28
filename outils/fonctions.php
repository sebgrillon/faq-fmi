<?php 

// définitions

$droits_admin = 10;


//fonctions

function conv_date_fr_en($date) {
	$date_fr = str_replace("/","-",$date);
	$date_en = date("Y-m-d",strtotime($date_fr));
	return $date_en;
}

?>
