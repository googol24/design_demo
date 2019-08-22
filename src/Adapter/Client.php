<?php

// 自动加载
spl_autoload_register(function ($class) {
    include "$class.php";
});

$b = new Forward('巴蒂尔');
$b->attack();

$m = new Guard('麦克格雷迪');
$m->defense();

//$ym = new CentreForward('姚明');
//$ym->attack();
//$ym->defense();

// 姚明是外籍中锋
$ym = new ForeignCentreForward('姚明');

$translator = new Translator('翻译者');
$translator->setForeignCentreForward($ym);
$translator->attack();
$translator->defense();