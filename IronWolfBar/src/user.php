<?php
include $_SERVER['DOCUMENT_ROOT'].'/src/connect.php';
/// зарегистрированый пользователь для проверки

/* $usr = ["666" => "kot", "rock", "box"];
$pass = ["kot" => 666, "234", "321"];
 */
/* $usr = mysqli_query(
$connect,"SELECT `id` FROM `users`"
); */


/* $usr = []; */
/// проверка на вход  пользователя
/* var_dump($usr); */
$asset = false;
$error = false;

if(mysqli_connect_errno()){
    echo mysqli_connect_errno();
}else{
if ($_POST && ($_POST['username']) && $_POST['password']){
    $username  = htmlspecialchars($_POST['username']);
    $pass = mysqli_query(
    $connect, " SELECT * FROM `users` WHERE `user` = '$username'"
   
);
 while($row = mysqli_fetch_assoc($pass)){
    
    if ($_POST && $_POST['username'] && $_POST['password']){    
        if($_POST['username'] === $row['user'] && $_POST['password'] === $row['password']){
        $asset = true;
        setcookie('user_cookie', $_POST['username'],time()+8600);   
        } else
        $error = true;
    };
    
}}}; 

mysqli_close($connect);


