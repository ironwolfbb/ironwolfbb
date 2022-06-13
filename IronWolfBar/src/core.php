<?php
include $_SERVER['DOCUMENT_ROOT']. '/constants.php';

include $_SERVER['DOCUMENT_ROOT']. '/helpers/helperData.php';
/// Обрезали страку
include $_SERVER['DOCUMENT_ROOT']. '/function/cutstring.php';

/// С
include $_SERVER['DOCUMENT_ROOT']. '/function/arraysort.php';

/// Проверка на вход  пользователя
include $_SERVER['DOCUMENT_ROOT']. '/src/user.php';

include $_SERVER['DOCUMENT_ROOT']. '/main_menu.php';

include $_SERVER['DOCUMENT_ROOT']. '/src/showMenu.php';

/// Удалили текушую и родительскию директорию 
include $_SERVER['DOCUMENT_ROOT']. '/function/excess.php';


/// Загрузка файлов в галереи
/* include $_SERVER['DOCUMENT_ROOT']. '/src/fileAdd.php'; */

/// Подключени БД ironwolf
include $_SERVER['DOCUMENT_ROOT']. '/src/connect.php';