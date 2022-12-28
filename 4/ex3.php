<?php



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

//Не понимаю почему дальше 0 массива не проверяет ... F