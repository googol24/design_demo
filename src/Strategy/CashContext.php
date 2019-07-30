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
                echo '请输入门槛金额：';
                $limitMoney = trim(fgets(STDIN));
                echo '请输入优惠金额：';
                $returnMoney = trim(fgets(STDIN));
                $this->cash = new CashReturn($limitMoney, $returnMoney);
                break;
            case 'rebate':
                echo '请输入折扣：';
                $rebate = trim(fgets(STDIN));
                $this->cash = new CashRebate($rebate);
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