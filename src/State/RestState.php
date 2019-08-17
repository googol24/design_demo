<?php

/**
 * 下班工作状态类
 *
 * @author googol24
 */
class RestState extends State
{
    /**
     * 状态行为处理函数
     *
     * @param Work $work
     *
     * @return mixed
     *
     */
    public function handle($work)
    {
        echo '当前时间：' . $work->getHour() . '点，下班回家了哦' . PHP_EOL;
    }

}