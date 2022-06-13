<?php
/* include $_SERVER['DOCUMENT_ROOT'].'/templates/header.php'; */
?>
<!-- Форма для загрузки фото -->

<div>
    <h2>Загрузка файла</h2>
    <form action="fileAdd.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="filename" size="2*1020*1020">
        <input type="submit" name="upload" value="отправить">
        <br>
        <a href="/gallery/gallery.php">Вернутся в галерею</a>
    </form>
</div>

<?php

/* include $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'; */