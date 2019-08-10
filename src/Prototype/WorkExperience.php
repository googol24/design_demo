<?php

/**
 * 工作经验类
 *
 * @author googol24
 */
class WorkExperience
{
    /**
     * 时间段区间
     *
     * @var string
     */
    private $workDate;

    /**
     * 任职的公司
     *
     * @var string
     */
    private $company;

    // getters and setters

    public function getWorkDate()
    {
        return $this->workDate;
    }

    public function setWorkDate($date)
    {
        $this->workDate = $date;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function setCompany($company)
    {
        $this->company = $company;
    }
}