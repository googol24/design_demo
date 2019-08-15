<?php

/**
 * 创建小人的具体建造者
 *
 * @author zhangzhengkun
 */
class ThinPersonBuilder extends PersonBuilder
{
    /**
     * 建造的对象
     *
     * @var PersonObject
     */
    private $thinPersonObject;

    /**
     * 构造器：实例化建造对象
     */
    public function __construct()
    {
        $this->thinPersonObject = new PersonObject();
    }

    /**
     * 构建头部
     *
     * @return mixed
     *
     */
    public function buildHead()
    {
        $this->thinPersonObject->add('小人的头');
    }

    /**
     * 构建躯体
     *
     * @return mixed
     *
     */
    public function buildBody()
    {
        $this->thinPersonObject->add('小人的躯体');
    }

    /**
     * 构建左臂
     *
     * @return mixed
     *
     */
    public function buildLeftArm()
    {
        $this->thinPersonObject->add('小人的左臂');
    }

    /**
     * 构建右臂
     *
     * @return mixed
     *
     */
    public function buildRightArm()
    {
        $this->thinPersonObject->add('小人的右臂');
    }

    /**
     * 构建左脚
     *
     * @return mixed
     *
     */
    public function buildLeftLeg()
    {
        $this->thinPersonObject->add('小人的左脚');
    }

    /**
     * 构建右脚
     *
     * @return mixed
     *
     */
    public function buildRightLeg()
    {
        $this->thinPersonObject->add('小人的右脚');
    }

    /**
     * 返回被创建的人对象
     *
     * @return PersonObject
     *
     */
    public function getPerson()
    {
        return $this->thinPersonObject;
    }


}