<?php

/**
 * 抽象工厂接口
 *
 * @author zhangzhengkun
 */
interface IFactory
{
    /**
     * 创建一个用户
     *
     * @return mixed
     *
     */
    public function createUser();

    /**
     * 创建一个部门
     *
     * @return mixed
     *
     */
    public function createDepartment();
}