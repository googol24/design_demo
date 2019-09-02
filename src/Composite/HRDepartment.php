<?php

/**
 * 人力资源部
 * 相当于组合模式中的树叶结点
 *
 * @author zhangzhengkun
 */
class HRDepartment extends Company
{
    /**
     * 添加子公司
     *
     * @param Company $c
     *
     * @return mixed
     *
     */
    public function add($c)
    {
        // 叶结点没有子节结点了，不具备再添加叶节点的功能
    }

    /**
     * 移除子公司
     *
     * @param Company $c
     *
     * @return mixed
     *
     */
    public function remove($c)
    {
        // 叶结点没有子结点了，不具备移除某一个子结点的功能
    }

    /**
     * 根据深度层级显示公司结构
     *
     * @param int $depth
     *
     * @return mixed
     *
     */
    public function show($depth)
    {
        echo str_repeat('--', $depth) . $this->name . PHP_EOL;
    }

    /**
     * 履行职责
     *
     * @return mixed
     *
     */
    public function lineOfDuty()
    {
        echo $this->name . '员工招聘培训管理' . PHP_EOL;
    }

}