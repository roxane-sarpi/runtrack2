<?php
$str = "Dans l'espace, personne ne vous entend crier";
$compteur = 0;

// On parcourt jusqu’à ce qu’on trouve "rien" (chaîne vide)
while (isset($str[$compteur])) {
    $compteur++;
}

echo "La chaîne contient " . $compteur . " caractères.";
?>