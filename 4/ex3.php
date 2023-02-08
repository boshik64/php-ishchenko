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


function find(string $item_name, array $array)
{



    foreach ($array as $array_item) {


        if (is_array($array_item)) {
            if (find($item_name, $array_item)) {
                return true;
            }
        } else {
            if ($item_name == $array_item) {
                return true;
            }
        }
    }
    return false;

}



var_dump(find('Инструкция', $box));

 