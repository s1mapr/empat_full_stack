<?php

namespace app;
require_once 'Cat.php';

class MaineCoon extends Cat
{
    public function __construct($color, $speed)
    {
        parent::__construct($color, $speed, "Maine Coon");
    }
}