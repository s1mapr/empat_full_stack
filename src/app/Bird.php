<?php

namespace app;
require_once 'Animal.php';
require_once 'Flyable.php';
require_once 'AnimalInfo.php';

class Bird extends Animal implements Flyable
{
    use AnimalInfo;

    private $type;

    private $color;

    private $speed;
    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        } else {
            throw new Exception("Property '{$name}' does not exist");
        }
    }

    public function __set($name, $value) {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        } else {
            // Якщо приватна змінна не існує, генеруємо помилку
            throw new Exception("Property '{$name}' does not exist");
        }
    }
    public function __construct($color, $speed)
    {
        $this->type = "Bird";
        $this->color = $color;
        $this->speed = $speed;
    }
    public function makeSound()
    {
        echo "bird sound";
    }

    public function fly()
    {
        echo "bird fly";
    }
}