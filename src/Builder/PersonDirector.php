<?php

/**
 * 创建人的指挥者类
 * 用于控制建造过程，隔离用户与建造过程的关联
 *
 * @author zhangzhengkun
 */
class PersonDirector
{
    /**
     * 建造者
     *
     * @var PersonBuilder
     */
    private $personBuilder;

    /**
     * 构造函数
     *
     * @param PersonBuilder $pb 具体类型的建造者
     *
     */
    public function __construct($pb)
    {
        $this->personBuilder = $pb;
    }

    /**
     * 创建人
     */
    public function createPerson()
    {
        // 约束按照指定的建造过程进行创建
        echo '---------------创建开始----------------------' . PHP_EOL;
        $this->personBuilder->buildHead();
        $this->personBuilder->buildBody();
        $this->personBuilder->buildLeftArm();
        $this->personBuilder->buildRightArm();
        $this->personBuilder->buildLeftLeg();
        $this->personBuilder->buildRightLeg();
        echo '---------------创建结束----------------------' . PHP_EOL;
    }
}