<?php
$str = "Les choses que l'on possède finissent par nous posséder.";
$inverse = "";
$len = mb_strlen($str, 'UTF-8');

for ($i = $len - 1; $i >= 0; $i--) {
    $inverse .= mb_substr($str, $i, 1, 'UTF-8');
}

echo $inverse;
?>
