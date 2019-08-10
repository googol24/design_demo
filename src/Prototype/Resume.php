<?php

/**
 * 简历类
 *
 * @author googol24
 */
class Resume implements IPrototype
{
    /**
     * 姓名
     *
     * @var string
     */
    private $name;

    /**
     * 性别
     *
     * @var string
     */
    private $sex;

    /**
     * 年龄
     *
     * @var int
     */
    private $age;

    /**
     * 工作经验
     *
     * @var WorkExperience
     */
    private $workExperience;

    public function __construct($name)
    {
        $this->name = $name;
        $this->workExperience = new WorkExperience();
    }

    public function setPersonalInfo($sex, $age)
    {
        $this->sex = $sex;
        $this->age = $age;
    }

    public function setWorkExperience($date, $company)
    {
        $this->workExperience->setWorkDate($date);
        $this->workExperience->setCompany($company);
    }

    public function display()
    {
        echo $this->name . ' ' . $this->sex . ' ' . $this->age . PHP_EOL;
        echo '工作经历：' . $this->workExperience->getWorkDate() . ' ' . $this->workExperience->getCompany() . PHP_EOL;
    }

    /**
     * 浅拷贝
     *
     * @return Resume
     *
     */
    public function shallowCopy()
    {
        return clone $this;
    }

    /**
     * 深拷贝（使用序列化实现）
     *
     * @return Resume
     *
     */
    public function deepCopy()
    {
        $serializeObj = serialize($this);
        $cloneObj     = unserialize($serializeObj);

        return $cloneObj;
    }


}