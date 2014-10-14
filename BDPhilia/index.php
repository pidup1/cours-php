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
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">   
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="<?php echo $auteur; ?>">
        <meta name="content-type" content="='xhtml'">
        <link href="<?php echo $css; ?>" rel="stylesheet" type="text/css" media="screen"/>
        <title><?php echo $projet; ?></title>
    </head>
    <body>
         <div id="Btop"> 
            <h1><?php echo $titre ?></h1>
            <div id=""Topmenu">
                 <ul>
                    <li><a href="index.php" title="Accueil">Accueil</a></li>
                    <li><a href="connexion.php" title="Connexion">Connexion</a></li>
                    <li><a href="rechercheBd.php" title="Liste">Rechercher</a></li>
                    <li><a href="panier.php" title="Liste">Panier</a></li>
                </ul>
            </div>
            <div id="Bmiddle">
                <div id="Bbottom">
                    <?php 
                    echo $footer
                    ?>
                </div>
            </div>                
        </div>

    </body>
</html>
