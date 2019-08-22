<?php

/**
 * 翻译者类
 * 作为适配器，用于适配ForeignCentreForward
 *
 * @author zhangzhengkun
 */
class Translator extends Player
{
    /**
     * 外籍中锋
     *
     * @var ForeignCentreForward
     */
    private $foreignCentreForward;

    /**
     * 设置外籍中锋
     *
     * @param ForeignCentreForward $foreignCentreForward
     *
     * @return mixed
     */
    public function setForeignCentreForward($foreignCentreForward)
    {
        $this->foreignCentreForward = $foreignCentreForward;
    }

    /**
     * 进攻
     *
     * @return mixed
     *
     */
    public function attack()
    {
        $this->foreignCentreForward->进攻();
    }

    /**
     * 防守
     *
     * @return mixed
     *
     */
    public function defense()
    {
        $this->foreignCentreForward->防守();
    }

}