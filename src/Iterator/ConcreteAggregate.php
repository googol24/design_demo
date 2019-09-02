<?php

/**
 * 具体的聚集类
 *
 * @author zhangzhengkun
 */
class ConcreteAggregate extends Aggregate
{
    /**
     * 聚集对象集合
     *
     * @var array
     */
    private $items = [];

    /**
     * 创建迭代器
     *
     * @return ItemIterator
     *
     */
    public function createIterator()
    {
//        return new ConcreteIterator($this);
        return new ConcreteDescIterator($this);
    }

    /**
     * 返回聚集对象的个数
     *
     * @return int
     *
     */
    public function count()
    {
        return count($this->items);
    }

    /**
     * 获取具体的聚集对象
     *
     * @param int $index
     *
     * @return mixed|null
     *
     */
    public function getItem($index)
    {
        return isset($this->items[$index]) ? $this->items[$index] : null;
    }

    /**
     * 向聚集对象集合中添加一个对象
     *
     * @param mixed $item
     *
     */
    public function addItem($item)
    {
        $this->items[] = $item;
    }

}