<?php

/**
 * 抽象状态类，定义一个接口(handle)以封装与Work的特定状态相关的行为
 *
 * @author googol24
 */
abstract class State
{
    /**
     * 状态行为处理函数
     *
     * @param Work $work
     *
     * @return mixed
     *
     */
    public abstract function handle($work);
}