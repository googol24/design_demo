<?php

/**
 * 数据访问类
 * 用简单工厂改造抽象工厂
 *
 * @author zhangzhengkun
 */
class DataAccess
{
    /**
     * DB类型：SQL Server
     */
    const DB_SQL_SERVER = 'SqlServer';

    /**
     * DB类型：Access
     */
    const DB_ACCESS = 'Access';

    /**
     * 数据库类型(sql server 或者 access 等)
     *
     * @var string
     */
    private static $db = self::DB_SQL_SERVER;

    /**
     * 生产一个具体的用户对象
     *
     * @return AccessUser|null|SqlServerUser
     *
     */
    public static function createUser()
    {
        $result = null;

        switch (self::$db) {
            case self::DB_SQL_SERVER:
                $result = new SqlServerUser();
                break;
            case self::DB_ACCESS:
                $result = new AccessUser();
                break;
        }

        return $result;
    }

    /**
     * 生产一个具体的部门对象
     *
     * @return AccessDepartment|null|SqlServerDepartment
     *
     */
    public static function createDepartment()
    {
        $result = null;

        switch (self::$db) {
            case self::DB_SQL_SERVER:
                $result = new SqlServerDepartment();
                break;
            case self::DB_ACCESS:
                $result = new AccessDepartment();
                break;
        }

        return $result;
    }

    /**
     * 生产一个具体的用户对象(使用反射)
     *
     * @return object
     *
     * @throws Throwable
     *
     */
    public static function createUserUsingReflect()
    {
        $className = self::$db . 'User';

        $class = new ReflectionClass($className);

        $user = $class->newInstance();

        return $user;
    }

    /**
     * 生产一个具体的部门对象（使用反射）
     *
     * @return Object
     *
     * @throws Throwable
     */
    public static function createDepartmentUsingReflect()
    {
        $className = self::$db . 'Department';

        $class = new ReflectionClass($className);

        $department = $class->newInstance();

        return $department;
    }
}