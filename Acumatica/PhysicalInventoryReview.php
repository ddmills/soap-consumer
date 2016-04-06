<?php

class PhysicalInventoryReview extends Entity
{

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var Details $Details
     */
    protected $Details = null;

    /**
     * @var DateTimeValue $FreezeDate
     */
    protected $FreezeDate = null;

    /**
     * @var StringValue $ReferenceNbr
     */
    protected $ReferenceNbr = null;

    /**
     * @var StringValue $Status
     */
    protected $Status = null;

    /**
     * @var DecimalValue $TotalPhysicalQty
     */
    protected $TotalPhysicalQty = null;

    /**
     * @var DecimalValue $TotalVarianceCost
     */
    protected $TotalVarianceCost = null;

    /**
     * @var DecimalValue $TotalVarianceQty
     */
    protected $TotalVarianceQty = null;

    /**
     * @var StringValue $TypeID
     */
    protected $TypeID = null;

    /**
     * @var StringValue $WarehouseID
     */
    protected $WarehouseID = null;

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
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param StringValue $Description
     * @return PhysicalInventoryReview
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
     * @return PhysicalInventoryReview
     */
    public function setDetails($Details)
    {
      $this->Details = $Details;
      return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getFreezeDate()
    {
      return $this->FreezeDate;
    }

    /**
     * @param DateTimeValue $FreezeDate
     * @return PhysicalInventoryReview
     */
    public function setFreezeDate($FreezeDate)
    {
      $this->FreezeDate = $FreezeDate;
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
     * @return PhysicalInventoryReview
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
     * @return PhysicalInventoryReview
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getTotalPhysicalQty()
    {
      return $this->TotalPhysicalQty;
    }

    /**
     * @param DecimalValue $TotalPhysicalQty
     * @return PhysicalInventoryReview
     */
    public function setTotalPhysicalQty($TotalPhysicalQty)
    {
      $this->TotalPhysicalQty = $TotalPhysicalQty;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getTotalVarianceCost()
    {
      return $this->TotalVarianceCost;
    }

    /**
     * @param DecimalValue $TotalVarianceCost
     * @return PhysicalInventoryReview
     */
    public function setTotalVarianceCost($TotalVarianceCost)
    {
      $this->TotalVarianceCost = $TotalVarianceCost;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getTotalVarianceQty()
    {
      return $this->TotalVarianceQty;
    }

    /**
     * @param DecimalValue $TotalVarianceQty
     * @return PhysicalInventoryReview
     */
    public function setTotalVarianceQty($TotalVarianceQty)
    {
      $this->TotalVarianceQty = $TotalVarianceQty;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getTypeID()
    {
      return $this->TypeID;
    }

    /**
     * @param StringValue $TypeID
     * @return PhysicalInventoryReview
     */
    public function setTypeID($TypeID)
    {
      $this->TypeID = $TypeID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getWarehouseID()
    {
      return $this->WarehouseID;
    }

    /**
     * @param StringValue $WarehouseID
     * @return PhysicalInventoryReview
     */
    public function setWarehouseID($WarehouseID)
    {
      $this->WarehouseID = $WarehouseID;
      return $this;
    }

}
