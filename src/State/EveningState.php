<?php

/**
 * 晚间工作状态类
 *
 * @author googol24
 */
class EveningState extends State
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
        if ($work->taskFinished()) {
            // 如果任务完成，则转入下班状态
            $work->setCurrentStatus(new RestState());
            $work->writeProgram();
        } else {
            if ($work->getHour() < 21) {
                echo '当前时间：' . $work->getHour() . '点，加班哦，疲累至极' . PHP_EOL;
            } else {
                // 超过21点，则转入睡眠工作状态
                $work->setCurrentStatus(new SleepStatus());
                $work->writeProgram();
            }
        }
    }

}