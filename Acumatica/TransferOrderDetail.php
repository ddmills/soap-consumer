<?php

class TransferOrderDetail extends Entity
{

    /**
     * @var Allocations $Allocations
     */
    protected $Allocations = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var DateTimeValue $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var StringValue $FromLocationID
     */
    protected $FromLocationID = null;

    /**
     * @var StringValue $InventoryID
     */
    protected $InventoryID = null;

    /**
     * @var IntValue $LineNbr
     */
    protected $LineNbr = null;

    /**
     * @var StringValue $LotSerialNbr
     */
    protected $LotSerialNbr = null;

    /**
     * @var DecimalValue $Quantity
     */
    protected $Quantity = null;

    /**
     * @var StringValue $ReasonCode
     */
    protected $ReasonCode = null;

    /**
     * @var StringValue $ToLocationID
     */
    protected $ToLocationID = null;

    /**
     * @var StringValue $UOM
     */
    protected $UOM = null;

    /**
     * @param boolean $Delete
     */
    public function __construct($Delete)
    {
      parent::__construct($Delete);
    }

    /**
     * @return Allocations
     */
    public function getAllocations()
    {
      return $this->Allocations;
    }

    /**
     * @param Allocations $Allocations
     * @return TransferOrderDetail
     */
    public function setAllocations($Allocations)
    {
      $this->Allocations = $Allocations;
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
     * @return TransferOrderDetail
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
     * @return TransferOrderDetail
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getFromLocationID()
    {
      return $this->FromLocationID;
    }

    /**
     * @param StringValue $FromLocationID
     * @return TransferOrderDetail
     */
    public function setFromLocationID($FromLocationID)
    {
      $this->FromLocationID = $FromLocationID;
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
     * @return TransferOrderDetail
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
     * @return TransferOrderDetail
     */
    public function setLineNbr($LineNbr)
    {
      $this->LineNbr = $LineNbr;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getLotSerialNbr()
    {
      return $this->LotSerialNbr;
    }

    /**
     * @param StringValue $LotSerialNbr
     * @return TransferOrderDetail
     */
    public function setLotSerialNbr($LotSerialNbr)
    {
      $this->LotSerialNbr = $LotSerialNbr;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param DecimalValue $Quantity
     * @return TransferOrderDetail
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
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
     * @return TransferOrderDetail
     */
    public function setReasonCode($ReasonCode)
    {
      $this->ReasonCode = $ReasonCode;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getToLocationID()
    {
      return $this->ToLocationID;
    }

    /**
     * @param StringValue $ToLocationID
     * @return TransferOrderDetail
     */
    public function setToLocationID($ToLocationID)
    {
      $this->ToLocationID = $ToLocationID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getUOM()
    {
      return $this->UOM;
    }

    /**
     * @param StringValue $UOM
     * @return TransferOrderDetail
     */
    public function setUOM($UOM)
    {
      $this->UOM = $UOM;
      return $this;
    }

}
