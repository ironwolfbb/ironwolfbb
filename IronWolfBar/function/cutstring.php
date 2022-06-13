<?php
/// отрезали страку


$line = 'Добро пожаловать в мир бодибилдинга';
$length = 12;
$appends = '...';

// Функция удаляюшая символы от заданой длинны
function cutString($line, $length, $appends)/*  : string */
{ 
   if( strlen($line) > $length){
   $line = mb_substr($line, 0, $length);
   return $line . $appends;
} else
 return '<br/>' . $line ;
 
};


