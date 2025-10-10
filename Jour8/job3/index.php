<?php
session_start(); 


if (isset($_POST['reset'])) {
    session_unset(); 
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit;
}

if (isset($_POST['prenom']) && $_POST['prenom'] !== '') {
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = [];
    }
    
    $_SESSION['prenoms'][] = htmlspecialchars($_POST['prenom']);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des prénoms (sessions PHP)</title>
    <style>
        body { font-family: system-ui, sans-serif; margin: 2rem; }
        form { margin-bottom: 1rem; }
        input, button { padding: .5rem; margin: .2rem; }
        ul { list-style-type: " - "; }
    </style>
</head>
<body>
    <h1>Ajouter un prénom</h1>

    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez un prénom" required>
        <button type="submit" name="ajouter">Ajouter</button>
    </form>

    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>

    <h2>Liste des prénoms enregistrés :</h2>
    <?php
    if (!empty($_SESSION['prenoms'])) {
        echo "<ul>";
        foreach ($_SESSION['prenoms'] as $p) {
            echo "<li>$p</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Aucun prénom enregistré pour le moment.</p>";
    }
    ?>
</body>
</html>