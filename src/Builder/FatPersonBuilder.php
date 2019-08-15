<?php

/**
 * 创建胖子的具体建造者
 *
 * @author zhangzhengkun
 */
class FatPersonBuilder extends PersonBuilder
{
    /**
     * 建造的对象
     *
     * @var PersonObject
     */
    private $fatPersonObject;

    /**
     * 构造器：实例化建造对象
     */
    public function __construct()
    {
        $this->fatPersonObject = new PersonObject();
    }

    /**
     * 构建头部
     *
     * @return mixed
     *
     */
    public function buildHead()
    {
        $this->fatPersonObject->add('胖子的头');
    }

    /**
     * 构建躯体
     *
     * @return mixed
     *
     */
    public function buildBody()
    {
        $this->fatPersonObject->add('胖子的躯干');
    }

    /**
     * 构建左臂
     *
     * @return mixed
     *
     */
    public function buildLeftArm()
    {
        $this->fatPersonObject->add('胖子的左臂');
    }

    /**
     * 构建右臂
     *
     * @return mixed
     *
     */
    public function buildRightArm()
    {
        $this->fatPersonObject->add('胖子的右臂');
    }

    /**
     * 构建左脚
     *
     * @return mixed
     *
     */
    public function buildLeftLeg()
    {
        $this->fatPersonObject->add('胖子的左脚');
    }

    /**
     * 构建右脚
     *
     * @return mixed
     *
     */
    public function buildRightLeg()
    {
        $this->fatPersonObject->add('胖子的右脚');
    }

    /**
     * 返回被创建的人对象
     *
     * @return PersonObject
     *
     */
    public function getPerson()
    {
        return $this->fatPersonObject;
    }


}