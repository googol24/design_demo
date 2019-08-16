<?php

// 自动加载
spl_autoload_register(function ($class) {
    include "$class.php";
});

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
