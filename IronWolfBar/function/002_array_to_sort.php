<?php


$menus = [
    [
        'name' => 'Главная страница',
        'sort' => 1,
        'path' => '/', 
    ],
    [
        'name' => 'О нас',
        'sort' => 110,
        'path' => '/about', 
    ],
    [
        'name' => 'О QSOFT',
        'sort' => 10,
        'path' => '/qsoft', 
    ],
    [
        'name' => 'О Skillbox',
        'sort' => 9,
        'path' => '/skillbox', 
    ],
    [
        'name' => 'О погоде',
        'sort' => 9200,
        'path' => '/weather', 
    ],
];

$family =[
    [
        'name' => 'Oksana',
        'eary' => 35,
    ],
    [
        'name' => 'Arina',
        'eary' => 5,
    ],
    [
        'name' => 'Sofia',
        'eary' => 11,
    ],
    [
        'name' => 'Konstantin',
        'eary' => 32,
    ],
];
'<pre>';
var_dump (arraySort($family, 'eary', SORT_ASC));
'<br>';
var_dump($family);
'</pre>';
echo '<br>';


/**
 * Должен получиться следующий порядок:
 * - Главная страница
 * - О Skillbox
 * - О QSOFT
 * - О нас
 * - О погоде
 */