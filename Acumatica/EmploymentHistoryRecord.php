<?php

class EmploymentHistoryRecord extends Entity
{

    /**
     * @var BooleanValue $Active
     */
    protected $Active = null;

    /**
     * @var DateTimeValue $EndDate
     */
    protected $EndDate = null;

    /**
     * @var IntValue $LineNbr
     */
    protected $LineNbr = null;

    /**
     * @var StringValue $PositionID
     */
    protected $PositionID = null;

    /**
     * @var BooleanValue $RehireEligible
     */
    protected $RehireEligible = null;

    /**
     * @var DateTimeValue $StartDate
     */
    protected $StartDate = null;

    /**
     * @var StringValue $StartReason
     */
    protected $StartReason = null;

    /**
     * @var BooleanValue $Terminated
     */
    protected $Terminated = null;

    /**
     * @var StringValue $TerminationReason
     */
    protected $TerminationReason = null;

    /**
     * @param boolean $Delete
     */
    public function __construct($Delete)
    {
      parent::__construct($Delete);
    }

    /**
     * @return BooleanValue
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param BooleanValue $Active
     * @return EmploymentHistoryRecord
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param DateTimeValue $EndDate
     * @return EmploymentHistoryRecord
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
      return $this;
    }

    /**
     * @return IntValue
     */
    public function getLineNbr()
    {
      return $this->LineNbr;
    }

    /**
     * @param IntValue $LineNbr
     * @return EmploymentHistoryRecord
     */
    public function setLineNbr($LineNbr)
    {
      $this->LineNbr = $LineNbr;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPositionID()
    {
      return $this->PositionID;
    }

    /**
     * @param StringValue $PositionID
     * @return EmploymentHistoryRecord
     */
    public function setPositionID($PositionID)
    {
      $this->PositionID = $PositionID;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getRehireEligible()
    {
      return $this->RehireEligible;
    }

    /**
     * @param BooleanValue $RehireEligible
     * @return EmploymentHistoryRecord
     */
    public function setRehireEligible($RehireEligible)
    {
      $this->RehireEligible = $RehireEligible;
      return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param DateTimeValue $StartDate
     * @return EmploymentHistoryRecord
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getStartReason()
    {
      return $this->StartReason;
    }

    /**
     * @param StringValue $StartReason
     * @return EmploymentHistoryRecord
     */
    public function setStartReason($StartReason)
    {
      $this->StartReason = $StartReason;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getTerminated()
    {
      return $this->Terminated;
    }

    /**
     * @param BooleanValue $Terminated
     * @return EmploymentHistoryRecord
     */
    public function setTerminated($Terminated)
    {
      $this->Terminated = $Terminated;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getTerminationReason()
    {
      return $this->TerminationReason;
    }

    /**
     * @param StringValue $TerminationReason
     * @return EmploymentHistoryRecord
     */
    public function setTerminationReason($TerminationReason)
    {
      $this->TerminationReason = $TerminationReason;
      return $this;
    }

}
