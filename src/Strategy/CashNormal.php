<?php

/**
 * 正常收费（不打折）
 *
 * @author googol24
 */
class CashNormal extends CashSuper
{
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
        return $money;
    }

}