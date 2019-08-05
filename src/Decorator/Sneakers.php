<?php

class Sneakers extends Clothes
{
    public function show()
    {
        echo '穿破球鞋' . PHP_EOL;
        parent::show();
    }

}