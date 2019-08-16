<?php

class AccessUser implements IUser
{
    /**
     * 添加一个用户
     *
     * @param User $user
     *
     * @return mixed
     *
     */
    public function insert($user)
    {
        echo '在Access中给User表添加一条记录' . PHP_EOL;
    }

    /**
     * 根据用户编号获取一个用户信息
     *
     * @param int $id
     *
     * @return User
     *
     */
    public function get($id)
    {
        echo '在Access中根据id=' . $id . '得到User表的一条记录'. PHP_EOL;
        return null;
    }

}