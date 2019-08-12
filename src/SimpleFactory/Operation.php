<?php

/**
 * 运算类
 *
 * @author zhangzhengkun
 */
class Operation
{
    /**
     * 第一个操作数
     *
     * @var int
     */
    private $numberA = 0;

    /**
     * 第二个操作数
     *
     * @var int
     */
    private $numberB = 0;

    /**
     *
     * 获取第一个操作数
     *
     * @return int
     *
     */
    public function getNumberA()
    {
        return $this->numberA;
    }

    /**
     * 获取第二个操作数
     *
     *
     * @return int
     *
     */
    public function getNumberB()
    {
        return $this->numberB;
    }

    /**
     * 设置第一个操作数
     *
     * @param float|int $a
     *
     */
    public function setNumberA($a)
    {
        $this->numberA = $a;
    }

    /**
     * 设置第二个操作数
     *
     * @param int|float $b
     *
     */
    public function setNumberB($b)
    {
        $this->numberB = $b;
    }

    /**
     * 获取计算结果
     *
     * @return int
     *
     */
    public function getResult()
    {
        return 0;
    }
//
//    /**
//     * 获取计算结果（旧的处理方式）
//     *
//     * @param float $numberA
//     * @param float $numberB
//     * @param string $operate
//     *
//     * @return float|int
//     *
//     */
//    public static function getResult($numberA, $numberB, $operate)
//    {
//        $result = 0;
//
//        switch ($operate) {
//            case '+':
//                $result = $numberA + $numberB;
//                break;
//            case '-':
//                $result = $numberA - $numberB;
//                break;
//            case '*':
//                $result = $numberA * $numberB;
//                break;
//            case '/':
//                if ($numberB == 0) {
//                    throw new LogicException('除数不能为0！');
//                }
//                $result = $numberA / $numberB;
//                break;
//            default:
//                throw new LogicException('运算符出错！');
//        }
//
//        return $result;
//    }
}