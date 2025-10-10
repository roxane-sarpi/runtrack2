<?php
session_start(); 


if (isset($_POST['reset'])) {
    session_unset(); 
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit;
}

if (isset($_POST['prenom']) && $_POST['prenom'] !== '') {
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = [];
    }
u
    $_SESSION['prenoms'][] = htmlspecialchars($_POST['prenom']);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>
