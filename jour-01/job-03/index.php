<?php

function my_is_multiple(int $divider, int $multiple) : bool {

    return $multiple % $divider == 0;
}


if (my_is_multiple(2, 4) === true) {
    echo "Test 1 réussi!\n";
} else {
    echo "Test 1 échoué.\n";
}

if (my_is_multiple(2, 5) === false) {
    echo "Test 2 réussi!\n";
} else {
    echo "Test 2 échoué.\n";
}

?>
