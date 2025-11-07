<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=jour09;charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT AVG(capacite) AS moyenne_capacite FROM salles";
    $stmt = $pdo->query($sql);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    echo '<!doctype html><html lang="fr"><head><meta charset="utf-8"><title>Capacité moyenne</title></head><body>';
    if ($row !== false) {
        echo '<table border="1" cellpadding="6" cellspacing="0">';
      
        echo '<tr>';
        foreach (array_keys($row) as $colName) {
            echo '<th>' . htmlspecialchars($colName) . '</th>';
        }
        echo '</tr>';
    
        echo '<tr>';
        foreach ($row as $value) {
            if (is_null($value)) {
                echo '<td>NULL</td>';
            } else {
            
                echo '<td>' . htmlspecialchars(number_format((float)$value, 2, '.', '')) . '</td>';
            }
        }
        echo '</tr>';
        echo '</table>';
    } else {
        echo '<p>Aucun résultat.</p>';
    }
    echo '</body></html>';
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . htmlspecialchars($e->getMessage());
}