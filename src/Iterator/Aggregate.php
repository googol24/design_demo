<?php

/**
 * 聚集抽象类
 * 提供了创建迭代器的统一接口
 *
 * @author zhangzhengkun
 */
abstract class Aggregate
{
    /**
     * 创建迭代器
     *
     * @return mixed
     *
     */
    public abstract function createIterator();
}