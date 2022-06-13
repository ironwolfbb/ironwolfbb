<?php


class Cat
{
public $name;

 public function __construct($name)
 {
    $this->name = $name; 
 }   



};

class Dog
{
public $vid;
public $name;
public $paw = 4;
public function __construct($name, $vid)
 {
    $this->name = $name;
    $this->vid = $vid;
 }
};

class Fish
{
public $name;
public function __construct($name)
 {
    $this->name = $name; 
 }
};

$animals[] = $cat = new Cat("Пушок");
$animals[] = $cat1 = new Cat("Демон");
$animals[] = $dog = new Dog("Дракула","Млекопитающий");
$animals[] = $dog1 = new Dog("Tor","");
$animals[] = $fish = new Fish('Floppy');


var_dump($cat);
var_dump($cat1);
var_dump($dog);
var_dump($dog1);
var_dump($fish);




echo '<pre>';
print_r($animals);
echo '</pre>';

?>