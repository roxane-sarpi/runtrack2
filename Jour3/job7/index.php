<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";


$n = strlen($str);


$newStr = "";

for ($i = 1; $i < $n; $i++) {
    $newStr .= $str[$i];   
}

$newStr .= $str[0];

echo $newStr;
?>
