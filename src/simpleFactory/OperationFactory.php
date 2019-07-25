<?php

/**
 * 简单工厂
 *
 * @author googol24
 */
class OperationFactory
{
    /**
     * 创建操作类对象
     *
     * @param string $operate
     *
     * @return OperationAdd|OperationDivide|OperationMultiply|OperationSub
     *
     */
    public static function make(string $operate)
    {
        switch ($operate) {
            case '+':
                $operation = new OperationAdd();
                break;
            case '-':
                $operation = new OperationSub();
                break;
            case '*':
                $operation = new OperationMultiply();
                break;
            case '/':
                $operation = new OperationDivide();
                break;
            default:
                throw new LogicException('运算符出错！');
        }

        return $operation;
    }
}