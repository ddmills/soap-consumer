<?php

class SalesOrderShipment extends Entity
{

    /**
     * @var StringValue $InventoryRefNbr
     */
    protected $InventoryRefNbr = null;

    /**
     * @var DateTimeValue $ShipmentDate
     */
    protected $ShipmentDate = null;

    /**
     * @var StringValue $ShipmentNbr
     */
    protected $ShipmentNbr = null;

    /**
     * @var StringValue $Status
     */
    protected $Status = null;

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
    public function getInventoryRefNbr()
    {
      return $this->InventoryRefNbr;
    }

    /**
     * @param StringValue $InventoryRefNbr
     * @return SalesOrderShipment
     */
    public function setInventoryRefNbr($InventoryRefNbr)
    {
      $this->InventoryRefNbr = $InventoryRefNbr;
      return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getShipmentDate()
    {
      return $this->ShipmentDate;
    }

    /**
     * @param DateTimeValue $ShipmentDate
     * @return SalesOrderShipment
     */
    public function setShipmentDate($ShipmentDate)
    {
      $this->ShipmentDate = $ShipmentDate;
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
     * @return SalesOrderShipment
     */
    public function setShipmentNbr($ShipmentNbr)
    {
      $this->ShipmentNbr = $ShipmentNbr;
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
     * @return SalesOrderShipment
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
