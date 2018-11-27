<?php
$dep = array( 80 =>'Somme', 60=>'Oise', 62 =>'Pas de Calais', '02' =>'Aisne', 59 =>'Nord',);
echo $dep[80] ;
foreach ($dep as $key => $value) {
	// Affichage codes et libellés articles
	echo 'Vous vous trouvez dans le départempent. '.$key.' : '.$value.'<br />'; }
?>
