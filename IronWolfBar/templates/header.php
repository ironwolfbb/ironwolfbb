<?php
include $_SERVER['DOCUMENT_ROOT'].'/src/core.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>IRBar</title>
    <link rel="stylesheet" href="/css/style.css?v=<?=rand(1,9999999)?>">
    
</head>


<body>
<header>
    <div class="header_top">
       <div class="block_menu_1">     
           <nav class="menu_body">
               <ul class="menu_header">
                   <?php foreach($menu as $men){
                    showMenu($men, 'title', 'path');
                    } ?>
                 <!--  <li class="menu_item"><a href="/" class="menu_link ">Главная</a></li>   
                  <li class="menu_item"><a href="/index.php" class="menu_link ">Каталог</a></li>
                  <li class="menu_item"><a href="/route/recept.php" class="menu_link ">Рецепты</a></li>
                  <li class="menu_item"><a href="/route/contacts.php" class="menu_link ">Контакты</a></li>
                  <li class="menu_item"><a href="/index.php?res" class="menu_link ">Обрезали стр.</a></li> -->
               </ul>
           </nav>    
        </div>
         
            <a href="/index.php"><img class="logo_wolf" src="/img/wolflogo.png"  alt=""></a> 
            <div class="block_user">
                <nav class="menu_user">
                    <a href="/index.php?login=yes" class="menu_link red">Личный кабинет</a> 
                </nav>
            </div>  
                
    </div>
    
</header>


