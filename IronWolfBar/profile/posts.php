<?php
include $_SERVER['DOCUMENT_ROOT']. '/src/connect.php';
?>

<h1>Вы сможете отправлять сообщения после прохождения модерации</h1>
<div>
  <form action="" method="post">
      <button type="submit" value="отправить" name="moder">Отправить запрос</button>
  </form>
</div>

<?php

/* var_dump($_POST); */
$user = ($_COOKIE['user_cookie']);


$qury = "SELECT `users`.`id` as `ид`, `users`.`groups_id` as `номер группы`,
`groups_users`.`id` as `id`, `messages`.`user_recipient` as `получатель`, 
`messages`.`read_massage` as `получено`, `messages`.`header` as `заголовок`,
`messages`.`text` as `текст`, `messages`.`id` as `ид_сообшений` FROM `users`
LEFT JOIN `groups_users` ON `groups_id` = `groups_users`.`id` 
LEFT JOIN `messages` ON `user_recipient` = `users`.`id` WHERE `user` = '$user' ";


if(mysqli_connect_errno()){
  echo mysqli_connect_errno();
}else{
  $result = mysqli_query(
    $connect,$qury);

while($row = mysqli_fetch_assoc($result)){
  $groups_id = $row['номер группы'];
  $groups_users = $row['id'];
  $user_id = $row['ид'];
  $user_recipient = $row['получатель'];
  $read_massage = $row['получено'];
  }



/// проверка на запрос модерации
if(!empty($_POST) & isset($_POST['moder'])){
  echo "<br>";
  echo 'Запрос отпрален';
  echo "<br>";

/// проверка может ли писать сообшения
  if($groups_id == 3){
  echo "<br>";
  echo 'Вы можете писать сообшения';
  echo "<br>";
 
  ?>
   <h3>непрочитаные сообшения</h3>
   <?php
    
    $result = mysqli_query(
      $connect,$qury);
    while($row = mysqli_fetch_assoc($result)){
      $read_massage = $row['получено'];
      $head = $row['заголовок'];
      $id = $row['ид_сообшений'];
      if($read_massage === NULL){
       
    ?>
    <div>
    <a href="/profile/posts/detail.php?id={<?= $id ?>}"><?php echo $head?></a>
    </div>
    <?php /* var_export($row); */
  }
 
}
  echo "<br>";
  ?>
   <h3>прочитаные сообшения</h3>
   <?php

$result = mysqli_query(
  $connect,$qury);
while($row = mysqli_fetch_assoc($result)){
  $read_massage = $row['получено'];
  $head = $row['заголовок'];
  $id = $row['ид_сообшений'];
   if($read_massage == 1){
    ?>
    <div>
    <a href="/profile/posts/detail.php?id={<?= $id ?>}"><?php echo $head?></a>
    </div>
    <?php /* var_export($row); */  
   }}?>

   <br>
    <a href="/profile/posts/add.php">Написать сообщение</a>
    <br>
    <?php
  }else{
    echo "<br>";
    echo 'У вас нет доступа к сообшениям';
  } }
}; 
  
 


  
