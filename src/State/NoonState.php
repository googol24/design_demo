<?php

/**
 * 中午工作状态类
 *
 * @author googol24
 */
class NoonState extends State
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
        if ($work->getHour() < 13) {
            echo '当前时间：' . $work->getHour() . '点，饿了，午饭；犯困，午休' . PHP_EOL;
        } else {
            // 超过13点，则转入下午工作状态
            $work->setCurrentStatus(new AfternoonState());
            $work->writeProgram();
        }
    }

}