
<div>
    <?php if (isset($_GET['login']) && $_GET['login'] == 'yes'): ?>
    <div class="autorization_block">
    
       <form action="?login=yes" method="post">
            <p>Ваше Имя</p>
                <input class="bord_user" type="text" name="username" placeholder="Введите Имя"
                      value="<?= (isset($_POST['username'])) ? $_POST['username'] : ''?>"  />
                 <p>Пароль</p>
                 <input class="bord_user" type="password" name="password" placeholder="*********"
                      value="<?= (isset($_POST['password'])) ? $_POST['password'] : '' ?>"/> 
                 <br>
                  <button class="button_autor" type="submit" value="отправить" name="autor">Войти</button>
         </form>
         <?php
/* $asset = false;
$error = false; */

          if($asset){
            include 'asset.php';  
            /* sleep(5);  */ 
            header("Location: /profile/profile_user.php");
            
         } elseif($error)
             include 'error.php'
        ?>
         <br> 
          <a href="index.php?registr=yes">Регистрация</a>
        <?php endif ?>
    </div>
</div>

 
         
        