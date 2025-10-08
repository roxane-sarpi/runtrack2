<?php
session_start(); 


if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
} else {
    
    if (!isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites'] = 0;
    }
    
    $_SESSION['nbvisites']++;
}
?>