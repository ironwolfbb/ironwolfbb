<?php
include $_SERVER['DOCUMENT_ROOT'].'/templates/header.php';
///Счетчик посешения страницы
include $_SERVER['DOCUMENT_ROOT']. '/cookie/cookie.php';


$dir = "../upload/";
$files = scandir($dir);
$files = excess($files);
?>
<a href="/gallery/create.php">Загрузить фото</a>
<?php


foreach($files as $file){ ?>
<div class="gall">
    
    <img class="gallery" src="<?= $dir. '../upload/'. $file ?>" alt=""><?php
  /*   var_dump($file); */
}

?>
</div>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php';