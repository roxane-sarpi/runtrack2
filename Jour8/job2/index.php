<?php
if(isset($_COOKIE['nbvisites'])) {
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
    $nbvisites = 1;
}
setcookie('nbvisites', $nbvisites, time() + 3600);
?>