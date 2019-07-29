<?php

/**
 * 基础策略
 */
abstract class CashSuper
{
    /**
     * 计算折后价格
     *
     * @param double $money 原价
     *
     * @return double
     *
     */
    public abstract function acceptCash($money);
}