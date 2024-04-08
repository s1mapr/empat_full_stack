<?php

use app\Singleton;

require_once '../app/Cat.php';
require_once '../app/Bird.php';
require_once '../app/MaineCoon.php';
require_once '../app/Singleton.php';

$name = "Maksym";
$age = 22;
$x = "10";
$y = 10;

echo '<h2>Базовий синтаксис PHP</h2>';

echo 'Конкатенація';
echo '<br>';
$greeting = "Hello, " . $name . "!";
echo $greeting;
echo '<br>';
echo '------------------------------------------------------------------------------------------------';
echo '<br>';

echo 'Звичайний масив';
echo '<br>';
$numbers = array(1, 2, 3, 4, 5);
echo $numbers[0];
echo '<pre/>';
var_dump($numbers);
echo '<br>';
echo '------------------------------------------------------------------------------------------------';
echo '<br>';

echo 'Іменований масив';
echo '<br>';
$person = array("name" => "Maksym", "age" => 22);
$person["hairColor"] = "black";
echo $person["name"];
echo '<br>';
var_dump($person);
echo '<br>';
echo '------------------------------------------------------------------------------------------------';
echo '<br>';

echo 'explode';
echo '<br>';
$string = "html,css,js";
$fruits = explode(",", $string);
var_dump($fruits);
echo '<br>';
echo '------------------------------------------------------------------------------------------------';
echo '<br>';

echo 'implode';
echo '<br>';
$fruitsString = implode(", ", $fruits);
echo $fruitsString;
echo '<br>';
echo '------------------------------------------------------------------------------------------------';
echo '<br>';

echo 'Розіменування змінних';
echo '<br>';
$varName = "age";
echo ${$varName};
echo '<br>';
echo '------------------------------------------------------------------------------------------------';
echo '<br>';


echo 'Порівняння змінних';
echo '<br>';
var_dump($x === $y);
echo '<br>';
var_dump($x == $y);
echo '<br>';
echo '------------------------------------------------------------------------------------------------';
echo '<br>';
$a = "10";
$b = 5;

echo 'Мануальне приведення типів';
echo '<br>';
$sum = (int)$a + $b;
echo $sum;
echo '<br>';
echo '------------------------------------------------------------------------------------------------';
echo '<br>';
echo 'Автмоатичне приведення типів';
echo '<br>';
$total = $a + $b;
echo $total;

echo '<h2>ООП</h2>';

$cat = new \app\Cat("black", 20, "none");
$bird = new \app\Bird("yellow", 30);
$maineCoon = new \app\MaineCoon("orange", 35);

$cat->info();
$bird->info();
$bird->fly();
echo '<br>';
$cat->makeSound();
echo '<br>';
echo $maineCoon->breed;
echo '<br>';
$singletonObj1 = Singleton::getInstance();
$singletonObj2 = Singleton::getInstance();
var_dump($singletonObj1);
echo '<br>';
var_dump($singletonObj2);
echo '<br>';
var_dump($singletonObj1 === $singletonObj2);
