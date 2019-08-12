<?php

class OperationSub extends Operation
{
    /**
     * 获取计算结果
     *
     * @return int
     *
     */
    public function getResult()
    {
        return $this->getNumberA() - $this->getNumberB();
    }
}