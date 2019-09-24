<?php

/**
 * 手机M品牌类
 *
 * @author zhangzhengkun
 */
class HandsetBrandM extends HandsetBrand
{
    protected $brandName = 'M品牌手机';

    /**
     * 运行
     *
     * @return mixed
     *
     */
    public function run()
    {
        echo $this->brandName;
        $this->soft->run();
    }

}