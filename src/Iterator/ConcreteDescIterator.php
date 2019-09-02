<?php

/**
 * 具体迭代类（反向迭代）
 *
 * @author zhangzhengkun
 */
class ConcreteDescIterator extends ItemIterator
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
        $this->currentIndex = $this->aggregate->count() - 1;
    }

    /**
     * 获取开始对象
     *
     * @return mixed
     *
     */
    public function first()
    {
        return $this->aggregate->getItem($this->aggregate->count() - 1);
    }

    /**
     * 获取下一个对象
     *
     * @return mixed
     *
     */
    public function next()
    {
        $this->currentIndex--;

        if ($this->currentIndex >= 0) {

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
        if ($this->currentIndex == -1) {
            return true;
        }

        return false;
    }

}