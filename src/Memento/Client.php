<?php

// 自动加载
spl_autoload_register(function ($class) {
    include "$class.php";
});

// 游戏角色
$role = new GameRole();

// 初始化角色状态
$role->initializeState();

// 显示初始化的角色状态
$role->displayState();

// 保存角色当前状态到备忘录
// 需要引入角色状态管理者，隐藏了实现细节。
// 保存进度时，由于进度数据封装在备忘录类中，因此我们不知道具体保存了哪些具体的角色数据
$roleStateAdmin = new RoleStateCaretaker();
$roleStateAdmin->setRoleStateMemento($role->saveState());

// 参与战斗（阵亡）
$role->fight();

// 显示战斗后的角色状态
$role->displayState();

// 根据之前保存的备忘录，恢复到备忘录保存的角色状态
$role->recoveryStatus($roleStateAdmin->getRoleStateMemento());

// 展示恢复之后的角色状态
$role->displayState();