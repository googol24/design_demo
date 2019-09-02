<?php

// 自动加载
spl_autoload_register(function ($class) {
    include "$class.php";
});

// 创建总公司（根节点）
$rootCompany = new ConcreteCompany('北京总公司');

// 添加总公司的财务部和人力资源部
$rootCompany->add(new FinanceDepartment('北京总公司财务部'));
$rootCompany->add(new HRDepartment('北京总公司人力资源部'));

// 添加上海华东分公司
$shCompany = new ConcreteCompany('上海华东分公司');
$shCompany->add(new FinanceDepartment('上海华东分公司财务部'));
$shCompany->add(new HRDepartment('上海华东分公司人力资源部'));

$rootCompany->add($shCompany);

// 分公司添加南京办事处
$njCompany = new ConcreteCompany('南京办事处');
$njCompany->add(new FinanceDepartment('南京办事处财务部'));
$njCompany->add(new HRDepartment('南京办事处人力资源部'));

$shCompany->add($njCompany);

// 分公司添加杭州办事处
$hzCompany = new ConcreteCompany('杭州办事处');
$hzCompany->add(new FinanceDepartment('杭州办事处财务部'));
$hzCompany->add(new HRDepartment('杭州办事处人力资源部'));

$shCompany->add($hzCompany);

// 杭州办事处添加余杭代理点

// 杭州办事处添加萧山代理点

// 杭州办事处添加富阳代理点

echo '公司结构图：' . PHP_EOL;
$rootCompany->show(1);

echo '公司职责：' . PHP_EOL;
$rootCompany->lineOfDuty();

// 删除杭州办事处
$shCompany->remove($hzCompany);

echo '公司结构图：' . PHP_EOL;
$rootCompany->show(1);

echo '公司职责：' . PHP_EOL;
$rootCompany->lineOfDuty();