<?php

abstract class Leifeng
{
    protected $type;

    public function sweep()
    {
        echo $this->type . '扫地' . PHP_EOL;
    }

    public function wash()
    {
        echo $this->type . '洗衣' . PHP_EOL;
    }

    public function buyRice()
    {
        echo $this->type . '买米' . PHP_EOL;
    }
}