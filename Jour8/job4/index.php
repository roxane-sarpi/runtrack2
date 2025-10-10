<?php 
$expire = time() + 365*24*3600;
if (isset($_POST['deco])) {
setcookie ('prenom', '', time() - 3600);
header ("Location: " . $_SERVER['PHP_SELF']);
exit;
}']

if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    setcookie('prenom', $prenom, $expire); 
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>