<?php

class LotSerialClass extends Entity
{

    /**
     * @var StringValue $AssignmentMethod
     */
    protected $AssignmentMethod = null;

    /**
     * @var StringValue $ClassID
     */
    protected $ClassID = null;

    /**
     * @var StringValue $IssueMethod
     */
    protected $IssueMethod = null;

    /**
     * @var StringValue $TrackingMethod
     */
    protected $TrackingMethod = null;

    /**
     * @param boolean $Delete
     */
    public function __construct($Delete)
    {
      parent::__construct($Delete);
    }

    /**
     * @return StringValue
     */
    public function getAssignmentMethod()
    {
      return $this->AssignmentMethod;
    }

    /**
     * @param StringValue $AssignmentMethod
     * @return LotSerialClass
     */
    public function setAssignmentMethod($AssignmentMethod)
    {
      $this->AssignmentMethod = $AssignmentMethod;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getClassID()
    {
      return $this->ClassID;
    }

    /**
     * @param StringValue $ClassID
     * @return LotSerialClass
     */
    public function setClassID($ClassID)
    {
      $this->ClassID = $ClassID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getIssueMethod()
    {
      return $this->IssueMethod;
    }

    /**
     * @param StringValue $IssueMethod
     * @return LotSerialClass
     */
    public function setIssueMethod($IssueMethod)
    {
      $this->IssueMethod = $IssueMethod;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getTrackingMethod()
    {
      return $this->TrackingMethod;
    }

    /**
     * @param StringValue $TrackingMethod
     * @return LotSerialClass
     */
    public function setTrackingMethod($TrackingMethod)
    {
      $this->TrackingMethod = $TrackingMethod;
      return $this;
    }

}
