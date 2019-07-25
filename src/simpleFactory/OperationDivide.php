<?php

class OperationDivide extends Operation
{
    /**
     * 获取计算结果
     *
     * @return int
     *
     */
    public function getResult()
    {
        $numberA = $this->getNumberA();
        $numberB = $this->getNumberB();

        if ($numberB == 0) {
            throw new LogicException('除数不能为0');
        }

        return $numberA / $numberB;
    }
}