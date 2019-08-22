<?php

/**
 * 中锋类
 *
 * @author zhangzhengkun
 */
class CentreForward extends Player
{
    /**
     * 进攻
     *
     * @return mixed
     *
     */
    public function attack()
    {
        echo '中锋 ' . $this->name . ' 进攻' . PHP_EOL;
    }

    /**
     * 防守
     *
     * @return mixed
     *
     */
    public function defense()
    {
        echo '中锋 ' . $this->name . ' 防守' . PHP_EOL;
    }

}