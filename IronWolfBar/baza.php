<?php
$user = [];
$password =[];

if(isset($_POST['send'])){
    $user[] = $_POST['username'];
    $password[] = $_POST['password'];
}