<?php

// 自动加载
spl_autoload_register(function ($class) {
    include "$class.php";
});

// 初始化一个紧急项目工作
$emergencyWork = new Work();

// 设置不同的当前工作时间，分别执行其写程序的方法
$emergencyWork->setHour(9);
$emergencyWork->writeProgram();

$emergencyWork->setHour(10);
$emergencyWork->writeProgram();

$emergencyWork->setHour(12);
$emergencyWork->writeProgram();

$emergencyWork->setHour(13);
$emergencyWork->writeProgram();

$emergencyWork->setHour(14);
$emergencyWork->writeProgram();

$emergencyWork->setHour(17);
$emergencyWork->writeProgram();

// 是否完成工作
//$emergencyWork->finishTask();

$emergencyWork->setHour(19);
$emergencyWork->writeProgram();

$emergencyWork->setHour(22);
$emergencyWork->writeProgram();