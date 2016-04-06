<?php

class Adjustment extends Entity
{

    /**
     * @var DateTimeValue $Date
     */
    protected $Date = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var Details $Details
     */
    protected $Details = null;

    /**
     * @var StringValue $ExternalRef
     */
    protected $ExternalRef = null;

    /**
     * @var BooleanValue $Hold
     */
    protected $Hold = null;

    /**
     * @var StringValue $ReferenceNbr
     */
    protected $ReferenceNbr = null;

    /**
     * @var StringValue $Status
     */
    protected $Status = null;

    /**
     * @var DecimalValue $TotalCost
     */
    protected $TotalCost = null;

    /**
     * @var DecimalValue $TotalQty
     */
    protected $TotalQty = null;

    /**
     * @param boolean $Delete
     */
    public function __construct($Delete)
    {
      parent::__construct($Delete);
    }

    /**
     * @return DateTimeValue
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param DateTimeValue $Date
     * @return Adjustment
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param StringValue $Description
     * @return Adjustment
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return Details
     */
    public function getDetails()
    {
      return $this->Details;
    }

    /**
     * @param Details $Details
     * @return Adjustment
     */
    public function setDetails($Details)
    {
      $this->Details = $Details;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getExternalRef()
    {
      return $this->ExternalRef;
    }

    /**
     * @param StringValue $ExternalRef
     * @return Adjustment
     */
    public function setExternalRef($ExternalRef)
    {
      $this->ExternalRef = $ExternalRef;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getHold()
    {
      return $this->Hold;
    }

    /**
     * @param BooleanValue $Hold
     * @return Adjustment
     */
    public function setHold($Hold)
    {
      $this->Hold = $Hold;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getReferenceNbr()
    {
      return $this->ReferenceNbr;
    }

    /**
     * @param StringValue $ReferenceNbr
     * @return Adjustment
     */
    public function setReferenceNbr($ReferenceNbr)
    {
      $this->ReferenceNbr = $ReferenceNbr;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param StringValue $Status
     * @return Adjustment
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getTotalCost()
    {
      return $this->TotalCost;
    }

    /**
     * @param DecimalValue $TotalCost
     * @return Adjustment
     */
    public function setTotalCost($TotalCost)
    {
      $this->TotalCost = $TotalCost;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getTotalQty()
    {
      return $this->TotalQty;
    }

    /**
     * @param DecimalValue $TotalQty
     * @return Adjustment
     */
    public function setTotalQty($TotalQty)
    {
      $this->TotalQty = $TotalQty;
      return $this;
    }

}
