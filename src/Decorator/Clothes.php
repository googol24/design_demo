<?php

/**
 * 服饰类（Decorator）
 *
 * @author zhangzhengkun
 */
class Clothes extends Person
{
    /**
     * 装饰对象
     *
     * @var Person
     */
    protected $person;

    /**
     * 打扮（装饰）
     *
     * @param Person $p
     *
     */
    public function decorate($p)
    {
        $this->person = $p;
    }

    /**
     * 形象展示
     *
     * @return mixed
     */
    public function show()
    {
        if (!empty($this->person))
        {
            $this->person->show();
        }
    }
}