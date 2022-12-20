<?php

$finger_num = (int) 0;

while (!$finger_num || $finger_num <= 0) {

    $finger_num = (int) readline("Введите число: ");
    if (true) {
        echo ("Неверно.Попробуй ещё раз.\n");
    }
}



for ($i = 1; $i <= $finger_num; $i++) {
    $result = $i % 8;
    if ($result == 0) {
        $result = 2;
    }

}

echo "$result палец";

//Тут сдался , не смог разобраться нормально . Надеюсь в след уроке увижу туториал. 


