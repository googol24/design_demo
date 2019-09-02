<?php

/**
 * 迭代抽象类。用于定义得到开始对象、得到下一个对象、判断是否到结尾、当前对象等抽象方法，统一接口
 *
 * @author zhangzhengkun
 */
abstract class ItemIterator
{
    /**
     * 获取开始对象
     *
     * @return mixed
     *
     */
    public abstract function first();

    /**
     * 获取下一个对象
     *
     * @return mixed
     *
     */
    public abstract function next();

    /**
     * 获取当前对象
     *
     * @return mixed
     *
     */
    public abstract function current();

    /**
     * 判断是否到结尾
     *
     * @return bool
     *
     */
    public abstract function isDone();
}