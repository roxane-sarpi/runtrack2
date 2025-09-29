<?php

// Fonction pour vérifier si un nombre est premier
function estPremier($nombre) {
    if ($nombre <= 1) {
        return false;
    }
    if ($nombre <= 3) {
        return true;
    }
    if ($nombre % 2 == 0 || $nombre % 3 == 0) {
        return false;
    }
    
    // Vérification jusqu'à la racine carrée du nombre
    for ($i = 5; $i * $i <= $nombre; $i += 6) {
        if ($nombre % $i == 0 || $nombre % ($i + 2) == 0) {
            return false;
        }
    }
    return true;
}

// Affichage des nombres premiers jusqu'à 1000
for ($nb = 2; $nb <= 1000; $nb++) {
    if (estPremier($nb)) {
        echo $nb . "<br />";
    }
}
?>