<?php

/**
 * 创建小人的具体建造者
 *
 * @author zhangzhengkun
 */
class ThinPersonBuilder extends PersonBuilder
{
    /**
     * 构建头部
     *
     * @return mixed
     *
     */
    public function buildHead()
    {
        echo '画一个小人的头'  . PHP_EOL;
    }

    /**
     * 构建躯体
     *
     * @return mixed
     *
     */
    public function buildBody()
    {
        echo '画一个小人的躯体' . PHP_EOL;
    }

    /**
     * 构建左臂
     *
     * @return mixed
     *
     */
    public function buildLeftArm()
    {
        echo '画一个小人的左臂' . PHP_EOL;
    }

    /**
     * 构建右臂
     *
     * @return mixed
     *
     */
    public function buildRightArm()
    {
        echo '画一个小人的右臂' . PHP_EOL;
    }

    /**
     * 构建左脚
     *
     * @return mixed
     *
     */
    public function buildLeftLeg()
    {
        echo '画一个小人的左脚' . PHP_EOL;
    }

    /**
     * 构建右脚
     *
     * @return mixed
     *
     */
    public function buildRightLeg()
    {
        echo '画一个小人的右脚' . PHP_EOL;
    }

}