<?php

class LeatherShoes extends Clothes
{
    public function show()
    {
        echo '穿皮鞋' . PHP_EOL;
        parent::show();
    }

}