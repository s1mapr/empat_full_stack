<?php

namespace app;

trait AnimalInfo
{
    public function info(){
        echo "This is {$this->type}, it has {$this->color} color, and its speed is {$this->speed} km/h <br>";
    }
}