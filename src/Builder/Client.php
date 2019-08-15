<?php

// 自动加载
spl_autoload_register(function ($class) {
    include "$class.php";
});

// 指挥者
$director = new PersonDirector();

// 创建小人
echo '创建小人：' . PHP_EOL;
$thinPersonBuilder = new ThinPersonBuilder();
$director->createPerson($thinPersonBuilder);
$thinPerson = $thinPersonBuilder->getPerson();
$thinPerson->showCreateProcess();

// 创建胖次
echo '创建胖子：' . PHP_EOL;
$fatPersonBuilder = new FatPersonBuilder();
$director->createPerson($fatPersonBuilder);
$fatPerson = $fatPersonBuilder->getPerson();
$fatPerson->showCreateProcess();

