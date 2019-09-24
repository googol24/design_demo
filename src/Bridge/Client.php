<?php

// autoload
spl_autoload_register(function ($class) {
    require "$class.php";
});

$brandN = new HandsetBrandN();

$brandN->setSoft(new HandsetGame());
$brandN->run();

$brandN->setSoft(new HandsetAddressList());
$brandN->run();

$brandM = new HandsetBrandM();

$brandM->setSoft(new HandsetGame());
$brandM->run();

$brandM->setSoft(new HandsetAddressList());
$brandM->run();