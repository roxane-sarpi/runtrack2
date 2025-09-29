<?php

for ($nb = 0; $nb <= 100; $nb++) {

    if ($nb == 42) {
        echo "La Plateforme_";
    } else {

        if ($nb >= 0 && $nb <= 20) {

            echo "<i>" . $nb . "</i>";
        } elseif ($nb >= 25 && $nb <= 50) {

            echo "<u>" . $nb . "</u>";
        } else {
            echo $nb;
        }
    }
    
    echo "<br />";
}
?>