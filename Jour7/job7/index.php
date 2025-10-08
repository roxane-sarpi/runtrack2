<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Transformation de texte</title>
</head>
<body>
    <h1>Transformations de texte</h1>
    <form method="post">
        <label for="str">Texte :</label>
        <input type="text" id="str" name="str" required>

        <label for="fonction">Fonction :</label>
        <select name="fonction" id="fonction">
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>

        <div></div>
        <button type="submit">Valider</button>
    </form>

<?php


function longueur($s) {
    $n = 0;
    for (; isset($s[$n]); $n++);
    return $n;
}


function decoupe_mots($str) {
    $mots = [];
    $mot = "";
    for ($i = 0; isset($str[$i]); $i++) {
        if ($str[$i] !== ' ') {
            $mot .= $str[$i];
        } else {
            if ($mot !== "") {       
                $mots[] = $mot;
                $mot = "";
            }
        }
    }
    if ($mot !== "") $mots[] = $mot; 
    return $mots;
}

function join_mots($mots) {
    $sortie = "";
    for ($i = 0; isset($mots[$i]); $i++) {
        $sortie .= $mots[$i];
        if (isset($mots[$i+1])) $sortie .= " ";
    }
    return $sortie;
}

function est_majuscule($c) { return ($c >= 'A' && $c <= 'Z'); }
function est_minuscule($c) { return ($c >= 'a' && $c <= 'z'); }

function finit_par_me($mot) {
    $len = longueur($mot);
    return ($len >= 2 && $mot[$len-2] === 'm' && $mot[$len-1] === 'e');
}


function modulo($a, $m) {
    while ($a < 0)  $a += $m;
    while ($a >= $m) $a -= $m;
    return $a;
}



function gras($str) {
    $mots = decoupe_mots($str);
    for ($i = 0; isset($mots[$i]); $i++) {
        
        if (est_majuscule($mots[$i][0])) {
            $mots[$i] = "<b>" . $mots[$i] . "</b>";
        }
    }
    return join_mots($mots);
}

function cesar($str, $decalage = 2) {
    
    $abc  = "abcdefghijklmnopqrstuvwxyz";
    $ABC  = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $N    = 26;

    
    $indexDans = function($alphabet, $c) {
        for ($i = 0; isset($alphabet[$i]); $i++) {
            if ($alphabet[$i] === $c) return $i;
        }
        return -1;
    };

    $res = "";
    for ($i = 0; isset($str[$i]); $i++) {
        $c = $str[$i];

        if (est_minuscule($c)) {
            $idx = $indexDans($abc, $c);   
            if ($idx >= 0) {
                $nidx = modulo($idx + $decalage, $N);
                $res .= $abc[$nidx];
            } else {
                $res .= $c; 
            }
        } elseif (est_majuscule($c)) {
            $idx = $indexDans($ABC, $c);
            if ($idx >= 0) {
                $nidx = modulo($idx + $decalage, $N);
                $res .= $ABC[$nidx];
            } else {
                $res .= $c;
            }
        } else {
            $res .= $c; 
        }
    }
    return $res;
}

function plateforme($str) {
    $mots = decoupe_mots($str);
    for ($i = 0; isset($mots[$i]); $i++) {
        if (finit_par_me($mots[$i])) {
            $mots[$i] .= "_";
        }
    }
    return join_mots($mots);
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $str = isset($_POST["str"]) ? $_POST["str"] : "";
    $fonction = isset($_POST["fonction"]) ? $_POST["fonction"] : "";

    $sortie = "";
    if ($fonction === "gras") {
        $sortie = gras($str);
    } elseif ($fonction === "cesar") {
        $sortie = cesar($str); 
    } elseif ($fonction === "plateforme") {
        $sortie = plateforme($str);
    } else {
        $sortie = "Choix invalide.";
    }

    echo '<div class="res"><strong>Résultat :</strong> ' . $sortie . '</div>';
}
?>
</body>
</html>
