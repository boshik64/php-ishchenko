<?php

$correct_answer = (int) 8;
$uncorrect_answer = [6, 10];

while (true) {
    $user_answer = (int) readline("Назовите кол-во рядов шахмотной доски:
         -$uncorrect_answer[0]
         -$correct_answer
         -$uncorrect_answer[1]");

    if ($user_answer == $correct_answer) {
        echo "Абсолютно верно! В шахматной доске $correct_answer рядов.\n";
        break;
    } elseif (in_array($user_answer, $uncorrect_answer)) {
        echo "Неверно.\n";
        break;
    } else {
        echo "Этого даже в вариантах нет. Попробуйте ещё раз.\n";
    }
}