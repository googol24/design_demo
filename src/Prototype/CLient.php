<?php

// 自动加载
spl_autoload_register(function ($class) {
    include "$class.php";
});

// 创建一个简历
echo '-------------创建一个简历-------------------' . PHP_EOL;
$a = new Resume('大鸟');
$a->setPersonalInfo('男', 29);
$a->setWorkExperience('2010-2012', '北京百度网讯科技有限公司');

$a->display();

// 不使用原型模式进行简历拷贝（重新实例化）
echo '-------------不使用原型模式进行简历拷贝-------------------' . PHP_EOL;
$b = new Resume('大鸟');
$b->setPersonalInfo('男', 29);
$b->setWorkExperience('2010-2012', '北京百度网讯科技有限公司');

$b->display();

// 使用浅拷贝
echo '-------------使用浅拷贝-------------------' . PHP_EOL;
$c = $a->shallowCopy();
$c->display();
$c->setPersonalInfo('男', 30);
$c->setWorkExperience('2010-2012', '腾讯公司');
$c->display();
$a->display();

// 使用深拷贝
echo '-------------使用深拷贝-------------------' . PHP_EOL;
$d = $b->deepCopy();
$d->display();

$d->setPersonalInfo('男', 31);
$d->setWorkExperience('2010-2012', '网易集团');
$d->display();

$b->display();