<?php

/**
 * 球员抽象类
 * 封装了客户Client所期待的接口
 *
 * @author zhangzhengkun
 */
abstract class Player
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 进攻
     *
     * @return mixed
     *
     */
    public abstract function attack();

    /**
     * 防守
     *
     * @return mixed
     *
     */
    public abstract function defense();
}