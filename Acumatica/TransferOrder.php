<?php

class TransferOrder extends Entity
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
     * @var StringValue $FromWarehouseID
     */
    protected $FromWarehouseID = null;

    /**
     * @var BooleanValue $Hold
     */
    protected $Hold = null;

    /**
     * @var StringValue $PostPeriod
     */
    protected $PostPeriod = null;

    /**
     * @var StringValue $ReferenceNbr
     */
    protected $ReferenceNbr = null;

    /**
     * @var StringValue $Status
     */
    protected $Status = null;

    /**
     * @var DecimalValue $TotalQty
     */
    protected $TotalQty = null;

    /**
     * @var StringValue $ToWarehouseID
     */
    protected $ToWarehouseID = null;

    /**
     * @var StringValue $TransferType
     */
    protected $TransferType = null;

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
     * @return TransferOrder
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
     * @return TransferOrder
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
     * @return TransferOrder
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
     * @return TransferOrder
     */
    public function setExternalRef($ExternalRef)
    {
      $this->ExternalRef = $ExternalRef;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getFromWarehouseID()
    {
      return $this->FromWarehouseID;
    }

    /**
     * @param StringValue $FromWarehouseID
     * @return TransferOrder
     */
    public function setFromWarehouseID($FromWarehouseID)
    {
      $this->FromWarehouseID = $FromWarehouseID;
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
     * @return TransferOrder
     */
    public function setHold($Hold)
    {
      $this->Hold = $Hold;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPostPeriod()
    {
      return $this->PostPeriod;
    }

    /**
     * @param StringValue $PostPeriod
     * @return TransferOrder
     */
    public function setPostPeriod($PostPeriod)
    {
      $this->PostPeriod = $PostPeriod;
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
     * @return TransferOrder
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
     * @return TransferOrder
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return TransferOrder
     */
    public function setTotalQty($TotalQty)
    {
      $this->TotalQty = $TotalQty;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getToWarehouseID()
    {
      return $this->ToWarehouseID;
    }

    /**
     * @param StringValue $ToWarehouseID
     * @return TransferOrder
     */
    public function setToWarehouseID($ToWarehouseID)
    {
      $this->ToWarehouseID = $ToWarehouseID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getTransferType()
    {
      return $this->TransferType;
    }

    /**
     * @param StringValue $TransferType
     * @return TransferOrder
     */
    public function setTransferType($TransferType)
    {
      $this->TransferType = $TransferType;
      return $this;
    }

}
