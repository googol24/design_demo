<?php

/**
 * 角色状态管理者
 *
 *
 * @author zhangzhengkun
 */
class RoleStateCaretaker
{
    /**
     * 备忘录对象
     *
     * @var RoleStateMemento
     */
    private $roleStateMemento;

    public function getRoleStateMemento()
    {
        return $this->roleStateMemento;
    }

    public function setRoleStateMemento($roleStateMemento)
    {
        $this->roleStateMemento = $roleStateMemento;
    }
}