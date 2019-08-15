<?php

/**
 * 具体主题类（被观察者或者通知者）
 *
 * @author zhangzhengkun
 */
class ConcreteSubject extends Subject
{
    /**
     * 具体被观察者的状态
     *
     * @var string
     */
    private $subjectStatus;

    /**
     * 设置被观察者的状态
     *
     * @param string $status
     *
     */
    public function setSubjectStatus($status)
    {
        $this->subjectStatus = $status;
    }

    /**
     * 获取被观察者的状态
     *
     * @return string
     *
     */
    public function getSubjectStatus()
    {
        return $this->subjectStatus;
    }
}