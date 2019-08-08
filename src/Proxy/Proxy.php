<?php

/**
 * 代理类
 *
 * @author googol24
 */
class Proxy implements GiveGift
{
    /**
     * 追求者
     *
     * @var Pursuit
     */
    private $pursuit;

    public function __construct($gg)
    {
        $this->pursuit = $gg;
    }

    /**
     * 送布偶
     *
     * @return mixed
     *
     */
    public function giveDolls()
    {
        return $this->pursuit->giveDolls();
    }

    /**
     * 送花
     *
     * @return mixed
     *
     */
    public function giveFlowers()
    {
        return $this->pursuit->giveFlowers();
    }

    /**
     * 送巧克力
     *
     * @return mixed
     *
     */
    public function giveChocolates()
    {
        return $this->pursuit->giveChocolates();
    }

}