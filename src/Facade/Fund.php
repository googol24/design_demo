<?php

/**
 * 基金类（门面）
 *
 * @author googol24
 */
class Fund
{
    /**
     * 股票1
     *
     * @var Stock1
     */
    private $stock1;

    /**
     * 股票2
     *
     * @var Stock2
     */
    private $stock2;

    /**
     * 股票3
     *
     * @var Stock3
     */
    private $stock3;

    /**
     * 国债1
     *
     * @var NationalDebt1
     */
    private $nationalDebt1;

    /**
     * 房地产1
     *
     * @var Realty1
     */
    private $realty1;

    /**
     * 构造函数
     */
    public function __construct()
    {
        $this->stock1 = new Stock1();
        $this->stock2 = new Stock2();
        $this->stock3 = new Stock3();

        $this->nationalDebt1 = new NationalDebt1();

        $this->realty1 = new Realty1();
    }

    /**
     * 基金买入
     */
    public function buyFund()
    {
        // 基金类自己的操作逻辑
        $this->stock1->buy();
        $this->stock2->buy();
        $this->stock3->buy();
        $this->nationalDebt1->buy();
        $this->realty1->buy();
    }

    /**
     * 基金卖出
     */
    public function sellFund()
    {
        // 基金类自己的操作逻辑
        $this->stock1->sell();
        $this->stock2->sell();
        $this->stock3->sell();
        $this->nationalDebt1->sell();
        $this->realty1->sell();
    }
}