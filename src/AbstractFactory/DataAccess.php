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
    const DB_SQL_SERVER = 'sql_server';

    /**
     * DB类型：Access
     */
    const DB_ACCESS = 'access';

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
}