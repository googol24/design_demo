<?php

include 'Operation.php';
include 'OperationFactory.php';
include 'OperationAdd.php';
include "OperationSub.php";
include "OperationMultiply.php";
include "OperationDivide.php";

try {
    echo '请输入第一个操作数：';
    $numberA = fgets(STDIN);
    $numberA = trim($numberA);

    echo '请输入第二个操作数：';
    $numberB = fgets(STDIN);
    $numberB = trim($numberB);

    echo '请输入操作符（+，-，*，/）：';
    $operate = fgets(STDIN);
    $operate = trim($operate);

    $expression = ($numberA . ' ' . $operate . ' ' . $numberB);

    // $result = Operation::getResult($numberA, $numberB, $operate);
    $operationObj = OperationFactory::make($operate);
    $operationObj->setNumberA($numberA);
    $operationObj->setNumberB($numberB);

    $result = $operationObj->getResult();

    echo '计算结果：' . $expression . ' = ' . $result;

} catch (Throwable $e) {
    echo('出现异常：' . $e->getMessage());
}