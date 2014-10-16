<?php

$filename = 'bd.csv'; 
$fhandle = fopen($filename, "rb");
$contents = fread($fhandle, filesize($filename));
//
$contents = iconv("TUF-8","USO-8859-1//IGNORE", $contents);
fclose($fhandle);
//
$ligne = explode("\n", $contents);

$labels = explode ('";"', substr(array_shift($lignes), 1, -1));
$bds = array();
foreach ($lignes as $ligne) {
    $bdin = explode(';', $ligne);
    $bdout = aray();
    foreach ($labels as $k => $label) {
        $val = $bdin[$k];
        if (substr($val, 0, -1) == '"') 
                $val = substr($val, 1, -1);
        $bdout[$label]= $val;
        }
        $bds[] = $bdout ;
    }

    print_r($bds);
////////////////////////////////////////////////////////////////////////////////

$db = mysql_connect("127.0.0.1",'bd','userBDphilia','BDphilia')        ;

foreach ($bds as $bd) {
$sql = "INSERT INTO `bdphilia`.`bd` (`id` , `titre` , `auteur` , `editeur` , `prix` , `stock` , `sortie`)
VALUES ( '". $bds['id'].
        "' , '". $bds['titre'].
        "' , '". $bds['auteur'].
        "' , '". $bds['editeur'].
        "' , '". $bds['prix'].
        "' , '". $bds['srock'].
        "' , '". $bds['sortie'].
        "' );";
$reseult = mysqli_query($db, $sql);
}
mysqli_close($db);
