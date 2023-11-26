<?php

include "helpers.php";

function odd_or_even(array $nums): string {
    $sum = 0;

    foreach($nums as $num){
        $sum+= $num;
    }

    $odd_or_even = ( ($sum % 2) == 0 ) ? "even" : "odd";

    return $odd_or_even;
}

// odd_or_even([2, 5, 34, 6]);
echo odd_or_even([0]); // Expected: even
echo odd_or_even([2, 5, 34, 6]); // Expected: odd
echo odd_or_even([0, -1, -5]); // Expected: even