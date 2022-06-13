<?php
 
 function showMenu($menu, $title='title', $path='path'){
 ?>  <li class="menu_item"><a href="<?= $menu['path'] ?>" class="menu_link"><?= $menu['title'] ?></a></li> 
 <?php
}

function menu($menu, $key='sort', $sort = SORT_DESC){
    switch($sort){
        case 'SORT_DESC':
        $menu[] = arraySort($menu, $key, SORT_ASC);
       /*  return $menu;
        break; */
    } 
    foreach($menu as $men){
        
 showMenu($men, 'title', 'path');    
}
}