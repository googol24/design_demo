<?php

/**
 * 雷锋工厂接口
 *
 * Interface Factory
 */
interface Factory
{
    /**
     * 创建雷锋实体类（创建工厂产品的工厂方法）
     *
     * @return Student | Volunteer
     *
     */
    public function createLeifeng();
}