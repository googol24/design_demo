<?php

/**
 * 抽象产品：部门的接口申明
 *
 * @author zhangzhengkun
 */
interface IDepartment
{
    /**
     * 添加一个部门
     *
     * @param mixed $department
     *
     * @return mixed
     *
     */
    public function insert($department);

    /**
     * 根据部门编号获取一个部门信息
     *
     * @param int $id
     *
     * @return mixed
     *
     */
    public function get($id);
}