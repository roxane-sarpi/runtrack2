<?php
$nb_post = 0;

foreach ($posts as $post) {
    if ($post['published'] === true) {
        $nb_post++;
    }
}
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
    <label>Date de naissance : <input type="text" name="date_naissance"></label><br>
    <input type="submit" name="envoyer" value="Envoyer">
  </form>
</body>
</html>