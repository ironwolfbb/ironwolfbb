<?php
///Приложение которое считает количество посешений страницы
if(!isset($_COOKIE['count_vizit']) || empty($_COOKIE['count_vizit'])){
    setcookie('count_vizit', 1, time()+60*60 );
}else{
    $count = $_COOKIE['count_vizit'] + 1;
    setcookie('count_vizit', $count, time()+60*60);
}

?>