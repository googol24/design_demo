<?php

class Tie extends Clothes
{
    public function show()
    {
        echo '穿领带' . PHP_EOL;
        parent::show();
    }
}