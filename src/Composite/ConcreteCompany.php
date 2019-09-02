<?php

/**
 * 具体公司类
 * 相当于组合模式中的树枝结点
 *
 * @author zhangzhengkun
 */
class ConcreteCompany extends Company
{
    /**
     * 子节点
     *
     * @var array
     */
    private $children;

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
        $this->children[] = $c;
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
        if (!empty($this->children)) {
            foreach ($this->children as $key => $child) {
                if (serialize($child) == serialize($c)) {
                    unset($this->children[$key]);
                    return true;
                }
            }

            return false;
        }

        return false;
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

        if (!empty($this->children)) {
            foreach ($this->children as $child) {
                /** @var Company $child */
                $child->show($depth + 1);
            }
        }
    }

    /**
     * 履行职责
     *
     * @return mixed
     *
     */
    public function lineOfDuty()
    {
        if (!empty($this->children)) {
            foreach ($this->children as $child) {
                /** @var Company $child */
                $child->lineOfDuty();
            }
        }
    }

}