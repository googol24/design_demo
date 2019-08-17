<?php

/**
 * 上午工作状态类
 *
 * @author googol24
 */
class ForenoonState extends State
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
        if ($work->getHour() < 12) {
            echo '当前时间：' . $work->getHour() . '点，上午工作精神百倍' . PHP_EOL;
        } else {
            // 超过12点，则转入中午工作状态
            $work->setCurrentStatus(new NoonState());
            $work->writeProgram();
        }
    }

}