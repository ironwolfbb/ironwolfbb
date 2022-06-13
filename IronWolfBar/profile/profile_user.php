<?php
include $_SERVER['DOCUMENT_ROOT']. '/src/connect.php';


if(mysqli_connect_errno()){
    echo mysqli_connect_errno();
}else{
mysqli_query(
$connect,"SELECT `user` FROM `users`"
);
};


/// положили в переменную имя авторизированного пользователя
$user = ($_COOKIE['user_cookie']);

echo "HELLO". '  ' . /* $_COOKIE['user_cookie'] */ $user;

/// определение активности
/* if(!empty($_COOKIE['user_cookie'])){
    mysqli_query(
    $connect,"UPDATE `users`  SET `activity` = null WHERE `user` = '$user'"
);
}; */


if(!empty($_COOKIE['user_cookie'])){
$result = mysqli_query(
    $connect,"SELECT `FIO` AS `ФИО`, `email` AS `Электронная почта`, `phone` AS `телефон` 
     FROM `users` WHERE `user` = '$user'"
);  

/* var_dump($user); */
};
while($row = mysqli_fetch_assoc($result)){
    echo "<p>";
    echo $row['телефон']. ' '. $row['ФИО'];
    echo "</p>"; }

    /* if(!empty($_COOKIE['user_cookie'])){
            $result = mysqli_query(
            $connect,"SELECT `activity` as 'активность'  FROM `users` WHERE `user` = '$user'"
        );
    };
    while($row = mysqli_fetch_assoc($result)){
        echo "<p>";
        var_export($row);
        echo "</p>"; } */
?>
<div>
    <nav>
        <a href="posts.php">Окно сообшений</a>
    </nav>
</div>

<?php

    mysqli_close($connect);
    
?>
