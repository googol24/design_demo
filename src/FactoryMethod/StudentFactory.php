<?php

class StudentFactory implements Factory
{
    public function createLeifeng()
    {
        return new Student();
    }
}