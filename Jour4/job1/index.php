
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET</title>
</head>
<body>

    <h2>Formulaire GET</h2>
    <form method="get" action="">
        <label>Nom : </label>
        <input type="text" name="nom"><br><br>

        <label>Prénom : </label>
        <input type="text" name="prenom"><br><br>

        <label>Âge : </label>
        <input type="text" name="age"><br><br>

         <label>Ville : </label>
        <input type="text" name="ville"><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
    
    
    if (!empty($_GET)) {
        $nbArguments = 0;

        
        foreach ($_GET as $cle => $valeur) {
            $nbArguments = $nbArguments + 1; 
        }

        echo "Le nombre d'argument GET envoyé est : " . $nbArguments;
    }
    ?>
</body>
</html>
