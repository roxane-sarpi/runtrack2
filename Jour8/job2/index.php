<?php

if (isset($_POST['reset'])) {
    setcookie('nbvisites', '', time() - 3600);
    
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

if (isset($_COOKIE['nbvisites'])) {
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
    $nbvisites = 1;
}

setcookie('nbvisites', $nbvisites, time() + 365*24*3600);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Compteur de visites PHP</title>
</head>
<body>
  <p>Nombre de visites : <?= $nbvisites ?></p>

  <form method="post">
    <button type="submit" name="reset">Reset</button>
  </form>
</body>
</html>
