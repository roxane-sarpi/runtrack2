<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage des arguments POST</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
            width: 50%;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Formulaire méthode POST</h2>

<form method="POST" action="">
    <label>Prénom :</label><br>
    <input type="text" name="prenom"><br><br>

    <label>Nom :</label><br>
    <input type="text" name="nom"><br><br>

    <label>Âge :</label><br>
    <input type="text" name="age"><br><br>

    <label>Email :</label><br>
    <input type="text" name="email"><br><br>

    <input type="submit" value="Envoyer">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
    echo "<h3>Résultat :</h3>";
    echo "<table>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

 
    foreach ($_POST as $argument => $valeur) {
        $argument = htmlspecialchars($argument);
        $valeur = htmlspecialchars($valeur);

        echo "<tr><td>$argument</td><td>$valeur</td></tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
