<?php
$menu =array();
	$menu['index.php']['fr'] =array('desc' => 'Accueil','title' => 'Accueil');
	$menu['index.php']['en'] =array('desc' => 'Homepage','title' => 'Homepage');
	
	$menu['connexion.php']['fr'] =array('desc' => 'Connexion');
	$menu['connexion.php']['en'] = &$menu['connexion.php']['fr'];
	$menu['connexion.php']['fr']['title'] = 'Connexion';
	
	$menu['rechercheBd.php']['fr']['desc'] = 'Rechercher';
	$menu['rechercheBd.php']['fr']['title'] = 'Liste';
	$menu['rechercheBd.php']['en']['desc'] = 'Search';
	$menu['rechercheBd.php']['en']['title'] = 'List';

	$menu['panier.php'] = array(
		'fr' => array(
			'desc' => 'Panier',
			'title' => 'Panier d\'achat'
			),
		'en' => array(
			'desc' => 'Cart',
			'title' => 'Shopping Cart'
			)
		);
?>
