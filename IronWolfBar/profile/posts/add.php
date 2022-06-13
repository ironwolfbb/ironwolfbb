<?php
include $_SERVER['DOCUMENT_ROOT']. '/function/tree.php';
include $_SERVER['DOCUMENT_ROOT']. '/function/arraysort.php';
include $_SERVER['DOCUMENT_ROOT']. '/src/connect.php';

$qury = "SELECT `id`,`user` FROM `users`";
if(mysqli_connect_errno()){
    echo mysqli_connect_errno();
  }else{
    $result = mysqli_query(
      $connect,$qury);
    }
    while($row = mysqli_fetch_assoc($result)){  
    $user[] = $row;
  };
 $user = (arraySort($user,'id',SORT_ASC));

 $open_user = $_COOKIE['user_cookie'];


 $qury = "SELECT `id`,`user` FROM `users` WHERE `user` = '$open_user'";
 $result = mysqli_query(
  $connect,$qury);
 while($row = mysqli_fetch_assoc($result)){
  $open_user = $row['id'];
 }

var_dump($open_user);
 

 $qury = "SELECT * FROM `message_sections`";
 $result = mysqli_query(
  $connect,$qury);
  while($row = mysqli_fetch_assoc($result)){  
    $catalog[] = $row;
  };
  
 
  $catalog= CreateTree($catalog, 0);
  out_optgroup_options($catalog, $selected_id = 0, $level = 0);
 

?>
<div>
    
    <div class="messages_block">
        <form action="" method="post">
            <h1>Ваше письмо</h1>
            
             <p>Заголовок </p>
             <input class="bord_user" type="text" name="header" placeholder="Заголовок "/>

              <p>Текст сообщения </p> 
              <textarea class="bord_user" type="text" name="text" ></textarea>

              <p>Пользователь (кому отправить сообщение)</p>
              
              <p>
                <select name="user">
                  <?php foreach($user as $us){ ?>
                  <option  value="<?= $us['id'] ?>"><?= $us['user'] ?> </option>
                  <?php } ?>
                 </select>
              </p>
              
              <p>Раздел сообщения</p>

              <select name="category">
	            <option></option>
	            <?php echo out_optgroup_options($catalog, 0); ?>
              </select>            
               <br>
               <br>
             <button class="button_autor" type="submit" value="отправить" name="send_messag">Отправить письмо</button>
        </form>
        
    </div>
</div>   

<?php 

if(isset($_POST['header']) && isset($_POST['text']) && isset($_POST['send_messag'])){
  $header = $_POST['header'];
  $text = $_POST['text'];
  $user_recipient = $_POST['user'];
  $result = mysqli_query(
    $connect, "INSERT INTO `messages`(`text`, `header`, `datatime_creation`, `user_sender`, 
    `user_recipient`,`read_massage`)
    VALUES('$text', '$header', NOW(), '$open_user', '$user_recipient', NULL)");
}else{
/* echo 'error'; */
};


 
/*   $result = mysqli_query(
  $connect, "INSERT INTO `messages`(`text`, `header`, `datatime_creation`, `user_sender`, 
  `user_recipient`,`read_massage`)
  VALUES('$text', '$header', NOW(), '$open_user', '$user_recipient', NULL)"); */

/* echo '<pre>';
print_r($user_recipient);
echo '</pre>';
print_r($header); */
?>