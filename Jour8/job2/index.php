<?php
if(isset($_COOKIE['nbvisites'])) {
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
    $nbvisites = 1;
}

setcookie('nbvisites', $nbvisites, time() + 3600);

echo "Nombre de visites : " . $nbvisites;

if (isset($_POST['reset'])) {
    setcookie('nbvisites', '', time() - 3600);
}

?>