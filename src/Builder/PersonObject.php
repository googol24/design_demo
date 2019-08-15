<?php

/**
 * 人类（被构建的对象类）
 *
 * @author zhangzhengkun
 */
class PersonObject
{
    /**
     * 人的部件集合
     *
     * @var array
     */
    private $parts;

    /**
     * 添加部件
     *
     * @param string $part
     *
     */
    public function add($part)
    {
        $this->parts[] = $part;
    }

    /**
     * 显示产品创建过程
     */
    public function showCreateProcess()
    {
        echo '---------------创建开始----------------------' . PHP_EOL;
        foreach ($this->parts as $part) {
            echo '添加部件（画一个）：' . $part . PHP_EOL;
        }
        echo '---------------创建结束----------------------' . PHP_EOL;
        echo PHP_EOL;
    }
}