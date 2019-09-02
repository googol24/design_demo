<?php

/**
 * 具体的迭代对象
 *
 * @author zhangzhengkun
 */
class ConcreteIterator extends ItemIterator
{
    /**
     * 聚集对象
     *
     * @var ConcreteAggregate
     */
    private $aggregate;

    /**
     * 当前指针
     *
     * @var int
     */
    private $currentIndex;

    public function __construct($aggregate)
    {
        $this->aggregate    = $aggregate;
        $this->currentIndex = 0;
    }

    /**
     * 获取开始对象
     *
     * @return mixed
     *
     */
    public function first()
    {
        return $this->aggregate->getItem(0);
    }

    /**
     * 获取下一个对象
     *
     * @return mixed
     *
     */
    public function next()
    {
        $this->currentIndex++;

        if ($this->currentIndex < $this->aggregate->count()) {

            return $this->aggregate->getItem($this->currentIndex);
        }

        return null;
    }

    /**
     * 获取当前对象
     *
     * @return mixed
     *
     */
    public function current()
    {
        return $this->aggregate->getItem($this->currentIndex);
    }

    /**
     * 判断是否到结尾
     *
     * @return bool
     *
     */
    public function isDone()
    {
        if ($this->currentIndex == $this->aggregate->count()) {
            return true;
        }

        return false;
    }

}