<?php

function my_closest_to_zero(array $array) : int {
    $closest = null;

    $i = 0;
    while (isset($array[$i])) {
        $num = $array[$i];
        if ($closest === null || custom_abs($num) < custom_abs($closest) || (custom_abs($num) == custom_abs($closest) && $num < 0)) {
            $closest = $num;
        }
        $i++;
    }

    return $closest;
}


function custom_abs(int $num) : int {
    if ($num < 0) {
        return -$num;
    }
    return $num;
}


$result1 = my_closest_to_zero([2, -1, 5, 23, 21, 9]);
echo $result1 === -1 ? "Test 1 réussi" : "Test 1 échoué", PHP_EOL;

$result2 = my_closest_to_zero([234, -142, 512, 1223, 451, -59]);
echo $result2 === -59 ? "Test 2 réussi" : "Test 2 échoué", PHP_EOL;

?>
