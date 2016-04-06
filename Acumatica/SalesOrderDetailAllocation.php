<?php

class SalesOrderDetailAllocation extends Entity
{

    /**
     * @var BooleanValue $Allocated
     */
    protected $Allocated = null;

    /**
     * @var StringValue $AllocWarehouseID
     */
    protected $AllocWarehouseID = null;

    /**
     * @var BooleanValue $Completed
     */
    protected $Completed = null;

    /**
     * @var DateTimeValue $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var StringValue $LocationID
     */
    protected $LocationID = null;

    /**
     * @var StringValue $LotSerialNbr
     */
    protected $LotSerialNbr = null;

    /**
     * @var DecimalValue $QtyOnShipments
     */
    protected $QtyOnShipments = null;

    /**
     * @var DecimalValue $QtyReceived
     */
    protected $QtyReceived = null;

    /**
     * @var DecimalValue $Quantity
     */
    protected $Quantity = null;

    /**
     * @var StringValue $RelatedDocument
     */
    protected $RelatedDocument = null;

    /**
     * @var DateTimeValue $ShipOn
     */
    protected $ShipOn = null;

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
     * @return BooleanValue
     */
    public function getAllocated()
    {
      return $this->Allocated;
    }

    /**
     * @param BooleanValue $Allocated
     * @return SalesOrderDetailAllocation
     */
    public function setAllocated($Allocated)
    {
      $this->Allocated = $Allocated;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getAllocWarehouseID()
    {
      return $this->AllocWarehouseID;
    }

    /**
     * @param StringValue $AllocWarehouseID
     * @return SalesOrderDetailAllocation
     */
    public function setAllocWarehouseID($AllocWarehouseID)
    {
      $this->AllocWarehouseID = $AllocWarehouseID;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getCompleted()
    {
      return $this->Completed;
    }

    /**
     * @param BooleanValue $Completed
     * @return SalesOrderDetailAllocation
     */
    public function setCompleted($Completed)
    {
      $this->Completed = $Completed;
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
     * @return SalesOrderDetailAllocation
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
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
     * @return SalesOrderDetailAllocation
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
     * @return SalesOrderDetailAllocation
     */
    public function setLotSerialNbr($LotSerialNbr)
    {
      $this->LotSerialNbr = $LotSerialNbr;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getQtyOnShipments()
    {
      return $this->QtyOnShipments;
    }

    /**
     * @param DecimalValue $QtyOnShipments
     * @return SalesOrderDetailAllocation
     */
    public function setQtyOnShipments($QtyOnShipments)
    {
      $this->QtyOnShipments = $QtyOnShipments;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getQtyReceived()
    {
      return $this->QtyReceived;
    }

    /**
     * @param DecimalValue $QtyReceived
     * @return SalesOrderDetailAllocation
     */
    public function setQtyReceived($QtyReceived)
    {
      $this->QtyReceived = $QtyReceived;
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
     * @return SalesOrderDetailAllocation
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getRelatedDocument()
    {
      return $this->RelatedDocument;
    }

    /**
     * @param StringValue $RelatedDocument
     * @return SalesOrderDetailAllocation
     */
    public function setRelatedDocument($RelatedDocument)
    {
      $this->RelatedDocument = $RelatedDocument;
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
     * @return SalesOrderDetailAllocation
     */
    public function setShipOn($ShipOn)
    {
      $this->ShipOn = $ShipOn;
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
     * @return SalesOrderDetailAllocation
     */
    public function setUOM($UOM)
    {
      $this->UOM = $UOM;
      return $this;
    }

}
