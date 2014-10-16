<?php

$row = 0;
$handle = fopen("bd.csv", "r");
//$csv  = fgetcsv($handle, 0, ";",'"',"\n");

while (($data[] = fgetcsv($handle, 0, ";")) !== FALSE) {
  
}
// print_r($data);
fclose($handle);
///////////////////////////////////////////////////////////////////////////
$db = mysqli_connect("127.0.0.1","userBDphilia","pwd","bdphilia");
$err = mysqli_connect_error();
print_r($err);
print_r($db);
array_shift($data);

//print_r($data);
foreach ($data as $bd) {
$sql = "INSERT INTO `bdphilia`.`bd` (`id` , `titre` , `auteur` , `editeur` , `prix` , `stock` , `sortie`)
VALUES ( '". $bd*['0'].
        "' , '". $bd['1'].
        "' , '". $bd['2'].
        "' , '". $bd['3'].
        "' , '". $bd['4'].
        "' , '". $bd['5'].
        "' , '". $bd['6'].
        "' );";
$reseult = mysqli_query($db, $sql);
echo $result;
}
mysqli_close($db);
