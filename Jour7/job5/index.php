<?php
function occurrences($str, $char) {
    $count = 0;
    $i = 0;
    
    while (isset($str[$i])) {
        if ($str[$i] === $char) {
            $count++;
        }
        $i++;
    }
    
    return $count;
}

$str = "Bonjour";
$char = "o";
echo "Le caractère '$char' apparaît " . occurrences($str, $char) . " fois dans '$str'.";
?>
