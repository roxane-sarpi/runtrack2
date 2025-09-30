<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
for ($lettre = 0; $lettre < strlen ($str); $lettre ++) {
if ($str[$lettre] === 'a' ||$str[$lettre] === 'A' || $str[$lettre] === 'e' ||$str[$lettre] === 'E' ||$str[$lettre] === 'i' ||$str[$lettre] === 'I' ||$str[$lettre] === 'o' ||$str[$lettre] === 'O' ||$str[$lettre] === 'u' ||$str[$lettre] === 'U' ||$str[$lettre] === 'y' ||$str[$lettre] === 'Y') {
echo $str[$lettre];
} else { 
    echo "";
}
}