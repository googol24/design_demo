<?php

// 自动加载
spl_autoload_register(function ($class) {
    if (is_file($class . '.php')) {
        require_once __DIR__ . '/' . "$class.php";
    }
});


$girl = new SchoolGirl('小红');
$boy = new Pursuit($girl);

$proxy = new Proxy($boy);

$proxy->giveDolls();
$proxy->giveChocolates();
$proxy->giveFlowers();