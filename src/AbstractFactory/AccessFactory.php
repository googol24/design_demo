<?php

class AccessFactory implements IFactory
{
    /**
     * 创建一个用户
     *
     * @return mixed|AccessUser
     *
     */
    public function createUser()
    {
        return new AccessUser();
    }

    /**
     * 创建一个部门
     *
     * @return mixed|AccessDepartment
     *
     */
    public function createDepartment()
    {
        return new AccessDepartment();
    }


}