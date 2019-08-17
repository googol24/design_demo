<?php

// 错误处理器
set_error_handler(function ($errNo, $errMsg, $file, $line) {
    echo '程序产生了错误：' . PHP_EOL;
    echo "错误代码：[{$errNo}] {$errMsg}" . PHP_EOL;
    echo "错误行号：{$file}文件中的第{$line}行" . PHP_EOL;
    echo "PHP版本：" . PHP_VERSION . "(" . PHP_OS . ")" . PHP_EOL;
});

// 异常处理器
set_exception_handler(function ($exception) {
    /** @var Exception $exception*/
    echo '程序捕获到了异常：' . PHP_EOL;
    echo $exception->getMessage() . PHP_EOL;
    echo '程序已经终止';
});

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
// 痛点：加一种数据库类型是时候要改大量的switch case
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

// 使用反射 + 抽象工厂的数据库访问
// 摒弃了大量的switch case代码
echo '-----使用反射 + 抽象工厂进一步改造-----' . PHP_EOL;
$user3 = new User();
$department3 = new Department();

try {
    $iUser3 = DataAccess::createUserUsingReflect();
    $iUser3->insert($user3);
    $iUser3->get(6);

    $iDepartment3 = DataAccess::createDepartmentUsingReflect();
    $iDepartment3->insert($department2);
    $iDepartment3->get(7);
} catch (ReflectionException $e) {
    throw new LogicException('反射异常：' . $e->getMessage());
} catch (Throwable $e) {
    throw new LogicException('其他异常：' . $e->getMessage());
}