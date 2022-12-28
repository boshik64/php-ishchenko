<?php

// function find($start, $history, $target)
// {
//     if ($start == $target)
//         echo ("{$target}={$history}\n");
//     elseif ($start > $target)
//         return NULL;
//     else
//         return find($start + 5, "({$history}+5)", $target)
//             || find($start * 3, "({$history}*3)", $target);
//     return NULL;
// }

// find(1, 1, 99);



// $numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];


// $divider = function ($number) {
//     if ($number % 2 == 0) {
//         return ("четное\n");
//     } else {
//         return ("нечетное\n");
//     }
// };



// $result = array_map(fn($number) => $number % 2 == 0 ? "четное" : "нечетное", $numbers);

// print_r($result);




// function someFunc(array $numbers): array
// {
//     $result[] = "max: " . max($numbers);
//     $result[] = "min: " . min($numbers);
//     $result[] = "avg: " . array_sum($numbers) / count($numbers);
//     return $result;
// }

// var_dump(someFunc([2, 4, 5, 1232, 5232, 2, 0]));








$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];


function find(string $item_name, $array)
{



    foreach ($array as $array_item) {


        if (is_array($array_item)) {
            return true;
        } elseif ($array_item == $item_name) {
            return find($item_name, $array_item);
        }
    }
    return false;

}



var_dump(find('Ключ', $box));

//Не понимаю почему дальше 0 массива не проверяет ... 