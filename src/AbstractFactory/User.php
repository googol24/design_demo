<?php

/**
 * 用户类
 *
 * @author zhangzhengkun
 */
class User
{
    /**
     * 用户唯一编号
     *
     * @var int
     */
    private $id;

    /**
     * 用户姓名
     *
     * @var string
     */
    private $name;

    /**
     * 获取用户的编号
     *
     * @return int
     *
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 设置用户的编号
     *
     * @param $userId
     *
     */
    public function setId($userId)
    {
        $this->id = $userId;
    }

    /**
     * 获取用户的姓名
     *
     * @return string
     *
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 设置用户的姓名
     *
     * @param $userName
     *
     */
    public function setName($userName)
    {
        $this->name = $userName;
    }

    /**
     * 显示用户信息
     */
    public function display()
    {
        echo '-------显示用户信息开始--------' . PHP_EOL;
        echo '用户编号：' . $this->id . PHP_EOL;
        echo '用户姓名：' . $this->name . PHP_EOL;
        echo '-------显示用户信息结束--------' . PHP_EOL;
    }
}