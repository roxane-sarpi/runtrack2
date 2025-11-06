<?php

$host = '127.0.0.1';
$db   = 'jour09';
$user = 'root';
$pass = ''; 
$dsn  = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . htmlspecialchars($e->getMessage());
    exit;
}


$sql = "SELECT * FROM salles ORDER BY capacite ASC";
try {
    $stmt = $pdo->query($sql);
    $rows = $stmt->fetchAll();
} catch (PDOException $e) {
    echo "Erreur de requête : " . htmlspecialchars($e->getMessage());
    exit;
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Liste des salles</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #999; padding: 8px; text-align: left; }
        th { background: #eee; }
    </style>
</head>
<body>
    <h1>Liste des salles (triées par capacité croissante)</h1>

    <?php if (empty($rows)): ?>
        <p>Aucune salle trouvée.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <?php
                  
                    $headers = array_keys($rows[0]);
                    foreach ($headers as $h) {
                        echo '<th>' . htmlspecialchars($h) . '</th>';
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <?php foreach ($row as $cell): ?>
                            <td><?php echo htmlspecialchars((string)$cell); ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>