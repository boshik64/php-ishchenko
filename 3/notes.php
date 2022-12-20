<?php

$some_arr = [1, "вфвфы", 445, true];

$some_arr[] = 333333;


for ($i = 0; $i < count($some_arr); $i++) {
    echo "$some_arr[$i]\n";
}