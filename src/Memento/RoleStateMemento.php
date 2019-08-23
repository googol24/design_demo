<?php

/**
 * 游戏角色备忘录类
 * 相当于角色状态存储箱，可以自定义哪些角色数据用于备忘
 *
 * @author zhangzhengkun
 */
class RoleStateMemento
{
    /**
     * 生命值
     *
     * @var int
     */
    private $vitality;

    /**
     * 攻击力
     *
     * @var int
     */
    private $attack;

    /**
     * 防御力
     *
     * @var int
     */
    private $defense;

    public function __construct($vit, $atk, $dfs)
    {
        $this->vitality = $vit;
        $this->attack = $atk;
        $this->defense = $dfs;
    }

    /**
     * 获取备忘生命值
     *
     * @return int
     *
     */
    public function getVitality()
    {
        return $this->vitality;
    }

    /**
     * 获取备忘攻击力值
     *
     * @return int
     *
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * 获取备忘防御力值
     *
     * @return int
     *
     */
    public function getDefense()
    {
        return $this->defense;
    }
}