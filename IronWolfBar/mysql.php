<?php
/* $host = '127.0.0.1:3306';
$name = 'root';
$password = '';
$dbname = 'ironwolf';

$connect = mysqli_connect($host, $name, $password, $dbname); */

include $_SERVER['DOCUMENT_ROOT'].'/src/connect.php';



if(mysqli_connect_errno()){
    echo mysqli_connect_errno();
}else{
    /// в БД добавили в таблицу данные 
 /*   $result = mysqli_query(
       $connect , "insert into countries(name, code) 
       values('RU', '003')"
   ); */
   
   echo 'hfhf';

   /// создали таблицу Пользователей
   /* $sq = "CREATE TABLE user (id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL , name VARCHAR(50) NOT NULL );";
   $result = mysqli_query($connect , $sq); */


   ///добавили в таблицу user данные
 /*   $result = mysqli_query(
       $connect, "insert into user(name)
       values('frank')"
   );  */
   
   /// вывели содержимое таблицы countries
  /*  $result = mysqli_query(
       $connect, "select * from countries"
   ); */

   
   /// вывели содержимое countries на экран 
/*    while($row = mysqli_fetch_assoc($result)){
       echo "<p>";
       var_export($row);
       echo "</p>";
   } */

   /// Удалили строчку из таблицы
 /*   $result = mysqli_query(
       $connect, "delete from animal_classes"
   ); */

  /*    $result = mysqli_query(
       $connect, "insert into cities(name, country_id)
       values('Сидней', '9'),('Варшава',  '10'),('Вашингтон', '11')");  */
   
   /// вывели значение name из таблицы countries    
    /*  $result = mysqli_query(
         $connect, "select name from countries"
     ); */

     /* $result = mysqli_query(
         $connect, "select * from animals"
     ); */

   /// Вывели из таблицы значение name и заменили в выводе на 'Название' , а значение can_flying на 'умеет ли летать' и тоже вывели
     /* $result = mysqli_query(
         $connect, "select name as 'Название', can_flying as 'умеет ли летать?' from animal_classes"
     ); */

    /*  $result = mysqli_query(
         $connect, "insert into animals(name, can_flying, legs_count, class_id)
         values('panther', 'No', '4', '8'),
         ('piranha', 'No', '0', '6'),
         ('shark', 'No', '0', '6') "
     ); */

   /// Изменили в таблице animal_classes страку  can_flying = 'no' на can_flying = 'yes', для ид 9
   /*   $result = mysqli_query(
       $connect,  "update animal_classes set can_flying = 'Yes' where id = '9' "
     ); */
       
    /*  $result = mysqli_query(
         $connect, "UPDATE animals SET can_flying = 'No' WHERE id = '4'"
     ); */

   /// Удаляем дракона утконоса из таблицы animals 
  /*    $result = mysqli_query(
         $connect, "DELETE FROM animals WHERE id ='4'"
     ); */

   /// Удалили все строка из таблицы cities  
    /*  $result = mysqli_query(
         $connect, "DELETE FROM cities"
     ); */

   /// Запрос на удаление страны с кодом страны URY
 /*   $result = mysqli_query(
       $connect, "DELETE FROM countries WHERE code = 'URY'"
   ); */

   ///Выбрать только те классы животных, у которых не бывает летающих видов
   /* $result = mysqli_query(
     $connect,
    "SELECT `animals`.`name` as 'Животное', `animals`.`can_flying` as 'Летаюший?',
     `animals`.`class_id`,  `animal_classes`.`name` as 'Вид' FROM `animals`
      LEFT JOIN `animal_classes` ON `class_id` = `animal_classes`.`id` HAVING `can_flying` = 'yes'"
   ); */

  /*  $result = mysqli_query(
     $connect, "SELECT * FROM animals"
   ); */
   
 /*   $result = mysqli_query(
     $connect, "INSERT INTO `cities`(name, country_id)
     VALUES('Сидней', '9')"
   ); */

 /*    $result = mysqli_query(
     $connect,"SELECT `cities`.`name` AS 'Город', `Countries`.`name` AS 'Страна' FROM `cities`
      LEFT JOIN  `countries` ON  `cities`.`country_id` = `countries`.`id` "
   );  */

  /*  $result = mysqli_query(
     $connect, "SELECT `name` FROM `animal_classes` ORDER BY `name` desc"
   ); */


   ///Выбрать все страны, код которых начинается с символа A
  /*  $result = mysqli_query(
     $connect, "SELECT  `name` as 'город', `code` as 'код города' FROM `countries` WHERE `code` LIKE 'A%'"
   );
  */

  ///Выбрать летающих животных, принадлежащих классу птицы (по ID класса животных), у которых в названии есть буква а
  /* $result = mysqli_query(
    $connect, "SELECT `name` as 'Названия животного', class_id  FROM `animals`  WHERE `name` LIKE 'p%' HAVING `class_id` = 7"
  ); */

  ///Выбрать всех животных по алфавит
  /* $result = mysqli_query(
  $connect,"SELECT `name` as 'Название животного', `can_flying` as 'Летающий' FROM `animals` ORDER BY `name` asc "
  ); */

  ///Выбрать только последний город по алфавиту
/* $result = mysqli_query(
$connect,"SELECT max(`name`) as 'Название города' FROM `cities` ORDER BY `name` asc"
); */

  ///Выбрать последний добавленный класс животного (с наибольшим ID)
/* $result = mysqli_query(
$connect,"SELECT max(`id`), max(`name`) as 'класс животного' FROM `animal_classes`" 
); */

 ///Выбрать первую пару (первое и второе животное) летающих животных, отсортированных по возрастанию ID.
/*  $result = mysqli_query(
 $connect, "SELECT `id`, `name`,`can_flying` FROM `animals` WHERE `can_flying` = 'yes' LIMIT 2 "
 ); */

 ///Выбрать вторую пару (третье и четвёртое животное) летающих животных, отсортированных по возрастанию ID.
 /* $result = mysqli_query(
 $connect, "SELECT `id`, `name`,`can_flying` FROM `animals` WHERE `can_flying` = 'yes' LIMIT 2, 2 "
 );  */


 ///Запрос, который выберет названия всех животных и названия их классов
 /* $result = mysqli_query(
 $connect, "SELECT `animals`.`name` as 'Животное',`animals`.`class_id`, `animal_classes`.`name` as 'Класс', `animal_classes`.`id` FROM `animals` LEFT JOIN `animal_classes` ON `animals`.`class_id` = `animal_classes`.`id`" 
 ); */

 ///Запрос, который выберет названия всех городов, а также названия и коды их стран.
 /* $result = mysqli_query(
$connect, "SELECT `cities`.`name` as 'Город',  `countries`.`code` as 'Код страны' FROM `cities` LEFT JOIN `countries`ON `cities`.`country_id` = `countries`.`id` "
 ); */

 /* $result = mysqli_query(
$connect, "SELECT `animal_classes`.`name` as 'Класс', `animal_classes`.`id` ,
 `animals`.`name` as 'Животное', `animals`.`class_id` FROM `animal_classes`
  LEFT JOIN `animals` ON `animals`.`class_id` =`animal_classes`.`id`"
 ); */


  /* $result = mysqli_query(
  $connect,"INSERT INTO `cities`(name, country_id)
  VALUES('Вашингтон', '11'),('Лос Анджелес', '11'),
  ('Гданьск', '10'),('Краков', '10'),('Мельбурн', '9'),
  ('Канберра', '9') "
  ); */

/*   $result = mysqli_query(
  $connect, "CREATE TABLE `users`(id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL, activity BOOLEAN NULL,
   FIO VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone INT(11), pass VARCHAR(255) NOT NULL,
   consent_to_mailing BOOLEAN NULL)"
  ); */

 /*  $result = mysqli_query(
  $connect,"CREATE TABLE ``(`id` INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL, 
  `name` VARCHAR(255) NOT NULL,`description` TEXT , `registered` BOOLEAN, `rights_write` BOOLEAN )"
  ); */
// ++++
/*   $result = mysqli_query(
  $connect,"CREATE TABLE `messages`(`id` INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL, 
    `text` TEXT, `header` VARCHAR(255), `datatime_creation` DATETIME NOT NULL, 
    `user_sender` VARCHAR(255) NOT NULL, `user_recipient` VARCHAR(255) NOT NULL, `read_massage` TINYINT)"); */

 /*     $result = mysqli_query(
$connect, "INSERT INTO `messages` (`text`, `header`, `datatime_creation`, `user_sender`, `user_recipient`)
VALUES ('Сегодня до 21 00 ', 'Привет', NOW(), '2', '3')",
      
    ); */
   
  /* $result = mysqli_query(
  $connect,"SELECT * FROM message_sections"
  ); */

  /* $result = mysqli_query(
    $connect,"ALTER TABLE `messages` ADD (FOREIGN KEY (`user_sender`) REFERENCES `users`(`id`))"
    ); */

    /* $result = mysqli_query(
      $connect,"UPDATE `users` SET `FIO` = 'Rocks', `phone` = '+7996006111', `email` = 'rokshard@gmail.com' WHERE `users`.`id` = 6"
    );
     */

   /*   $result = mysqli_query(
     $connect,"INSERT INTO `groups_users` (`name`)
     VALUES('rights_write'),('registered')"
     ); */

   /*   $result = mysqli_query(
     $connect,"INSERT INTO `messages`(`text`, `header`, `datatime_creation`, `user_sender`,
      `user_recipient`)
      VALUES ('Рок группа ария приезжает 29 мая', 'Концерт', NOW(), '4', '1')"
     ); */
    
   while($row = mysqli_fetch_assoc($result)){
    echo "<p>";
    var_export($row);
    echo "</p>";
   };  
   
  
}





mysqli_close($connect);