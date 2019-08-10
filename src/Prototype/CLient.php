<?php

// 自动加载
spl_autoload_register(function ($class) {
    include "$class.php";
});

$a = new Resume('大鸟');
$a->setPersonalInfo('男', 29);
$a->setWorkExperience('2010-2012', '北京百度网讯科技有限公司');

$a->display();

// 不使用原型模式（重新实例化）
$b = new Resume('大鸟');
$b->setPersonalInfo('男', 29);
$b->setWorkExperience('2010-2012', '北京百度网讯科技有限公司');

$b->display();

// 使用浅拷贝
$c = $a->shallowCopy();
$c->display();
$c->setWorkExperience('2010-2012', '腾讯公司');
$c->display();
$a->display();

// 使用深拷贝
$d = $b->deepCopy();
$d->display();

$d->setWorkExperience('2010-2012', '网易集团');
$d->display();

$b->display();