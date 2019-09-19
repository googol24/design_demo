<?php

/**
 * 单例类
 *
 * @author zhangzhengkun
 */
class Singleton
{
    /**
     * 单例实例
     *
     * @var Singleton
     */
    private static $instance;

    /**
     * 私有化构造方法，避免其他类使用去创建本类的实例
     */
    private function __construct()
    {

    }

    /**
     * 供外部使用的访问实例的方法（全局访问点）
     *
     * @return Singleton
     *
     */
    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }
}