<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
for ($lettre = 0; $lettre < strlen($str); $lettre += 2) { 
    echo $str[$lettre];
}