<?php

$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];


// $divider = function ($number) {
//     if ($number % 2 == 0) {
//         return ("четное\n");
//     } else {
//         return ("нечетное\n");
//     }
// };



$result = array_map(fn($number) => $number % 2 == 0 ? "четное" : "нечетное", $numbers);

print_r($result);