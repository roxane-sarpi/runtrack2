<?php 
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

$dic = [
    "consonnes" => ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", 
                    "n", "p", "q", "r", "s", "t", "v", "w", "x", "y", "z"],
    "voyelles"  => ["a", "e", "i", "o", "u"]
];


$compteur = [
    "consonnes" => 0,
    "voyelles"  => 0
];

// boucle caractère par caractère
$i = 0;
while (isset($str[$i])) {
    $char = $str[$i];

    // transformer majuscule en minuscule sans strtolower()
    if ($char >= 'A' && $char <= 'Z') {
        $char = chr(ord($char) + 32); // ASCII maj → min
    }

    // vérifier voyelles
    $j = 0;
    while (isset($dic["voyelles"][$j])) {
        if ($char == $dic["voyelles"][$j]) {
            $compteur["voyelles"]++;
            break; // trouvé, inutile de continuer
        }
        $j++;
    }

    // vérifier consonnes
    $k = 0;
    while (isset($dic["consonnes"][$k])) {
        if ($char == $dic["consonnes"][$k]) {
            $compteur["consonnes"]++;
            break;
        }
        $k++;
    }

    $i++;
}

?>

<table border="1" cellpadding="5" cellspacing="0">
 <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $compteur["voyelles"] ?></td>
            <td><?= $compteur["consonnes"] ?></td>
        </tr>
    </tbody>
</table>
