<?php

/**
 * 后卫类
 *
 * @author zhangzhengkun
 */
class Guard extends Player
{
    /**
     * 进攻
     *
     * @return mixed
     *
     */
    public function attack()
    {
        echo '后卫 ' . $this->name . ' 进攻' . PHP_EOL;
    }

    /**
     * 防守
     *
     * @return mixed
     *
     */
    public function defense()
    {
        echo '后卫 ' . $this->name . ' 防守' . PHP_EOL;
    }


}