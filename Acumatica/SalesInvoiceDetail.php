<?php

class SalesInvoiceDetail extends Entity
{

    /**
     * @var DecimalValue $Amount
     */
    protected $Amount = null;

    /**
     * @var StringValue $BranchID
     */
    protected $BranchID = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var StringValue $InventoryID
     */
    protected $InventoryID = null;

    /**
     * @var IntValue $LineNbr
     */
    protected $LineNbr = null;

    /**
     * @var StringValue $OrderNbr
     */
    protected $OrderNbr = null;

    /**
     * @var StringValue $OrderType
     */
    protected $OrderType = null;

    /**
     * @var DecimalValue $Quantity
     */
    protected $Quantity = null;

    /**
     * @var StringValue $ShipmentNbr
     */
    protected $ShipmentNbr = null;

    /**
     * @var DecimalValue $UnitPrice
     */
    protected $UnitPrice = null;

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
     * @return DecimalValue
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param DecimalValue $Amount
     * @return SalesInvoiceDetail
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
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
     * @return SalesInvoiceDetail
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
     * @return SalesInvoiceDetail
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return SalesInvoiceDetail
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
     * @return SalesInvoiceDetail
     */
    public function setLineNbr($LineNbr)
    {
      $this->LineNbr = $LineNbr;
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
     * @return SalesInvoiceDetail
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
     * @return SalesInvoiceDetail
     */
    public function setOrderType($OrderType)
    {
      $this->OrderType = $OrderType;
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
     * @return SalesInvoiceDetail
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getShipmentNbr()
    {
      return $this->ShipmentNbr;
    }

    /**
     * @param StringValue $ShipmentNbr
     * @return SalesInvoiceDetail
     */
    public function setShipmentNbr($ShipmentNbr)
    {
      $this->ShipmentNbr = $ShipmentNbr;
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
     * @return SalesInvoiceDetail
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
     * @return SalesInvoiceDetail
     */
    public function setUOM($UOM)
    {
      $this->UOM = $UOM;
      return $this;
    }

}
