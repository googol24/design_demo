<?php

/**
 * 追求者类
 *
 * @author googol24
 */
class Pursuit implements GiveGift
{
    /**
     * 追求对象
     *
     * @var SchoolGirl
     */
    private $schoolGirl;

    public function __construct($mm)
    {
        $this->schoolGirl = $mm;
    }

    /**
     * 送布偶
     *
     * @return mixed
     *
     */
    public function giveDolls()
    {
        echo $this->schoolGirl->getName() . '，送你洋娃娃' . PHP_EOL;
    }

    /**
     * 送花
     *
     * @return mixed
     *
     */
    public function giveFlowers()
    {
        echo $this->schoolGirl->getName() . '，送你花' . PHP_EOL;
    }

    /**
     * 送巧克力
     *
     * @return mixed
     *
     */
    public function giveChocolates()
    {
        echo $this->schoolGirl->getName() . '，送你巧克力' . PHP_EOL;
    }


}