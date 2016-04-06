<?php

class EmploymentHistory
{

    /**
     * @var EmploymentHistoryRecord $EmploymentHistoryRecord
     */
    protected $EmploymentHistoryRecord = null;

    /**
     * @param EmploymentHistoryRecord $EmploymentHistoryRecord
     */
    public function __construct($EmploymentHistoryRecord)
    {
      $this->EmploymentHistoryRecord = $EmploymentHistoryRecord;
    }

    /**
     * @return EmploymentHistoryRecord
     */
    public function getEmploymentHistoryRecord()
    {
      return $this->EmploymentHistoryRecord;
    }

    /**
     * @param EmploymentHistoryRecord $EmploymentHistoryRecord
     * @return EmploymentHistory
     */
    public function setEmploymentHistoryRecord($EmploymentHistoryRecord)
    {
      $this->EmploymentHistoryRecord = $EmploymentHistoryRecord;
      return $this;
    }

}
