<?php

class EmployeeCost
{

    /**
     * @var EmployeeCostRecord $EmployeeCostRecord
     */
    protected $EmployeeCostRecord = null;

    /**
     * @param EmployeeCostRecord $EmployeeCostRecord
     */
    public function __construct($EmployeeCostRecord)
    {
      $this->EmployeeCostRecord = $EmployeeCostRecord;
    }

    /**
     * @return EmployeeCostRecord
     */
    public function getEmployeeCostRecord()
    {
      return $this->EmployeeCostRecord;
    }

    /**
     * @param EmployeeCostRecord $EmployeeCostRecord
     * @return EmployeeCost
     */
    public function setEmployeeCostRecord($EmployeeCostRecord)
    {
      $this->EmployeeCostRecord = $EmployeeCostRecord;
      return $this;
    }

}
