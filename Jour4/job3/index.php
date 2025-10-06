<?php
$nbPost = count($_POST);
echo "Le nombre d'argument POST envoyé est : " . $nbPost;
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nombre POST</title>
</head>
<body>
    <h1>Formulaire POST</h1>
 <form method="post">
    <label>Prénom : <input type="text" name="prenom"></label><br>
    <label>Pseudo : <input type="text" name="pseudo"></label><br>
    <label>Pays : <input type="text" name="pays"></label><br>
    <input type="submit" name="envoyer" value="Envoyer">
  </form>
</body>
</html>