<?php

$wishes = [
    'веселья',
    'благополучия',
    'понимания',
    'внимания',
    'долголетия',
    'обаяния',
    'профессионализма',
    'ума'
];
$epithets = [
    'великого',
    'большого',
    'нескончаемого',
    'насыщенного',
    'не гаснущего',
    'прекрасного',
    'нереального'
];
$random_congrat = [];
$birthday_name = readline("Назовите имя именинника: ");

for ($i = 0; $i < 3; $i++) {
    $random_wish = array_rand($wishes);
    $random_epithet = array_rand($epithets);
    $random_congrat[] = $epithets[$random_epithet] . ' ' . $wishes[$random_wish];
    unset($epithets[$random_epithet]);
    unset($wishes[$random_wish]);
}

$last = array_pop($random_congrat);
$random_congrat_string = implode(", ", $random_congrat) . ' и ' . $last;




echo "$birthday_name, от всего сердца поздравляю тебя с днем рождения, желаю $random_congrat_string.";