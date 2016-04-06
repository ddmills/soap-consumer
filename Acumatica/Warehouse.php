<?php

class Warehouse extends Entity
{

    /**
     * @var BooleanValue $Active
     */
    protected $Active = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var StringValue $DropShipLocationID
     */
    protected $DropShipLocationID = null;

    /**
     * @var Locations $Locations
     */
    protected $Locations = null;

    /**
     * @var StringValue $ReceivingLocationID
     */
    protected $ReceivingLocationID = null;

    /**
     * @var StringValue $RMALocationID
     */
    protected $RMALocationID = null;

    /**
     * @var StringValue $ShippingLocationID
     */
    protected $ShippingLocationID = null;

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
     * @return BooleanValue
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param BooleanValue $Active
     * @return Warehouse
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
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
     * @return Warehouse
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getDropShipLocationID()
    {
      return $this->DropShipLocationID;
    }

    /**
     * @param StringValue $DropShipLocationID
     * @return Warehouse
     */
    public function setDropShipLocationID($DropShipLocationID)
    {
      $this->DropShipLocationID = $DropShipLocationID;
      return $this;
    }

    /**
     * @return Locations
     */
    public function getLocations()
    {
      return $this->Locations;
    }

    /**
     * @param Locations $Locations
     * @return Warehouse
     */
    public function setLocations($Locations)
    {
      $this->Locations = $Locations;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getReceivingLocationID()
    {
      return $this->ReceivingLocationID;
    }

    /**
     * @param StringValue $ReceivingLocationID
     * @return Warehouse
     */
    public function setReceivingLocationID($ReceivingLocationID)
    {
      $this->ReceivingLocationID = $ReceivingLocationID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getRMALocationID()
    {
      return $this->RMALocationID;
    }

    /**
     * @param StringValue $RMALocationID
     * @return Warehouse
     */
    public function setRMALocationID($RMALocationID)
    {
      $this->RMALocationID = $RMALocationID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getShippingLocationID()
    {
      return $this->ShippingLocationID;
    }

    /**
     * @param StringValue $ShippingLocationID
     * @return Warehouse
     */
    public function setShippingLocationID($ShippingLocationID)
    {
      $this->ShippingLocationID = $ShippingLocationID;
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
     * @return Warehouse
     */
    public function setWarehouseID($WarehouseID)
    {
      $this->WarehouseID = $WarehouseID;
      return $this;
    }

}
