<?php
require_once 'inc\inc.inc.php';
require_once 'inc\lib\calcul.inc';
/* Definition variables */
$tauxTva[1] = 5.5;
$tauxTva[2] = 19.6;




//error handler function
//function customError($errno, $errstr) {
//    echo "<b>Error:</b> [$errno] $errstr";
//}
//
//set_error_handler("customError");
// Réceupération de la référence saisie, de la langue de l'internaute, du fond et de l'acceptation des CGV
$ref = @$_POST['ref'];
$lang = $_POST['lang'];
$fond = $_POST['fond'];
//$fond = @$_POST['cgv'];
$cgv = array_key_exists("cgv", $_POST);

//        @($_POST['cgv'] == 'ok') ? true : false;
// Fontion Vérification si enregistrement existe      
$refIsFound = false;
foreach ($livres as $id => $livre)
    if ($id == $ref)
        $refIsFound = true;
//set error handler




if ($refIsFound) {
    $ht = $livres[$ref]['prix'];
    $tva = calcul_tva($ht, $tauxTva[1]);
    $ttc = calcul_ttc($ht, $tauxTva[1]);
    ?>
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lang; ?>" lang="<?php echo $lang; ?>">
        <head>
            <title><?php echo $titre; ?></title>
            <meta name="author" content="<?php echo $auteur; ?>"/>
            <meta http-equiv="content-type" content="application/xhtml+xml; charset=<?php echo $xmlEncoding; ?>"/>
            <link href="<?php echo $css; ?>" rel="stylesheet" type="text/css" media="screen"/>
        </head>
        <body>
            <table style="background-color: #<?php echo $fond; ?>" width="100%">
                <tr>
                    <td rowspan="7"style="text-align: center"><img src="img/bd/<?php echo $ref; ?>.jpg" style="width: 100px;"/></td>
                    <th><?php echo $libelle['titre'][$lang]; ?></th>
                    <td><?php echo $livres[$ref]['titre']; ?></td>
                </tr>
                <tr>
                    <th><?php echo $libelle['auteur'][$lang] ?></th>
                    <td><?php
    $nomaff = $livres[$ref]['auteur'];
    $pos = strpos($nomaff, '/');
    if ($pos == -1) :
        echo $nomaff;
    else :
    $nomaut = str_replace("/","<br>",$livres[$ref]['auteur']);
    echo $nomaut;
    endif;
//    echo $livres[$ref]['auteur'];
    ?></td>
                </tr>
                <tr>
                    <th><?php echo $libelle['editeur'][$lang]; ?></th>
                    <td><?php echo $livres[$ref]['editeur']; ?></td>
                </tr>
                <tr>
                    <th><?php echo $libelle['sortie'][$lang]; ?></th>
                    <td><?php echo $livres[$ref]['sortie']; ?></td>
                </tr>
                <tr>
                    <th><?php echo $libelle['prixHT'][$lang]; ?></th>
                    <td><?php echo $ht; ?> &euro;</td>
                </tr>
                <tr>
                    <th><?php echo $libelle['prixTVA'][$lang]; ?></th>
                    <td><?php echo $tva; ?> &euro;</td>
                </tr>
                <tr>
                    <th><?php echo $libelle['prixTTC'][$lang]; ?></th>
                    <td><?php echo $ttc; ?> &euro;</td>
                </tr>
            </table>
        </body>
    <?php
} else {
    $j = $total = 0;
    $msg = '<table width="100%">
						<tr style="background-color: #555">
							<th colspan="2">' . $libelle['titre'][$lang] . '</th>
							<td class="right" style="width:50px">' . $libelle['stock'][$lang] . '</td>
							<td class="right" style="width:50px">' . $libelle['prix'][$lang] . '</td>
							<td class="right" style="width:50px">' . $libelle['total'][$lang] . '</td>
						</tr>';
    foreach ($livres as $id => $livre) {
        $sstot = $livre['stock'] * $livre['prix'];
//						$total += $sstot;
        $style = (($j % 2) == 0) ? ' style="background-color: #' . $fond . '"' : '';
        $msg .= '<tr' . $style . '>';
        $msg .= '<td style="text-align: center"><img src="img/bd/' . $id . '.jpg" style="width: 20px;"/></td>';
        $msg .= '<td>' . $livre['titre'] . '</td>';
        $msg .= '<td class="right">' . $livre['stock'] . '</td>';
        $msg .= '<td class="right">' . $livre['prix'] . '</td>';
        $msg .= '<td class="right">' . $sstot . ' &euro;</td>';
        $msg .= '</tr>';
        $j++;
    }
    $msg .= '<tr>
							<th colspan="4">' . $libelle['total'][$lang] . '</th>
							<td>' . $total . ' &euro;</td>
						</tr>
						</table>';
    echo $msg;
}
?>
</html>