<?php

/**
 * 抽象产品：用户的接口申明
 *
 * @author zhangzhengkun
 */
interface IUser
{
    /**
     * 添加一个用户
     *
     * @param User $user
     *
     * @return mixed
     *
     */
    public function insert($user);

    /**
     * 根据用户编号获取一个用户信息
     *
     * @param int $id
     *
     * @return User
     *
     */
    public function get($id);
}