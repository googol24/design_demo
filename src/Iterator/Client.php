<?php

// 自动加载
spl_autoload_register(function ($class) {
    require "$class.php";
});

// 初始化一个聚集对象
$aggregateObj = new ConcreteAggregate();

// 向聚集对象中添加聚集项
$aggregateObj->addItem('大鸟');
$aggregateObj->addItem('小菜');
$aggregateObj->addItem('大件行李');
$aggregateObj->addItem('老外');
$aggregateObj->addItem('公交内部员工');
$aggregateObj->addItem('小偷');

// 迭代器
$iterator = $aggregateObj->createIterator();

$firstItem = $iterator->first();
echo '第一个乘客：' . $firstItem . PHP_EOL;

while (!$iterator->isDone()) {
    echo '乘客 ' . $iterator->current() . ' 请买票！' . PHP_EOL;
    $iterator->next();
}

