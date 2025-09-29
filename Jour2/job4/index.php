<?php

for ($nb = 0; $nb <= 100; $nb++) {
    if ($nb % 3 == 0 && $nb % 5 == 0 && $nb != 0) { 
        echo "FizzBuzz";
    } elseif ($nb % 3 == 0 && $nb != 0) {
        echo "Fizz";
    } elseif ($nb % 5 == 0 && $nb != 0) {
        echo "Buzz";
    } else {
        echo $nb;
    }
    echo "<br />";
}