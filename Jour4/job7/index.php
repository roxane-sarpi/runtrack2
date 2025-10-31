<?php


$L = isset($_GET['largeur']) ? (int)$_GET['largeur'] : 10;   
$H = isset($_GET['hauteur']) ? (int)$_GET['hauteur'] : 5;    


if ($L < 4) { $L = 4; }
if ($H < 2) { $H = 2; }


$house = "";


$half = (int)($L / 2);


for ($i = 0; $i < $half - 1; $i++) {
    
    for ($s = 0; $s < ($half - 1 - $i); $s++) { $house .= ' '; }
    
    $house .= '/';
   
    for ($m = 0; $m < ($i * 2); $m++) { $house .= ' '; }

    $house .= '\\';
    $house .= "\n";
}


if ($L % 2 == 0) {
    
    $underline = $L;
    for ($s = 0; $s < 0; $s++) { $house .= ' '; } 
} else {
    
    for ($s = 0; $s < 0; $s++) { $house .= ' '; } 
}
$house .= '/';
for ($u = 0; $u < ($L - 2); $u++) { $house .= '_'; }
$house .= '\\';
$house .= "\n";


for ($row = 0; $row < $H - 1; $row++) {
    $house .= '|';
    for ($m = 0; $m < ($L - 2); $m++) { $house .= ' '; }
    $house .= '|';
    $house .= "\n";
}


$house .= '|';
for ($b = 0; $b < ($L - 2); $b++) { $house .= '_'; }
$house .= '|';
$house .= "\n";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Job 07 — Maison</title>
    <style>
        body { font-family: ui-monospace, Menlo, Consolas, monospace; padding: 24px; }
        form { margin-bottom: 16px; }
        input[type="number"] { width: 120px; }
        .box { padding: 12px; background: #f6f6f6; border: 1px solid #ddd; }
        pre { margin: 0; }
    </style>
</head>
<body>
    <h1>Ma maison</h1>
    <form method="get">
        <label>Largeur :
            <input type="number" name="largeur" value="<?php echo $L; ?>" min="4" step="1" required>
        </label>
        &nbsp;&nbsp;
        <label>Hauteur :
            <input type="number" name="hauteur" value="<?php echo $H; ?>" min="2" step="1" required>
        </label>
        &nbsp;&nbsp;
        <button type="submit">Dessiner</button>
    </form>

    <div class="box">
        <pre><?php echo htmlspecialchars($house, ENT_QUOTES | ENT_SUBSTITUTE); ?></pre>
    </div>
</body>
</html>
