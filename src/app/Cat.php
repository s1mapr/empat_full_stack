<?php

namespace app;
require_once 'Animal.php';
require_once 'AnimalInfo.php';

class Cat extends Animal
{
    use AnimalInfo;

    private $type;

    private $color;

    private $speed;

    private $breed;
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
            throw new Exception("Property '{$name}' does not exist");
        }
    }

    public function __construct($color, $speed, $breed)
    {
        $this->type = "Cat";
        $this->color = $color;
        $this->speed = $speed;
        $this->breed = $breed;
    }

    public function makeSound()
    {
        echo "meow";
    }
}