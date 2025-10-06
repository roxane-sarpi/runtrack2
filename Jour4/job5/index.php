<?php 

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


if ($_POST) {
    if ($username === 'John' && $password === 'Rambo') {
        echo "<p style='color: green; font-weight: bold;'>C'est pas ma guerre</p>";
    } else {
        echo "<p style='color: red; font-weight: bold;'>Votre pire cauchemar</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Formulaire de connexion</title>
    </head>
    <body>
        <h1>Formulaire de connexion</h1>
        <form method="POST">
            <div>
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username" required>
            </div>
            <br>
            <div>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <br>
            <input type="submit" value="Se connecter">
        </form>
        
    </body>
</html>