<?php

class TShirts extends Clothes
{
    public function show()
    {
        echo '穿T恤' . PHP_EOL;
        parent::show();
    }
}