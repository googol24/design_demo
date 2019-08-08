<?php

// 自动加载
spl_autoload_register(function ($class) {
    require_once "$class.php";
});

$sFactory = new StudentFactory();
$student = $sFactory->createLeifeng();

$student->sweep();
$student->wash();
$student->buyRice();


$vFactory = new VolunteerFactory();
$volunteer = $vFactory->createLeifeng();

$volunteer->sweep();
$volunteer->wash();
$volunteer->buyRice();

