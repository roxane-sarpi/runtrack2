<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription au marathon</title>
</head>
<body>


<form method="get" action="">
    <label>Prénom : <input type="text" name="prenom"></label><br>
    <label>Nom : <input type="text" name="nom"></label><br>
    <label>Âge : <input type="text" name="age"></label><br>
    <input type="submit" value="Envoyer">
</form>
<?php

if (!empty($_GET)) {
    echo "<h2>Résultats :</h2>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

  
    foreach ($_GET as $argument => $valeur) {
        echo "<tr>";
        echo "<td>$argument</td>";
        echo "<td>$valeur</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>
</body>
</html>
