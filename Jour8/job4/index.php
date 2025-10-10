<?php 
$expire = time() + 365*24*3600;
if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    setcookie('prenom', $prenom, $expire); 
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

$prenom = $_COOKIE['prenom'] ?? null;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion avec cookie</title>
  <style>
    body { font-family: system-ui, sans-serif; margin: 2rem; }
    input, button { padding: .5rem; margin: .2rem; }
  </style>
</head>
<body>
<?php if (!$prenom): ?>
  
  <h1>Connexion</h1>
  <form method="post">
    <label>Prénom :
      <input type="text" name="prenom" required>
    </label>
    <button type="submit" name="connexion">Connexion</button>
  </form>
<?php else: ?>

  <h1>Bonjour <?= htmlspecialchars($prenom) ?> !</h1>
  <form method="post">
    <button type="submit" name="deco">Déconnexion</button>
  </form>
<?php endif; ?>
</body>
</html>