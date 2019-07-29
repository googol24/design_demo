<?php

/**
 * 促销上下文
 *
 * @author googol24
 */
class CashContext
{
    /**
     * 具体的促销策略
     *
     * @var CashSuper
     */
    private $cash;

    /**
     * 构造器注入策略依赖
     *
     * @param string $promotionType 促销类型
     */
    public function __construct(string $promotionType)
    {
        switch ($promotionType) {
            case 'normal':
                $this->cash = new CashNormal();
                break;
            case 'return':
                $this->cash = new CashReturn(300, 100);
                break;
            case 'rebate':
                $this->cash = new CashRebate(0.8);
                break;
            default:
                throw new LogicException('促销类型不合法！');
                break;
        }
    }

    /**
     * 计算促销后的价格
     *
     * @param double $money
     *
     * @return double
     *
     */
    public function getResult($money)
    {
        return $this->cash->acceptCash($money);
    }
}