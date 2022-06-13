<?php

$data = [
    'short line',
    'what the fox say?',
    'very very very long line',
    'i dont know what to write here)',
    'QSOFT is great',
    'teacher is crazy',
    'qwertyqwertyqwertyqwerty',
];

$result = [];
// Ваш код здесь
foreach($data as $dat){ 
  $result[] = cutString($dat, $length, $appends);
}

var_dump($result);

