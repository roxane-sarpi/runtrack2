<?php

$boolVar   = true;              // booléen
$intVar    = 42;                // entier
$stringVar = "Bonjour";         // chaîne de caractères
$floatVar  = 3.14;              // nombre à virgule flottante


$variables = [
    ["type" => gettype($boolVar),   "nom" => "\$boolVar",   "valeur" => $boolVar ? "true" : "false"],
    ["type" => gettype($intVar),    "nom" => "\$intVar",    "valeur" => $intVar],
    ["type" => gettype($stringVar), "nom" => "\$stringVar", "valeur" => $stringVar],
    ["type" => gettype($floatVar),  "nom" => "\$floatVar",  "valeur" => $floatVar],
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau des Variables PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($variables as $var): ?>
                <tr>
                    <td><?= htmlspecialchars($var["type"]) ?></td>
                    <td><?= htmlspecialchars($var["nom"]) ?></td>
                    <td><?= htmlspecialchars($var["valeur"]) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
