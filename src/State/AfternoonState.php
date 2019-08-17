<?php

/**
 * 下午工作状态类
 *
 * @author googol24
 */
class AfternoonState extends State
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
        if ($work->getHour() < 17) {
            echo '当前时间：' . $work->getHour() . '点，下午状态还不错，继续努力' . PHP_EOL;
        } else {
            // 超过17点，则转入晚上工作状态
            $work->setCurrentStatus(new EveningState());
            $work->writeProgram();
        }
    }

}