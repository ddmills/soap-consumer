<?php

class ShipmentDetail extends Entity
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
     * @var BooleanValue $FreeItem
     */
    protected $FreeItem = null;

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
     * @var StringValue $LotSerialNbr
     */
    protected $LotSerialNbr = null;

    /**
     * @var DecimalValue $OpenQty
     */
    protected $OpenQty = null;

    /**
     * @var DecimalValue $OrderedQty
     */
    protected $OrderedQty = null;

    /**
     * @var IntValue $OrderLineNbr
     */
    protected $OrderLineNbr = null;

    /**
     * @var StringValue $OrderNbr
     */
    protected $OrderNbr = null;

    /**
     * @var StringValue $OrderType
     */
    protected $OrderType = null;

    /**
     * @var StringValue $ReasonCode
     */
    protected $ReasonCode = null;

    /**
     * @var DecimalValue $ShippedQty
     */
    protected $ShippedQty = null;

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
     * @return Allocations
     */
    public function getAllocations()
    {
      return $this->Allocations;
    }

    /**
     * @param Allocations $Allocations
     * @return ShipmentDetail
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
     * @return ShipmentDetail
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
     * @return ShipmentDetail
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getFreeItem()
    {
      return $this->FreeItem;
    }

    /**
     * @param BooleanValue $FreeItem
     * @return ShipmentDetail
     */
    public function setFreeItem($FreeItem)
    {
      $this->FreeItem = $FreeItem;
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
     * @return ShipmentDetail
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
     * @return ShipmentDetail
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
     * @return ShipmentDetail
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
     * @return ShipmentDetail
     */
    public function setLotSerialNbr($LotSerialNbr)
    {
      $this->LotSerialNbr = $LotSerialNbr;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getOpenQty()
    {
      return $this->OpenQty;
    }

    /**
     * @param DecimalValue $OpenQty
     * @return ShipmentDetail
     */
    public function setOpenQty($OpenQty)
    {
      $this->OpenQty = $OpenQty;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getOrderedQty()
    {
      return $this->OrderedQty;
    }

    /**
     * @param DecimalValue $OrderedQty
     * @return ShipmentDetail
     */
    public function setOrderedQty($OrderedQty)
    {
      $this->OrderedQty = $OrderedQty;
      return $this;
    }

    /**
     * @return IntValue
     */
    public function getOrderLineNbr()
    {
      return $this->OrderLineNbr;
    }

    /**
     * @param IntValue $OrderLineNbr
     * @return ShipmentDetail
     */
    public function setOrderLineNbr($OrderLineNbr)
    {
      $this->OrderLineNbr = $OrderLineNbr;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getOrderNbr()
    {
      return $this->OrderNbr;
    }

    /**
     * @param StringValue $OrderNbr
     * @return ShipmentDetail
     */
    public function setOrderNbr($OrderNbr)
    {
      $this->OrderNbr = $OrderNbr;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getOrderType()
    {
      return $this->OrderType;
    }

    /**
     * @param StringValue $OrderType
     * @return ShipmentDetail
     */
    public function setOrderType($OrderType)
    {
      $this->OrderType = $OrderType;
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
     * @return ShipmentDetail
     */
    public function setReasonCode($ReasonCode)
    {
      $this->ReasonCode = $ReasonCode;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getShippedQty()
    {
      return $this->ShippedQty;
    }

    /**
     * @param DecimalValue $ShippedQty
     * @return ShipmentDetail
     */
    public function setShippedQty($ShippedQty)
    {
      $this->ShippedQty = $ShippedQty;
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
     * @return ShipmentDetail
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
     * @return ShipmentDetail
     */
    public function setWarehouseID($WarehouseID)
    {
      $this->WarehouseID = $WarehouseID;
      return $this;
    }

}
