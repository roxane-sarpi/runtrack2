<?php
session_start(); 


if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
} else {
    
    if (!isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites'] = 0;
    }

    $_SESSION['nbvisites']++;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites</title>
</head>
<body>
    <h1>Compteur de visites</h1>
    <p>Nombre de visites : <strong><?= $_SESSION['nbvisites']; ?></strong></p>

    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>