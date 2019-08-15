<?php

/**
 * 抽象观察者类，为所有的具体观察者定义一个接口：在得到主题通知的时候更新自己
 *
 * @author zhangzhengkun
 */
abstract class Observer
{
    /**
     * 更新
     *
     * @return mixed
     */
    public abstract function update();
}