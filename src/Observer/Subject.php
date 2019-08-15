<?php

/**
 * 主题（抽象通知者）
 * 把所有对观察者对象的引用保存在一个集合里，每个主题都可以有任何数量的观察者
 *
 * @author zhangzhengkun
 */
abstract class Subject
{
    /**
     * 观察者对象集合
     *
     * @var array
     */
    private $observers = [];

    /**
     * 增加观察者
     *
     * @param mixed $observer
     *
     */
    public function attach($observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * 移除指定的观察者
     *
     * @param mixed $observer
     *
     */
    public function detach($observer)
    {
        if (!empty($this->observers)) {
            foreach ($this->observers as $key => $selfObserver) {
                if (serialize($selfObserver) === serialize($observer)) {
                    unset($this->observers[$key]);
                }
            }
        }
    }

    /**
     * 发出通知
     */
    public function notify()
    {
        if (!empty($this->observers)) {
            /** @var Observer $observer */
            foreach ($this->observers as $observer) {
                $observer->update();
            }
        }
    }

    /**
     * 获取通知者的状态
     *
     * @return mixed
     *
     */
    public abstract function getSubjectStatus();
}