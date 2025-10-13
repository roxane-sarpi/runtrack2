<?php
session_start();

if (isset($_POST['reset'])) {
    unset($_SESSION['grille']);
    unset($_SESSION['joueur']);
}

if (!isset($_SESSION['grille'])) {
    $_SESSION['grille'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
    $_SESSION['joueur'] = 'X';
}

if (isset($_POST['case'])) {
    list($ligne, $colonne) = explode('-', $_POST['case']);
    if ($_SESSION['grille'][$ligne][$colonne] == '-') {
        $_SESSION['grille'][$ligne][$colonne] = $_SESSION['joueur'];
        $_SESSION['joueur'] = ($_SESSION['joueur'] == 'X') ? 'O' : 'X';
    }
}

function verifierVictoire($grille, $joueur) {
    for ($i = 0; $i < 3; $i++) {
        if ($grille[$i][0] == $joueur && $grille[$i][1] == $joueur && $grille[$i][2] == $joueur) return true;
        if ($grille[0][$i] == $joueur && $grille[1][$i] == $joueur && $grille[2][$i] == $joueur) return true;
    }
    if ($grille[0][0] == $joueur && $grille[1][1] == $joueur && $grille[2][2] == $joueur) return true;
    if ($grille[0][2] == $joueur && $grille[1][1] == $joueur && $grille[2][0] == $joueur) return true;
    return false;
}

$gagnant = '';
$matchNul = true;

if (isset($_SESSION['grille'])) {
    foreach (['X', 'O'] as $j) {
        if (verifierVictoire($_SESSION['grille'], $j)) {
            $gagnant = $j;
            break;
        }
    }

    foreach ($_SESSION['grille'] as $ligne) {
        foreach ($ligne as $case) {
            if ($case == '-') $matchNul = false;
        }
    }
}

if ($gagnant != '' || ($matchNul && $gagnant == '')) {
    $message = $gagnant != '' ? "$gagnant a gagné !" : "Match nul !";
    unset($_SESSION['grille']);
    unset($_SESSION['joueur']);
} else {
    $message = '';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Morpion</title>
</head>
<body>

<p><?php echo $message; ?></p>

<form method="post">
    <table>
        <?php for ($i = 0; $i < 3; $i++): ?>
            <tr>
                <?php for ($j = 0; $j < 3; $j++): ?>
                    <td>
                        <?php
                        $valeurCase = isset($_SESSION['grille'][$i][$j]) ? $_SESSION['grille'][$i][$j] : '-'; 
                        if ($valeurCase == '-'): ?>
                            <button type="submit" name="case" value="<?php echo $i.'-'.$j; ?>">-</button>
                        <?php else: ?>
                            <?php echo $valeurCase; ?>
                        <?php endif; ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    <br>
    <button type="submit" name="reset">Réinitialiser la partie</button>
</form>

</body>
</html>