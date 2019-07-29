<?php

/**
 * 返利
 *
 * @author googol24
 */
class CashReturn extends CashSuper
{
    /**
     * 门槛价格
     *
     * @var double
     */
    private $limitMoney;

    /**
     * 优惠价格
     *
     * @var double
     */
    private $returnMoney;

    /**
     * 构造器
     *
     * @param double $limitMoney
     * @param double $returnMoney
     */
    public function __construct($limitMoney, $returnMoney)
    {
        $this->limitMoney = $limitMoney;
        $this->returnMoney = $returnMoney;
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
        if ($money < $this->limitMoney) {
            return $money;
        } else {
            return $money - $this->returnMoney;
        }
    }

}