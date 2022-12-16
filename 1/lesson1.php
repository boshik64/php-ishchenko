<?php

$name = readline('Как тебя зовут?');
$age = readline('Сколько тебе лет?');


$hello = "Вас зовут $name, вам $age лет";

echo "$hello\n";

$task_1 = readline('Какая задача стоит перед вами сегодня?');
$task_time_1 = readline('Сколько примерно времени эта задача займет?');

$task_2 = readline('Какая задача стоит перед вами сегодня?');
$task_time_2 = readline('Сколько примерно времени эта задача займет?');

$task_3 = readline('Какая задача стоит перед вами сегодня?');
$task_time_3 = readline('Сколько примерно времени эта задача займет?');
$sum = $task_time_1 + $task_time_2 + $task_time_3;


$term = 'ч';

echo "
$name, сегодня у вас запланировано 3 приоритетных задачи на день:\n
-$task_1 ($task_time_1$term)
-$task_2 ($task_time_2$term)
-$task_3 ($task_time_3$term)

Примерное время выполнения плана = ($sum$term)";