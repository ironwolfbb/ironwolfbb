<?php
///Запуск сессии
session_start();

if($_SESSION['vizit']){
    $_SESSION['vizit'] = 1;
}else{
    $_SESSION['vizit']++;
}

?>