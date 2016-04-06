<?php

class AdjustmentDetail extends Entity
{

    /**
     * @var StringValue $BranchID
     */
    protected $BranchID = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var DateTimeValue $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var StringValue $InventoryID
     */
    protected $InventoryID = null;

    /**
     * @var StringValue $LocationID
     */
    protected $LocationID = null;

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
     * @var StringValue $ReceiptNbr
     */
    protected $ReceiptNbr = null;

    /**
     * @var StringValue $Subitem
     */
    protected $Subitem = null;

    /**
     * @var StringValue $UOM
     */
    protected $UOM = null;

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
    public function getBranchID()
    {
      return $this->BranchID;
    }

    /**
     * @param StringValue $BranchID
     * @return AdjustmentDetail
     */
    public function setBranchID($BranchID)
    {
      $this->BranchID = $BranchID;
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
     * @return AdjustmentDetail
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
     * @return AdjustmentDetail
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
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
     * @return AdjustmentDetail
     */
    public function setInventoryID($InventoryID)
    {
      $this->InventoryID = $InventoryID;
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
     * @return AdjustmentDetail
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
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
     * @return AdjustmentDetail
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
     * @return AdjustmentDetail
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
     * @return AdjustmentDetail
     */
    public function setReasonCode($ReasonCode)
    {
      $this->ReasonCode = $ReasonCode;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getReceiptNbr()
    {
      return $this->ReceiptNbr;
    }

    /**
     * @param StringValue $ReceiptNbr
     * @return AdjustmentDetail
     */
    public function setReceiptNbr($ReceiptNbr)
    {
      $this->ReceiptNbr = $ReceiptNbr;
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
     * @return AdjustmentDetail
     */
    public function setSubitem($Subitem)
    {
      $this->Subitem = $Subitem;
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
     * @return AdjustmentDetail
     */
    public function setUOM($UOM)
    {
      $this->UOM = $UOM;
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
     * @return AdjustmentDetail
     */
    public function setWarehouseID($WarehouseID)
    {
      $this->WarehouseID = $WarehouseID;
      return $this;
    }

}
