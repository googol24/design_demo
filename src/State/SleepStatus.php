<?php

/**
 * 睡眠工作状态类
 *
 * @author googol24
 */
class SleepStatus extends State
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
        echo '当前时间：' . $work->getHour() . '点，不行了，睡觉了' . PHP_EOL;
    }

}