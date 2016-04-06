<?php

class Shipment extends Entity
{

    /**
     * @var Contact $Contact
     */
    protected $Contact = null;

    /**
     * @var StringValue $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var Details $Details
     */
    protected $Details = null;

    /**
     * @var BooleanValue $Hold
     */
    protected $Hold = null;

    /**
     * @var StringValue $Operation
     */
    protected $Operation = null;

    /**
     * @var BooleanValue $OverrideAddress
     */
    protected $OverrideAddress = null;

    /**
     * @var BooleanValue $OverrideContact
     */
    protected $OverrideContact = null;

    /**
     * @var Packages $Packages
     */
    protected $Packages = null;

    /**
     * @var BooleanValue $ResidentialDelivery
     */
    protected $ResidentialDelivery = null;

    /**
     * @var BooleanValue $SaturdayDelivery
     */
    protected $SaturdayDelivery = null;

    /**
     * @var DateTimeValue $ShipmentDate
     */
    protected $ShipmentDate = null;

    /**
     * @var StringValue $ShipmentNbr
     */
    protected $ShipmentNbr = null;

    /**
     * @var DecimalValue $ShippedQuantity
     */
    protected $ShippedQuantity = null;

    /**
     * @var StringValue $ShipVia
     */
    protected $ShipVia = null;

    /**
     * @var StringValue $Status
     */
    protected $Status = null;

    /**
     * @var StringValue $ToWarehouseID
     */
    protected $ToWarehouseID = null;

    /**
     * @var StringValue $Type
     */
    protected $Type = null;

    /**
     * @var BooleanValue $UseCustomersAccount
     */
    protected $UseCustomersAccount = null;

    /**
     * @var StringValue $WarehouseID
     */
    protected $WarehouseID = null;

    /**
     * @var StringValue $Workgroup
     */
    protected $Workgroup = null;

    /**
     * @param boolean $Delete
     */
    public function __construct($Delete)
    {
      parent::__construct($Delete);
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
      return $this->Contact;
    }

    /**
     * @param Contact $Contact
     * @return Shipment
     */
    public function setContact($Contact)
    {
      $this->Contact = $Contact;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getCustomerID()
    {
      return $this->CustomerID;
    }

    /**
     * @param StringValue $CustomerID
     * @return Shipment
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
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
     * @return Shipment
     */
    public function setDetails($Details)
    {
      $this->Details = $Details;
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
     * @return Shipment
     */
    public function setHold($Hold)
    {
      $this->Hold = $Hold;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getOperation()
    {
      return $this->Operation;
    }

    /**
     * @param StringValue $Operation
     * @return Shipment
     */
    public function setOperation($Operation)
    {
      $this->Operation = $Operation;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getOverrideAddress()
    {
      return $this->OverrideAddress;
    }

    /**
     * @param BooleanValue $OverrideAddress
     * @return Shipment
     */
    public function setOverrideAddress($OverrideAddress)
    {
      $this->OverrideAddress = $OverrideAddress;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getOverrideContact()
    {
      return $this->OverrideContact;
    }

    /**
     * @param BooleanValue $OverrideContact
     * @return Shipment
     */
    public function setOverrideContact($OverrideContact)
    {
      $this->OverrideContact = $OverrideContact;
      return $this;
    }

    /**
     * @return Packages
     */
    public function getPackages()
    {
      return $this->Packages;
    }

    /**
     * @param Packages $Packages
     * @return Shipment
     */
    public function setPackages($Packages)
    {
      $this->Packages = $Packages;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getResidentialDelivery()
    {
      return $this->ResidentialDelivery;
    }

    /**
     * @param BooleanValue $ResidentialDelivery
     * @return Shipment
     */
    public function setResidentialDelivery($ResidentialDelivery)
    {
      $this->ResidentialDelivery = $ResidentialDelivery;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getSaturdayDelivery()
    {
      return $this->SaturdayDelivery;
    }

    /**
     * @param BooleanValue $SaturdayDelivery
     * @return Shipment
     */
    public function setSaturdayDelivery($SaturdayDelivery)
    {
      $this->SaturdayDelivery = $SaturdayDelivery;
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
     * @return Shipment
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
     * @return Shipment
     */
    public function setShipmentNbr($ShipmentNbr)
    {
      $this->ShipmentNbr = $ShipmentNbr;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getShippedQuantity()
    {
      return $this->ShippedQuantity;
    }

    /**
     * @param DecimalValue $ShippedQuantity
     * @return Shipment
     */
    public function setShippedQuantity($ShippedQuantity)
    {
      $this->ShippedQuantity = $ShippedQuantity;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getShipVia()
    {
      return $this->ShipVia;
    }

    /**
     * @param StringValue $ShipVia
     * @return Shipment
     */
    public function setShipVia($ShipVia)
    {
      $this->ShipVia = $ShipVia;
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
     * @return Shipment
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return Shipment
     */
    public function setToWarehouseID($ToWarehouseID)
    {
      $this->ToWarehouseID = $ToWarehouseID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param StringValue $Type
     * @return Shipment
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getUseCustomersAccount()
    {
      return $this->UseCustomersAccount;
    }

    /**
     * @param BooleanValue $UseCustomersAccount
     * @return Shipment
     */
    public function setUseCustomersAccount($UseCustomersAccount)
    {
      $this->UseCustomersAccount = $UseCustomersAccount;
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
     * @return Shipment
     */
    public function setWarehouseID($WarehouseID)
    {
      $this->WarehouseID = $WarehouseID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getWorkgroup()
    {
      return $this->Workgroup;
    }

    /**
     * @param StringValue $Workgroup
     * @return Shipment
     */
    public function setWorkgroup($Workgroup)
    {
      $this->Workgroup = $Workgroup;
      return $this;
    }

}
