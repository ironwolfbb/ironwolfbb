<?php

class ToyFactory
{

}

class Toy
{   public $vid;
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;

    }
    public function createToy($name)
    {
       echo $this->name = $name;
       echo "<br>";
       echo $this->price = rand(0 , 3000);
    }
}

$tank = new Toy('T-34', '1299 rub');

$toy = ['танк',  'машина',  'мотоцикл', 'самолёт', 'вертолёт'];

$toy = array_flip($toy);
echo '<pre>';
echo $to = array_rand($toy);
echo '</pre>';
echo "<br>";



/* echo '<pre>';
var_dump($toyss);
echo '</pre>'; */

/* echo $tank->name . ' - ' . $tank->price; */




?>