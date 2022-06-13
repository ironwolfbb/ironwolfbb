<?php
/// Функция сортировка массива

function arraySort($array, $key = 'SORT', $sort = SORT_ASC) 
{
    usort($array, function ($a, $b) use ($key, $sort) {
        if($sort == SORT_ASC) {
         return  $a[$key] <=> $b[$key];
         
         }else
         return  $b[$key] <=> $a[$key];
    });
     return $array;    
}
?>