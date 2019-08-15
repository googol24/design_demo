<?php

/**
 * 创建人的指挥者类
 * 用于控制建造过程（稳定建造过程），隔离用户与建造过程的关联
 *
 * @author zhangzhengkun
 */
class PersonDirector
{
    /**
     * 创建人
     *
     * @param PersonBuilder $personBuilder
     *
     * @return mixed
     */
    public function createPerson($personBuilder)
    {
        // 约束按照指定的建造过程（顺序）进行创建
        $personBuilder->buildHead();
        $personBuilder->buildBody();
        $personBuilder->buildLeftArm();
        $personBuilder->buildRightArm();
        $personBuilder->buildLeftLeg();
        $personBuilder->buildRightLeg();
    }
}