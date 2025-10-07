<?php
function ($a, $operator, $b) {
    if ($operator === '+') {
        return $a + $b;
    } elseif ($operator === '-') {
        return $a - $b;
    } elseif ($operator === '*') {
        return $a * $b; 
    } elseif ($operator === '/') {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Erreur : Division par zéro impossible.";
        }
    } elseif ($operator === '%') {
        if ($b != 0) {
            return $a % $b;
        } else {
            return "Erreur : Modulo par zéro impossible.";
        }
    }
}

?>