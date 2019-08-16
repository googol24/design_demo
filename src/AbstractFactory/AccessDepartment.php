<?php

class AccessDepartment implements IDepartment
{
    /**
     * 添加一个部门
     *
     * @param mixed $department
     *
     * @return mixed
     *
     */
    public function insert($department)
    {
        echo '在Access中给Department表添加一条记录' . PHP_EOL;
    }

    /**
     * 根据部门编号获取一个部门信息
     *
     * @param int $id
     *
     * @return mixed
     *
     */
    public function get($id)
    {
        echo '在Access中根据id=' . $id . '得到Department表的一条记录'. PHP_EOL;
        return null;
    }

}