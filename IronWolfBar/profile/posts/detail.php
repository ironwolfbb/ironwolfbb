<?php
/* include $_SERVER['DOCUMENT_ROOT']. '/src/core.php'; */
include $_SERVER['DOCUMENT_ROOT']. '/src/connect.php';

setcookie('read_messages', true, time()+60*60);

$user = ($_COOKIE['user_cookie']);
$get_id = $_GET['id'];



$get_id = trim($get_id, "{}");


$qury = "SELECT `users`.`id` as `ид`, `users`.`groups_id` as `номер группы`,
`groups_users`.`id` as `id`, `messages`.`user_recipient` as `получатель`, 
`messages`.`read_massage` as `получено`,`messages`.`datatime_creation` as `дата`,
 `messages`.`header` as `заголовок`,
`messages`.`text` as `текст`, `messages`.`id` as `ид_сообшений` FROM `users`
LEFT JOIN `groups_users` ON `groups_id` = `groups_users`.`id` 
LEFT JOIN `messages` ON `user_recipient` = `users`.`id` WHERE  `user` = '$user'";

$qurys = "SELECT  `messages`.`id` as `ид_сообшений`, `messages`.`user_recipient` as `получатель`, 
`messages`.`read_massage` as `получено`, `messages`.`datatime_creation` as `дата`,
`messages`.`header` as `заголовок`, `messages`.`text` as `текст` FROM `messages`
 WHERE `id` = '$get_id'";


$read_mess ="UPDATE `messages` SET `read_massage` = 1 WHERE `id` = '$get_id'";

if(mysqli_connect_errno()){
    echo mysqli_connect_errno();
  }else{
    $result = mysqli_query(
    $connect, $qurys);
    while($row = mysqli_fetch_assoc($result)){
     $datatime_creation = $row['дата'];
     $header = $row['заголовок'];
     $text = $row['текст'];
     $id = $row['ид_сообшений'];
     if($id == $get_id){
      mysqli_query(
        $connect, $read_mess);
  
    
?>

 <div>
    <h3>Добро пожаловать <?= $user?> </h3>
    
    <p>ваши сообшения</p>
    <div class="messages_form">
      <p class="header_messages">Тема сообшения
      <?= '<br>'. $header .'<br>'?>
      </p>
      <p class="text">Текст сообшения
        <?= '<br>'. $text .'<br>'?>
      </p>
      <p>Дата и время получения сообшения 
        <?='<br>'. $datatime_creation ?>
      </p>
    </div> 
    </div> 
  <?php } }}
 
  
 ?>  
 <a href="/profile/posts.php">Вернутся</a>

