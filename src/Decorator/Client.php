<?php

// 自动加载
spl_autoload_register(function ($class) {
    require_once __DIR__ . '/' . "$class.php";
});

$xc = new Person('小菜');

echo '第一种装扮：' . PHP_EOL;
$wearTs = new TShirts();
$wearTs->decorate($xc);

$wearBt = new BigTrouser();
$wearBt->decorate($wearTs);

$wearSk = new Sneakers();
$wearSk->decorate($wearBt);

$wearSk->show();

// ---------------

echo PHP_EOL . '第二种装扮：' . PHP_EOL;
$wearSt = new Suit();
$wearSt->decorate($xc);
$wearTe = new Tie();
$wearTe->decorate($wearSt);
$wearLs = new LeatherShoes();
$wearLs->decorate($wearTe);

$wearLs->show();
