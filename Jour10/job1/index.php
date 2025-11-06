<?php
$host = '127.0.0.1';
$user = 'root';
$password = '';
$db = 'jour09';

$mysqli = new mysqli($host, $user, $password, $db);
if ($mysqli->connect_errno) {
    echo "Échec de la connexion à MySQL: (" . $mysqli->connect_errno . ") " . htmlspecialchars($mysqli->connect_error);
    exit;
}
$mysqli->set_charset('utf8mb4');

$sql = "SELECT * FROM etudiants";
if (!$result = $mysqli->query($sql)) {
    echo "Erreur lors de la requête: " . htmlspecialchars($mysqli->error);
    $mysqli->close();
    exit;
}

$fields = $result->fetch_fields();
?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Liste des étudiants</title>
<style>
table {border-collapse: collapse; width: 100%;}
th, td {border: 1px solid #ccc; padding: 8px; text-align: left;}
thead {background: #f4f4f4;}
</style>
</head>
<body>
<h1>Étudiants</h1>
<table>
  <thead>
    <tr>
<?php foreach ($fields as $f): ?>
      <th><?php echo htmlspecialchars($f->name); ?></th>
<?php endforeach; ?>
    </tr>
  </thead>
  <tbody>
<?php while ($row = $result->fetch_assoc()): ?>
    <tr>
<?php foreach ($row as $cell): ?>
      <td><?php echo htmlspecialchars((string)$cell); ?></td>
<?php endforeach; ?>
    </tr>
<?php endwhile; ?>
  </tbody>
</table>
<?php
$result->free();
$mysqli->close();
?>
</body>
</html>