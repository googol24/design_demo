<?php

/**
 * 手机品牌类（另一个分类维度）
 *
 * @author zhangzhengkun
 */
abstract class HandsetBrand
{
    /**
     * 品牌名称
     *
     * @var string
     */
    protected $brandName;

    /**
     * 手机软件
     *
     * @var HandsetSoft
     */
    protected $soft;

    /**
     * 设置手机软件
     *
     * @param HandsetSoft $handsetSoft
     *
     */
    public function setSoft($handsetSoft)
    {
        $this->soft = $handsetSoft;
    }

    /**
     * 运行
     *
     * @return mixed
     *
     */
    public abstract function run();
}