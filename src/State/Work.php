<?php

/**
 * 工作类
 *
 * @author googol24
 */
class Work
{
    /**
     * 当前状态
     *
     * @var State
     */
    private $currentState;

    /**
     * "钟点"属性，状态转换的依据
     *
     * @var int
     */
    private $hour;

    /**
     * 是否完成工作
     *
     * @var bool
     */
    private $isFinished;

    public function __construct()
    {
        // 工作状态初始化为上午工作状态
        $this->setCurrentStatus(new ForenoonState());
    }

    /**
     * 获取工作的钟点
     *
     * @return int
     *
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * 设置工作的钟点
     *
     * @param $hour
     *
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
    }

    /**
     * 判断工作有没有完成
     *
     * @return bool
     *
     */
    public function taskFinished()
    {
        return $this->isFinished;
    }

    /**
     * 完成工作
     */
    public function finishTask()
    {
        $this->isFinished = true;
    }

    /**
     * 设置当前状态
     *
     * @param State $state
     *
     */
    public function setCurrentStatus($state)
    {
        $this->currentState = $state;
    }

    /**
     * 写程序方法
     */
    public function writeProgram()
    {
        $this->currentState->handle($this);
    }
}