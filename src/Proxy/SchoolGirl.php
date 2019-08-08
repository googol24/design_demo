<?php

/**
 * 被追求者类
 *
 * @author googol24
 */
class SchoolGirl
{
    private $name;

    public function __construct($girlName)
    {
        $this->name = $girlName;
    }

    public function getName()
    {
        return $this->name;
    }
}