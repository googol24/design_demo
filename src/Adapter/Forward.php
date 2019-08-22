<?php

/**
 * 前锋类
 *
 * @author zhangzhengkun
 */
class Forward extends Player
{
    /**
     * 进攻
     *
     * @return mixed
     *
     */
    public function attack()
    {
        echo '前锋 ' . $this->name . ' 进攻' . PHP_EOL;
    }

    /**
     * 防守
     *
     * @return mixed
     *
     */
    public function defense()
    {
        echo '前锋 ' . $this->name . ' 防守' . PHP_EOL;
    }

}