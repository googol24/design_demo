<?php

/**
 * 游戏角色类
 * 相当于备忘录模式里面的发起人Originator
 *
 * @author zhangzhengkun
 */
class GameRole
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

    /**
     * 状态显示
     */
    public function displayState()
    {
        echo '游戏角色的当前状态：' . PHP_EOL;
        echo '体力：' . $this->vitality . PHP_EOL;
        echo '攻击力：' . $this->attack . PHP_EOL;
        echo '防御力：' . $this->defense . PHP_EOL;
    }

    /**
     * 设置游戏角色的初始状态
     */
    public function initializeState()
    {
        $this->vitality = 100;
        $this->attack = 100;
        $this->defense = 100;
    }

    /**
     * 战斗
     */
    public function fight()
    {
        // 阵亡
        $this->vitality = 0;
        $this->attack = 0;
        $this->defense = 0;
    }

    /**
     * 保存角色当前状态
     *
     * @return RoleStateMemento
     *
     */
    public function saveState()
    {
        return new RoleStateMemento($this->vitality, $this->attack, $this->defense);
    }

    /**
     * 恢复保存到备忘录的角色状态
     *
     * @param RoleStateMemento $statusMemento
     *
     */
    public function recoveryStatus($statusMemento)
    {
        $this->vitality = $statusMemento->getVitality();
        $this->attack = $statusMemento->getAttack();
        $this->defense = $statusMemento->getDefense();
    }
}