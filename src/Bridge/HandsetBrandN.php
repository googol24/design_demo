<?php

/**
 * 手机N品牌类
 *
 * @author zhangzhengkun
 */
class HandsetBrandN extends HandsetBrand
{
    protected $brandName = 'N品牌手机';

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