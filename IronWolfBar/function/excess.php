<?php
/// Удалили текушую и родительскию директорию 
function excess($files){
    $result = [];
    for($i = 0; $i < count($files); $i++){
        if($files[$i] != "." && $files[$i] != "..")
        $result[] = $files[$i];
    }
    return $result;
}