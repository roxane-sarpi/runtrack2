<?php
function leetSpeak($str) {
    $leetDict = [
        'A' => '4', 'a' => '4',
        'E' => '3', 'e' => '3',
        'I' => '1', 'i' => '1',
        'O' => '0', 'o' => '0',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7'
    ];
    $result = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        $result .= isset($leetDict[$char]) ? $leetDict[$char] : $char;
    }
    return $result;
}
$str = "Toit";
echo leetSpeak($str);
?>