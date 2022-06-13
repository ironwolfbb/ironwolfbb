<?php
// Расстояние между двумя точками
class Point
{
    public $x;
    public $y;
}

$p1 = new Point;
$p1->x=10;
$p1->y=34;

$p2 = new Point;
$p2->x=3;
$p2->y=10;


$distance = sqrt((pow(($p2->x-$p1->x),2)+pow(($p2->y-$p1->y),2)));

