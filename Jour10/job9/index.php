<?php

$host = '127.0.0.1';
$db   = 'jour09';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    $stmt = $pdo->query('SELECT * FROM salles ORDER BY capacite DESC');
    $rows = $stmt->fetchAll();
} catch (PDOException $e) {
  
    die('Erreur : ' . $e->getMessage());
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Liste des salles</title>
</head>
<body>
<?php if (!empty($rows)): ?>
    <table border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <?php foreach (array_keys($rows[0]) as $col): ?>
                    <th><?= htmlspecialchars($col) ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $row): ?>
                <tr>
                    <?php foreach ($row as $cell): ?>
                        <td><?= htmlspecialchars($cell) ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Aucune salle trouvée dans la base.</p>
<?php endif; ?>
</body>
</html>