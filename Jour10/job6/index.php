<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=jour09;charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query('SELECT COUNT(*) AS nb_etudiants FROM etudiants');
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $nb = $row['nb_etudiants'] ?? 0;
} catch (PDOException $e) {
    echo "Erreur de connexion : " . htmlspecialchars($e->getMessage());
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Nombre d'étudiants</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>nombre d'étudiants</th>
        </tr>
        <tr>
            <td><?php echo (int)$nb; ?></td>
        </tr>
    </table>
</body>
</html>