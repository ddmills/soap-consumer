<?php

class PhysicalInventoryReviewDetail extends Entity
{

    /**
     * @var DecimalValue $BookQuantity
     */
    protected $BookQuantity = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var DateTimeValue $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var DecimalValue $ExtVarianceCost
     */
    protected $ExtVarianceCost = null;

    /**
     * @var StringValue $InventoryID
     */
    protected $InventoryID = null;

    /**
     * @var IntValue $LineNbr
     */
    protected $LineNbr = null;

    /**
     * @var StringValue $LocationID
     */
    protected $LocationID = null;

    /**
     * @var StringValue $LotSerialNumber
     */
    protected $LotSerialNumber = null;

    /**
     * @var DecimalValue $PhysicalQuantity
     */
    protected $PhysicalQuantity = null;

    /**
     * @var StringValue $ReasonCode
     */
    protected $ReasonCode = null;

    /**
     * @var StringValue $Status
     */
    protected $Status = null;

    /**
     * @var StringValue $Subitem
     */
    protected $Subitem = null;

    /**
     * @var IntValue $TagNbr
     */
    protected $TagNbr = null;

    /**
     * @var DecimalValue $UnitCost
     */
    protected $UnitCost = null;

    /**
     * @var DecimalValue $VarianceQuantity
     */
    protected $VarianceQuantity = null;

    /**
     * @param boolean $Delete
     */
    public function __construct($Delete)
    {
      parent::__construct($Delete);
    }

    /**
     * @return DecimalValue
     */
    public function getBookQuantity()
    {
      return $this->BookQuantity;
    }

    /**
     * @param DecimalValue $BookQuantity
     * @return PhysicalInventoryReviewDetail
     */
    public function setBookQuantity($BookQuantity)
    {
      $this->BookQuantity = $BookQuantity;
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
     * @return PhysicalInventoryReviewDetail
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getExpirationDate()
    {
      return $this->ExpirationDate;
    }

    /**
     * @param DateTimeValue $ExpirationDate
     * @return PhysicalInventoryReviewDetail
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getExtVarianceCost()
    {
      return $this->ExtVarianceCost;
    }

    /**
     * @param DecimalValue $ExtVarianceCost
     * @return PhysicalInventoryReviewDetail
     */
    public function setExtVarianceCost($ExtVarianceCost)
    {
      $this->ExtVarianceCost = $ExtVarianceCost;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getInventoryID()
    {
      return $this->InventoryID;
    }

    /**
     * @param StringValue $InventoryID
     * @return PhysicalInventoryReviewDetail
     */
    public function setInventoryID($InventoryID)
    {
      $this->InventoryID = $InventoryID;
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
     * @return PhysicalInventoryReviewDetail
     */
    public function setLineNbr($LineNbr)
    {
      $this->LineNbr = $LineNbr;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getLocationID()
    {
      return $this->LocationID;
    }

    /**
     * @param StringValue $LocationID
     * @return PhysicalInventoryReviewDetail
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getLotSerialNumber()
    {
      return $this->LotSerialNumber;
    }

    /**
     * @param StringValue $LotSerialNumber
     * @return PhysicalInventoryReviewDetail
     */
    public function setLotSerialNumber($LotSerialNumber)
    {
      $this->LotSerialNumber = $LotSerialNumber;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getPhysicalQuantity()
    {
      return $this->PhysicalQuantity;
    }

    /**
     * @param DecimalValue $PhysicalQuantity
     * @return PhysicalInventoryReviewDetail
     */
    public function setPhysicalQuantity($PhysicalQuantity)
    {
      $this->PhysicalQuantity = $PhysicalQuantity;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getReasonCode()
    {
      return $this->ReasonCode;
    }

    /**
     * @param StringValue $ReasonCode
     * @return PhysicalInventoryReviewDetail
     */
    public function setReasonCode($ReasonCode)
    {
      $this->ReasonCode = $ReasonCode;
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
     * @return PhysicalInventoryReviewDetail
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getSubitem()
    {
      return $this->Subitem;
    }

    /**
     * @param StringValue $Subitem
     * @return PhysicalInventoryReviewDetail
     */
    public function setSubitem($Subitem)
    {
      $this->Subitem = $Subitem;
      return $this;
    }

    /**
     * @return IntValue
     */
    public function getTagNbr()
    {
      return $this->TagNbr;
    }

    /**
     * @param IntValue $TagNbr
     * @return PhysicalInventoryReviewDetail
     */
    public function setTagNbr($TagNbr)
    {
      $this->TagNbr = $TagNbr;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getUnitCost()
    {
      return $this->UnitCost;
    }

    /**
     * @param DecimalValue $UnitCost
     * @return PhysicalInventoryReviewDetail
     */
    public function setUnitCost($UnitCost)
    {
      $this->UnitCost = $UnitCost;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getVarianceQuantity()
    {
      return $this->VarianceQuantity;
    }

    /**
     * @param DecimalValue $VarianceQuantity
     * @return PhysicalInventoryReviewDetail
     */
    public function setVarianceQuantity($VarianceQuantity)
    {
      $this->VarianceQuantity = $VarianceQuantity;
      return $this;
    }

}
