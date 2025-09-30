<?php  

$largeur = 20; 
$hauteur = 10; 

for ($i = 1; $i <= $hauteur; $i++) {
    for ($j= 1; $j <= $largeur; $j++){
        if ($i == 1 || $i == $hauteur || $j == 1 || $j == $largeur) {
            echo "*";
        } else {
            echo " &nbsp; ";
        }
    }
    echo "<br>";
}

?>