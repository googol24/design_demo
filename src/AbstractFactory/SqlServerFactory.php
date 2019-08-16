<?php

class SqlServerFactory implements IFactory
{
    /**
     * 创建一个用户
     *
     * @return mixed|SqlServerUser
     *
     */
    public function createUser()
    {
        return new SqlServerUser();
    }

    /**
     * 创建一个部门
     *
     * @return mixed|SqlServerDepartment
     *
     */
    public function createDepartment()
    {
        return new SqlServerDepartment();
    }


}