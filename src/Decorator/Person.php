<?php

class Person
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        echo '装扮的人：' . $this->name . PHP_EOL;
    }
}