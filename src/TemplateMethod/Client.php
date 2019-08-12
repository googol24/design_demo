<?php

// 自动加载
spl_autoload_register(function ($file) {
    require_once "{$file}.php";
});

echo '------------学生A的答卷：------------------' . PHP_EOL;
$paperA = new TestPaperA();
$paperA->question1();
$paperA->question2();
$paperA->question3();

echo '------------学生B的答卷：------------------' . PHP_EOL;
$paperB = new TestPaperB();
$paperB->question1();
$paperB->question2();
$paperB->question3();