<?php

/**
 * 创建人的抽象类（稳定人内部的构建[约束]）
 *
 * @author zhangzhengkun
 */
abstract class PersonBuilder
{
    /**
     * 构建头部
     *
     * @return mixed
     *
     */
    public abstract function buildHead();

    /**
     * 构建躯体
     *
     * @return mixed
     *
     */
    public abstract function buildBody();

    /**
     * 构建左臂
     *
     * @return mixed
     *
     */
    public abstract function buildLeftArm();

    /**
     * 构建右臂
     *
     * @return mixed
     *
     */
    public abstract function buildRightArm();

    /**
     * 构建左脚
     *
     * @return mixed
     *
     */
    public abstract function buildLeftLeg();

    /**
     * 构建右脚
     *
     * @return mixed
     *
     */
    public abstract function buildRightLeg();
}