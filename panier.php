<?php
	
	include_once 'model/Cart.php';

	//panier
	$variable1 = (isset($_GET["variable1"])) ? $_GET["variable1"] : NULL;
	
	if ($variable1) {
		// Faire quelque chose...
		$panier=Cart::getInstance();
		$donnee_panier=$panier->get();
		$tab=json_decode($donnee_panier,true);
		echo("Nombre d'items dans le panier : ".$tab['nb']);
		echo(" Total : ".$tab['total']);
		//echo les items
	} else {
		// echo "FAIL";
	}

?>


