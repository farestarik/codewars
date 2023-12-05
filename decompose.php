<?php

include "helpers.php";

function decompose($n) {
    // Helper function to find the decomposed sequence
    function findSequence($remaining, $current, $start) {
        // Base case: if remaining is 0, we found a valid sequence
        if ($remaining == 0) {
            return $current;
        }

        // Iterate from start down to 1 to find the next number to add
        for ($i = $start; $i > 0; $i--) {
            $next = $remaining - $i * $i; 

            // Recursive call to find the next number in the sequence
            $result = findSequence($next, array_merge([$i], $current), $i - 1);

            // If a valid sequence is found, return it
            if ($result !== null) {
                return $result;
            }
        }

        // If no valid sequence is found, return null
        return null;
    }

    // Call the helper function with the square of the given number
    $result = findSequence($n * $n, [], $n - 1);

    // If a valid sequence is found, reverse it to get the increasing order
    return $result !== null ? array_reverse($result) : null;
}

// Examples
print_r(decompose(11));  // Output: [1, 2, 4, 10]
// print_r(decompose(50));  // Output: [1, 3, 5, 8, 49]
