<?php

$mysqli = new mysqli('localhost', 'root', '', 'jour09');

if ($mysqli->connect_error) {
    die('Erreur de connexion (' . $mysqli->connect_errno . ') ' . htmlspecialchars($mysqli->connect_error));
}


$sql = "SELECT * FROM etudiants WHERE naissance > DATE_SUB(CURDATE(), INTERVAL 18 YEAR)"; 
if (!$result = $mysqli->query($sql)) {
    die('Erreur de requête : ' . htmlspecialchars($mysqli->error));
}


?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Liste des étudiants mineurs</title>
    <style>
        table { border-collapse: collapse; width: 50%; }
        th, td { border: 1px solid #333; padding: 8px; text-align: left; }
        th { background: #eee; }
    </style>
</head>
<body>
    <h1>Liste des étudiants mineurs</h1>
    <?php if ($result->num_rows === 0): ?>
        <p>Aucun étudiant mineur trouvé.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <?php
                   
                    $fields = $result->fetch_fields();
                    foreach ($fields as $field) {
                        echo '<th>' . htmlspecialchars($field->name) . '</th>';
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['id']) ?></td>
                        <td><?= htmlspecialchars($row['prenom']) ?></td>
                        <td><?= htmlspecialchars($row['nom']) ?></td>
                        <td><?= htmlspecialchars($row['naissance']) ?></td>
                    <td><?= htmlspecialchars($row['sexe']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php endif; ?>

</body>
</html>
<?php

if (isset($result) && $result instanceof mysqli_result) { // changed code
    $result->free();
}
$mysqli->close();
?>