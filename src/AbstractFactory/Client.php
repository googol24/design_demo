<?php

// 自动加载
spl_autoload_register(function ($class) {
    include "$class.php";
});

echo '-----抽象工厂模式-----' . PHP_EOL;
$user = new User();
$user->setId(1);
$user->setName('Alice');


$factory = new AccessFactory();

$iUser = $factory->createUser();
$iUser->insert($user);
$iUser->get(1);

$department = new Department();
$iDepartment = $factory->createDepartment();
$iDepartment->insert($department);
$iDepartment->get(2);

echo PHP_EOL;

// 用简单工厂改造抽象工厂：用数据访问类DataAccess代替IFactory SqlServerFactory AccessFactory
// 把数据库类型放到配置里面去，避免了每次需要操作数据库的时候都要实例化具体的工厂
echo '-----用简单工厂改造抽象工厂-----' . PHP_EOL;
$user2 = new User();
$department2 = new Department();

$iUser2 = DataAccess::createUser();
$iUser2->insert($user2);
$iUser2->get(3);

$iDepartment2 = DataAccess::createDepartment();
$iDepartment2->insert($department2);
$iDepartment2->get(4);

echo PHP_EOL;
