<?php

/**
 * 打折
 *
 * @author googol24
 */
class CashRebate extends CashSuper
{
    /**
     * 折扣
     *
     * @var double
     */
    private $rebate;

    /**
     * 构造器
     *
     * @param double $rebate
     */
    public function __construct($rebate)
    {
        $this->rebate = $rebate;
    }

    /**
     * 计算折后价格
     *
     * @param double $money 原价
     *
     * @return double
     *
     */
    public function acceptCash($money)
    {
        return $this->rebate * $money;
    }

}