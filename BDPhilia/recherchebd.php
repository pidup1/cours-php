<?php

require_once 'inc\inc.inc.php';

echo '<?xml version="'.$xmlVersion.'" encoding="'.$xmlEncoding.'"?>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lang; ?>" lang="<?php echo $lang; ?>">
	<head>
		<title><?php echo $titre; ?></title>
		<meta name="author" content="<?php echo $auteur; ?>"/>
		<meta http-equiv="content-type" content="application/xhtml+xml; charset=<?php echo $xmlEncoding; ?>"/>
		<link href="<?php echo $css; ?>" rel="stylesheet" type="text/css" media="screen"/>
	</head>
    <body>
        <div id="Btop">
            <div id="topMenu">
                <ul>
                    <li><a href="index.php"  title="<?php echo strtoupper($menu['index.php'][$lang]['title']); ?>"><?php echo strtoupper($menu['index.php'][$lang]['desc']); ?></a></li>
                    <li><a href="connexion.php" title="<?php echo strtoupper($menu['connexion.php'][$lang]['title']); ?>"><?php echo strtoupper($menu['connexion.php'][$lang]['desc']); ?></a></li>
                    <li><a href="rechercheBd.php" class="on" title="<?php echo strtoupper($menu['rechercheBd.php'][$lang]['title']); ?>"><?php echo strtoupper($menu['rechercheBd.php'][$lang]['desc']); ?></a></li>
                    <li><a href="panier.php" title="<?php echo strtoupper($menu['panier.php'][$lang]['title']); ?>"><?php echo strtoupper($menu['panier.php'][$lang]['desc']); ?></a></li>
                </ul>
            </div>s
        </div>
        <div id="Bmiddle">
            <h1><?= $titre ?></h1>
            <form action="doBd.php" method="post">
                <input type="text" name="ref"/>    
                <label>Langue :</label><div><input type="radio" name="lang" value="fr" checked="checked"/> Français
                    <input type="radio" name="lang" value="en"/> Anglais</div>				
                <label>Référence :</label><div>
                    <select name="fond" size="0">
                        <option value="ffc" style="background-color: #ffc">Jaune</option>
                        <option value="fcc" style="background-color: #fcc">Rose</option>
                    </select></div>
                <label>CGV :</label><div>J'acèpte les conditions générales de vente : <input type="checkbox" name="cgv" value="ok" checked="checked"/></div>
                <input type="submit" value="Submit" />

            </form>                      
        </div>
        <div id="Bbottom">
            <?php echo $footer; ?>
        </div>	
    </body>
</html>