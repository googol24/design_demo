<?php

/**
 * 送礼物接口
 */
interface GiveGift
{
    /**
     * 送布偶
     *
     * @return mixed
     *
     */
    public function giveDolls();

    /**
     * 送花
     *
     * @return mixed
     *
     */
    public function giveFlowers();

    /**
     * 送巧克力
     *
     * @return mixed
     *
     */
    public function giveChocolates();
}