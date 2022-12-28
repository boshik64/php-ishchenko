<?php

function someFunc(array $numbers): array
{
    $result[] = "max: " . max($numbers);
    $result[] = "min: " . min($numbers);
    $result[] = "avg: " . array_sum($numbers) / count($numbers);
    return $result;
}

var_dump(someFunc([2, 4, 5, 1232, 5232, 2, 0]));