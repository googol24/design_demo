<?php

/**
 * 原型接口
 */
interface IPrototype
{
    /**
     * 浅拷贝
     *
     * @return mixed
     *
     */
    public function shallowCopy();

    /**
     * 深拷贝
     *
     * @return mixed
     *
     */
    public function deepCopy();
}