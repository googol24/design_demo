<?php

// 自动加载
spl_autoload_register(function ($class) {
    include "$class.php";
});

// 创建小人
echo '创建小人：' . PHP_EOL;
$thinPersonBuilder = new ThinPersonBuilder();
$personDirector = new PersonDirector($thinPersonBuilder);
$personDirector->createPerson();

// 创建胖次
echo PHP_EOL . '创建胖子：' . PHP_EOL;
$fatPersonBuilder = new FatPersonBuilder();
$personDirector = new PersonDirector($fatPersonBuilder);
$personDirector->createPerson();

