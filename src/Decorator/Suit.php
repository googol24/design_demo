<?php

class Suit extends Clothes
{
    public function show()
    {
        echo '穿西装' . PHP_EOL;
        parent::show();
    }

}