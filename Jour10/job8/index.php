<?php
try {
   
    $pdo = new PDO('mysql:host=localhost;dbname=jour09;charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT SUM(capacite) AS capacite_totale FROM salles";
    $stmt = $pdo->query($sql);


    $columns = [];
    for ($i = 0; $i < $stmt->columnCount(); $i++) {
        $meta = $stmt->getColumnMeta($i);
        $columns[] = $meta['name'];
    }
    ?>
    <!doctype html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Capacité totale des salles</title>
    </head>
    <body>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <?php foreach ($columns as $col): ?>
                <th><?php echo htmlspecialchars($col); ?></th>
            <?php endforeach; ?>
        </tr>
        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <?php foreach ($columns as $col): ?>
                    <td><?php echo htmlspecialchars($row[$col]); ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endwhile; ?>
    </table>
    </body>
    </html>
<?php
} catch (PDOException $e) {
    echo "Erreur de connexion ou de requête : " . htmlspecialchars($e->getMessage());
}
?>