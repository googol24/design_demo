<?php

// 自动加载
spl_autoload_register(function ($class) {
    require_once __DIR__ . '/' . "$class.php";
});

$xc = new Person('小菜');

echo '第一种装扮：' . PHP_EOL;
$wearTs = new TShirts();
$wearTs->show();
$wearBt = new BigTrouser();
$wearBt->show();
$wearSk = new Sneakers();
$wearSk->show();

$xc->show();

// ---------------

echo PHP_EOL . '第二种装扮：' . PHP_EOL;
$wearSt = new Suit();
$wearSk->show();
$wearTe = new Tie();
$wearTe->show();
$wearLs = new LeatherShoes();
$wearLs->show();

$xc->show();
