<?php

/**
 * 外籍中锋球员类
 * 没有客户所需要的接口attack defense等
 *
 * @author zhangzhengkun
 */
class ForeignCentreForward
{
    /**
     * 姓名
     *
     * @var string
     */
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function 进攻()
    {
        echo '外籍中锋 ' . $this->name . ' 进攻' . PHP_EOL;
    }

    public function 防守()
    {
        echo '外籍中锋 ' . $this->name . ' 防守' . PHP_EOL;
    }
}