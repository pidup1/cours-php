<?php

// Fontion Calcul TVA
function calcul_tva($ht, $codeTva = 1) {
    global $tauxTva;
    return round($ht * ($tauxTva[1] / 100),2);
}

// Fontion Calcul TTC
function calcul_ttc($ht, $codeTva = 1) {
    return round($ht + calcul_tva($ht, $codeTva),2);
}
?>

