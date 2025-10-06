<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Choisir un style</title>

    <?php

    $style = isset($_POST['style']) ? $_POST['style'] : 'style1';
    ?>

  
    <link rel="stylesheet" href="<?php echo htmlspecialchars($style); ?>.css">
</head>

<body>
    <form method="post" action="">
        <label for="style">Choisissez un style :</label>
        <select name="style" id="style">
            <option value="style1" <?php if($style == 'style1') echo 'selected'; ?>>Style 1</option>
            <option value="style2" <?php if($style == 'style2') echo 'selected'; ?>>Style 2</option>
            <option value="style3" <?php if($style == 'style3') echo 'selected'; ?>>Style 3</option>
        </select>
        <button type="submit">Appliquer le style</button>
    </form>

</body>
</html>
