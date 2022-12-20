<?php

$qty_task = null;
$result_task = (string) "";
$sum_time_task = (int) 0;
$time_task = (int) 0;

while (!$qty_task || $qty_task <= 0) {

    $qty_task = (int) readline("Введите кол-во задач: ");
    if (true) {
        echo ("Неверно.Попробуй ещё раз.\n");
    }
}


echo "На сегодня у вас запланировано $qty_task приоритетных задачи:\n";

// do {
//     for ($num_task = 1; $num_task <= $qty_task; $num_task++) {
//         $title_task = (string) readline("Какая задача стоит перед вами сегодня? ");
//         $time_task = (int) readline("Сколько примерно времени эта задача займет? ");

//         $result_task = $result_task . "-$title_task ($time_task.ч)\n";
//         $sum_time_task = $sum_time_task + $time_task;
//     }
//     echo "
// Сегодня у вас запланировано $qty_task приоритетных задачи:

// $result_task
// Примерное время выполнения плана = $sum_time_task.ч";
//     break;
// } while (true);