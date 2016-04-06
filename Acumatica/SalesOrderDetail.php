<?php

class SalesOrderDetail extends Entity
{

    /**
     * @var Allocations $Allocations
     */
    protected $Allocations = null;

    /**
     * @var StringValue $InventoryID
     */
    protected $InventoryID = null;

    /**
     * @var StringValue $LineDescription
     */
    protected $LineDescription = null;

    /**
     * @var IntValue $LineNbr
     */
    protected $LineNbr = null;

    /**
     * @var BooleanValue $ManualDiscount
     */
    protected $ManualDiscount = null;

    /**
     * @var DecimalValue $OpenQuantity
     */
    protected $OpenQuantity = null;

    /**
     * @var DecimalValue $Quantity
     */
    protected $Quantity = null;

    /**
     * @var DecimalValue $QuantityOnShipments
     */
    protected $QuantityOnShipments = null;

    /**
     * @var DateTimeValue $ShipOn
     */
    protected $ShipOn = null;

    /**
     * @var DecimalValue $UnitPrice
     */
    protected $UnitPrice = null;

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
     * @return SalesOrderDetail
     */
    public function setAllocations($Allocations)
    {
      $this->Allocations = $Allocations;
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
     * @return SalesOrderDetail
     */
    public function setInventoryID($InventoryID)
    {
      $this->InventoryID = $InventoryID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getLineDescription()
    {
      return $this->LineDescription;
    }

    /**
     * @param StringValue $LineDescription
     * @return SalesOrderDetail
     */
    public function setLineDescription($LineDescription)
    {
      $this->LineDescription = $LineDescription;
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
     * @return SalesOrderDetail
     */
    public function setLineNbr($LineNbr)
    {
      $this->LineNbr = $LineNbr;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getManualDiscount()
    {
      return $this->ManualDiscount;
    }

    /**
     * @param BooleanValue $ManualDiscount
     * @return SalesOrderDetail
     */
    public function setManualDiscount($ManualDiscount)
    {
      $this->ManualDiscount = $ManualDiscount;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getOpenQuantity()
    {
      return $this->OpenQuantity;
    }

    /**
     * @param DecimalValue $OpenQuantity
     * @return SalesOrderDetail
     */
    public function setOpenQuantity($OpenQuantity)
    {
      $this->OpenQuantity = $OpenQuantity;
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
     * @return SalesOrderDetail
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getQuantityOnShipments()
    {
      return $this->QuantityOnShipments;
    }

    /**
     * @param DecimalValue $QuantityOnShipments
     * @return SalesOrderDetail
     */
    public function setQuantityOnShipments($QuantityOnShipments)
    {
      $this->QuantityOnShipments = $QuantityOnShipments;
      return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getShipOn()
    {
      return $this->ShipOn;
    }

    /**
     * @param DateTimeValue $ShipOn
     * @return SalesOrderDetail
     */
    public function setShipOn($ShipOn)
    {
      $this->ShipOn = $ShipOn;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getUnitPrice()
    {
      return $this->UnitPrice;
    }

    /**
     * @param DecimalValue $UnitPrice
     * @return SalesOrderDetail
     */
    public function setUnitPrice($UnitPrice)
    {
      $this->UnitPrice = $UnitPrice;
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
     * @return SalesOrderDetail
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
     * @return SalesOrderDetail
     */
    public function setWarehouseID($WarehouseID)
    {
      $this->WarehouseID = $WarehouseID;
      return $this;
    }

}
