<?php

/**
 * 公司（组织）抽象类
 * 组合中的对象声明接口。在适当情况下，实现所有类共有接口的默认行为。
 *
 * @author zhangzhengkun
 */
abstract class Company
{
    /**
     * 公司名称
     *
     * @var string
     */
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 添加子公司
     * 增加树叶或者树枝
     *
     * @param Company $c
     *
     * @return mixed
     *
     */
    public abstract function add($c);

    /**
     * 移除子公司
     * 移除树叶或者树枝
     *
     * @param Company $c
     *
     * @return mixed
     *
     */
    public abstract function remove($c);

    /**
     * 根据深度层级显示公司结构
     * 显示树结构
     *
     * @param int $depth
     *
     * @return mixed
     *
     */
    public abstract function show($depth);

    /**
     * 履行职责
     *
     * @return mixed
     *
     */
    public abstract function lineOfDuty();
}