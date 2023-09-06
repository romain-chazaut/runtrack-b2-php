<?php

function my_is_prime(int $number) : bool {

    if ($number < 2) {
        return false;
    }


    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i == 0) {
            return false; 
        }
    }
    

    return true;
}


if (my_is_prime(3) === true) {
    echo "Test 1 réussi!\n";
} else {
    echo "Test 1 échoué.\n";
}

if (my_is_prime(12) === false) {
    echo "Test 2 réussi!\n";
} else {
    echo "Test 2 échoué.\n";
}

?>
