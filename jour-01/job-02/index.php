<?php

function my_str_reverse(string $string) : string {
    $reversedString = '';
    $i = 0;

    while (isset($string[$i])) {
        $i++;
    }

    while ($i >= 0) {
        if (isset($string[$i])) {
            $reversedString .= $string[$i];
        }
        $i--;
    }

    return $reversedString;
}


if (my_str_reverse('Hello') === 'olleH') {
    echo "Test réussi!";
} else {
    echo "Test échoué.";
}

?>
