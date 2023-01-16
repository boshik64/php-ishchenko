<?php

function someFunc(array $numbers): array
{
    return [
        "max: " => max($numbers),
        "min: " => min($numbers),
        "avg: " => array_sum($numbers) / count($numbers)
    ];
}

var_dump(someFunc([2, 2, 4, 5, 2, 523, 4, 234, 23, 2]));