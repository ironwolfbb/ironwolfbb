<?php
include $_SERVER['DOCUMENT_ROOT']. '/src/connect.php';
/// регистрация пользователя
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['send']) ){
    $username = $_POST['username'];
    $fio = $_POST['fio'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $password =$_POST['password'];
    /* "INSERT INTO `users` (`username`, `fio`, `email`, `phone`, `password`)
    VALUES('$username', '$fio', '$email', '$phone', '$password')"; */
    $qury = "INSERT INTO `users`(`user`, `fio`, `email`, `phone`, `password`)
    VALUES('$username', '$fio', '$email', '$phone', '$password')";
    $result = mysqli_query($connect,$qury);

    if($result){
        $ssmg = 'Успешно';
    }else{
        $fsmg = 'Ошибка';
    }

}
/* var_dump($username) */
?>

<div>
    <?php if(isset($_GET['registr']) && $_GET['registr'] == 'yes') : ?>
    <div class="registr_block">
        <form action="index.php?registr=yes" method="post">
            <h1>Регистрация</h1>
            <?php if(isset($ssmg)){?> <div role="alert"><?php echo $ssmg;?></div><?php } ?>
            <?php if(isset($fsmg)){?> <div role="alert"><?php echo $fsmg;?></div><?php } ?>
             <p>Логин</p>
             <input class="bord_user" type="text" name="username" placeholder="Ваш Логин"
                      value="<?= (isset($_POST['username'])) ? $_POST['username'] : '' ?>"  />
              <p>Фамилия Имя</p> 
              <input class="bord_user" type="text" name="fio" placeholder="ФИО"/> 
              <p>Электронная почта</p>
              <input class="bord_user" type="text" name="email" placeholder="email"/>
              <p>Номер телефона</p>
              <input class="bord_user" type="text" name="phone" placeholder="phone"/>
             <p>Пароль</p>
             <input class="bord_user" type="password" name="password" placeholder="Придумай пароль"
                      value="<?= (isset($_POST['password'])) ? $_POST['password'] : '' ?>"/> 
             <br>
             <button class="button_autor" type="submit" value="отправить" name="send">Зарегистрироваться</button>
        </form>
        
    </div>
    <?php endif ?>
</div>


