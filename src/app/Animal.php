<?php

namespace app;

use Exception;

abstract class Animal
{
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

    abstract public function makeSound();
}