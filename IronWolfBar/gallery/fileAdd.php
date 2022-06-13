<?php
/// Проверили если файл больше 2 мб то не загружать
if($_FILES['filename']['size'] > 2*1020*1020){
    exit ('ФАЙЛ ПРЕВЫШАЕТ 2 МБ');
}
$filename = $_FILES['filename']['name'];  /// Переменная в которой имя файла
$ext = pathinfo($filename, PATHINFO_EXTENSION); /// функция возврошает информацию пути файла

///Проверили тип файла для загрузки и сохранили в  папку /upload 
if($ext == 'png'  ||  $ext == 'jpg'){ 
   if (move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT']. '/upload//'. $_FILES['filename']
    ['name'])) {
    echo 'Загружено на сайт ' . '<br>';
    echo  $_FILES['filename']['name'] . '<br>';
    echo $_FILES['filename']['size']. '<br>';
    echo $_FILES['filename']['type']. '<br>';
    echo $_FILES['filename']['tmp_name']. '<br>'
    
    ?><a href="/gallery/gallery.php">Вернутся в галерею</a>
    <br>
    <?php       
   }
}else
echo 'ощибка загрузки'
?>

   