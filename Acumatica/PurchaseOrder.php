<?php

class PurchaseOrder extends Entity
{

    /**
     * @var DecimalValue $ControlTotal
     */
    protected $ControlTotal = null;

    /**
     * @var StringValue $Currency
     */
    protected $Currency = null;

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
     * @var BooleanValue $Hold
     */
    protected $Hold = null;

    /**
     * @var DecimalValue $LineTotal
     */
    protected $LineTotal = null;

    /**
     * @var StringValue $Location
     */
    protected $Location = null;

    /**
     * @var StringValue $OrderNbr
     */
    protected $OrderNbr = null;

    /**
     * @var DecimalValue $OrderTotal
     */
    protected $OrderTotal = null;

    /**
     * @var StringValue $Owner
     */
    protected $Owner = null;

    /**
     * @var DateTimeValue $PromisedOn
     */
    protected $PromisedOn = null;

    /**
     * @var StringValue $Status
     */
    protected $Status = null;

    /**
     * @var DecimalValue $TaxTotal
     */
    protected $TaxTotal = null;

    /**
     * @var StringValue $Type
     */
    protected $Type = null;

    /**
     * @var StringValue $Vendor
     */
    protected $Vendor = null;

    /**
     * @var StringValue $VendorRef
     */
    protected $VendorRef = null;

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
    public function getControlTotal()
    {
      return $this->ControlTotal;
    }

    /**
     * @param DecimalValue $ControlTotal
     * @return PurchaseOrder
     */
    public function setControlTotal($ControlTotal)
    {
      $this->ControlTotal = $ControlTotal;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param StringValue $Currency
     * @return PurchaseOrder
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
     */
    public function setHold($Hold)
    {
      $this->Hold = $Hold;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getLineTotal()
    {
      return $this->LineTotal;
    }

    /**
     * @param DecimalValue $LineTotal
     * @return PurchaseOrder
     */
    public function setLineTotal($LineTotal)
    {
      $this->LineTotal = $LineTotal;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param StringValue $Location
     * @return PurchaseOrder
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
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
     * @return PurchaseOrder
     */
    public function setOrderNbr($OrderNbr)
    {
      $this->OrderNbr = $OrderNbr;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getOrderTotal()
    {
      return $this->OrderTotal;
    }

    /**
     * @param DecimalValue $OrderTotal
     * @return PurchaseOrder
     */
    public function setOrderTotal($OrderTotal)
    {
      $this->OrderTotal = $OrderTotal;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getOwner()
    {
      return $this->Owner;
    }

    /**
     * @param StringValue $Owner
     * @return PurchaseOrder
     */
    public function setOwner($Owner)
    {
      $this->Owner = $Owner;
      return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getPromisedOn()
    {
      return $this->PromisedOn;
    }

    /**
     * @param DateTimeValue $PromisedOn
     * @return PurchaseOrder
     */
    public function setPromisedOn($PromisedOn)
    {
      $this->PromisedOn = $PromisedOn;
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
     * @return PurchaseOrder
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getTaxTotal()
    {
      return $this->TaxTotal;
    }

    /**
     * @param DecimalValue $TaxTotal
     * @return PurchaseOrder
     */
    public function setTaxTotal($TaxTotal)
    {
      $this->TaxTotal = $TaxTotal;
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
     * @return PurchaseOrder
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getVendor()
    {
      return $this->Vendor;
    }

    /**
     * @param StringValue $Vendor
     * @return PurchaseOrder
     */
    public function setVendor($Vendor)
    {
      $this->Vendor = $Vendor;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getVendorRef()
    {
      return $this->VendorRef;
    }

    /**
     * @param StringValue $VendorRef
     * @return PurchaseOrder
     */
    public function setVendorRef($VendorRef)
    {
      $this->VendorRef = $VendorRef;
      return $this;
    }

}
