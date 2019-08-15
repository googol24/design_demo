<?php

/**
 * 具体的观察者类
 *
 * @author zhangzhengkun
 */
class ConcreteObserver extends Observer
{
    /**
     * 观察者名称
     *
     * @var string
     */
    private $name;

    /**
     * 观察者状态（需要与主题的状态相协调）
     *
     * @var string
     */
    private $observerStatus;

    /**
     * 观察的主题
     *
     * @var Subject
     */
    private $subject;

    /**
     * ConcreteObserver constructor.
     *
     * @param Subject $subject
     * @param string $name
     */
    public function __construct($subject, $name)
    {
        $this->subject = $subject;
        $this->name = $name;
    }

    /**
     * 更新
     *
     * @return mixed
     */
    public function update()
    {
        $this->observerStatus = $this->subject->getSubjectStatus();
        echo '观察者' . $this->name . '的新状态是' . $this->observerStatus . PHP_EOL;
    }

}