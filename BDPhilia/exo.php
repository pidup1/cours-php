<?php
$xmlVersion = '1.0';
$xmlEncoding = 'UTF-8';
$lang = 'fr';
$projet = 'BDPhilia';
$proprietaire = 'Inexine';
$auteur = 'Pierre';
$css = 'css.css';
$titre = 'Bienvenue sur ' . $projet;
$footer = '&copy; ' . $auteur . " 2014";

$menu = array();
$menu['index.php']['fr'] = array('desc' => 'Accueil', 'title' => 'Accueil');
$menu['index.php']['en'] = array('desc' => 'Homepage', 'title' => 'Homepage');

$menu['connexion.php']['fr'] = array('desc' => 'Connexion', 'title' => 'Connexion');
$menu['connexion.php']['en'] = array('desc' => 'Connexion', 'title' => 'Connexion');

$menu['rechercheBd.php']['fr'] = array('desc' => 'Recherche', 'title' => 'Liste');
$menu['rechercheBd.php']['en'] = array('title' => 'Find', 'title' => 'Find');

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
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">   
    <head>
        <meta charset="UTF-8"/>
        <meta name="author" content="<?php echo $auteur; ?>"/>
        <meta name="content-type" content="='xhtml'"/>
        <link href="<?php echo $css; ?>" rel="stylesheet" type="text/css" media="screen"/>
        <title><?php echo $projet; ?></title>
    </head>
    <body>
        <div id="Btop"> 
            <h1><?php echo $titre ?></h1>
            <div id="topMenu">
                <ul>
                    <li><a href="index.php" title="<?php echo $menu['index.php'][$lang]['title']; ?>"><?php echo $menu['index.php'][$lang]['desc']; ?></a></li>
                    <li><a href='connexion.php' title="<?php echo $menu['connexion.php'][$lang]['title']; ?>"><?php $menu['connexion.php'][$lang]['desc']; ?></a></li>
                    <li><a href="rechercheBd.php" title="<?php echo $menu['rechercheBd.php'][$lang]['title']; ?>"><?php $menu['rechercheBd.php'][$lang]['desc']; ?></a></li>
                    <li><a href="panier.php" title="<?php echo $menu['panier.php'][$lang]['title']; ?>"><?php $menu['panier.php'][$lang]['desc']; ?></a></li>
                </ul>
            </div>
        </div>
        <div id="Bmiddle">

        </div>   
        <div id="Bbottom">
            <?php echo $footer ?>
        </div>
    </body>
</html>
