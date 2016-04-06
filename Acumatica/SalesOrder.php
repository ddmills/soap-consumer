<?php

class SalesOrder extends Entity
{

    /**
     * @var BooleanValue $BillingAddressOverride
     */
    protected $BillingAddressOverride = null;

    /**
     * @var Contact $BillingContact
     */
    protected $BillingContact = null;

    /**
     * @var BooleanValue $BillingContactOverride
     */
    protected $BillingContactOverride = null;

    /**
     * @var BooleanValue $CreditHold
     */
    protected $CreditHold = null;

    /**
     * @var StringValue $Currency
     */
    protected $Currency = null;

    /**
     * @var StringValue $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var StringValue $CustomerOrder
     */
    protected $CustomerOrder = null;

    /**
     * @var DateTimeValue $Date
     */
    protected $Date = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var StringValue $DestinationWarehouseID
     */
    protected $DestinationWarehouseID = null;

    /**
     * @var Details $Details
     */
    protected $Details = null;

    /**
     * @var StringValue $ExternalReference
     */
    protected $ExternalReference = null;

    /**
     * @var BooleanValue $Hold
     */
    protected $Hold = null;

    /**
     * @var BooleanValue $IsTaxValid
     */
    protected $IsTaxValid = null;

    /**
     * @var DateTimeValue $LastModified
     */
    protected $LastModified = null;

    /**
     * @var StringValue $LocationID
     */
    protected $LocationID = null;

    /**
     * @var BooleanValue $NewCard
     */
    protected $NewCard = null;

    /**
     * @var DecimalValue $OrderedQty
     */
    protected $OrderedQty = null;

    /**
     * @var StringValue $OrderNbr
     */
    protected $OrderNbr = null;

    /**
     * @var DecimalValue $OrderTotal
     */
    protected $OrderTotal = null;

    /**
     * @var StringValue $OrderType
     */
    protected $OrderType = null;

    /**
     * @var StringValue $PaymentCardIdentifier
     */
    protected $PaymentCardIdentifier = null;

    /**
     * @var StringValue $PaymentMethod
     */
    protected $PaymentMethod = null;

    /**
     * @var StringValue $PaymentRef
     */
    protected $PaymentRef = null;

    /**
     * @var StringValue $PreferredWarehouseID
     */
    protected $PreferredWarehouseID = null;

    /**
     * @var StringValue $Project
     */
    protected $Project = null;

    /**
     * @var DateTimeValue $RequestedOn
     */
    protected $RequestedOn = null;

    /**
     * @var Shipments $Shipments
     */
    protected $Shipments = null;

    /**
     * @var BooleanValue $ShippingAddressOverride
     */
    protected $ShippingAddressOverride = null;

    /**
     * @var Contact $ShippingContact
     */
    protected $ShippingContact = null;

    /**
     * @var BooleanValue $ShippingContactOverride
     */
    protected $ShippingContactOverride = null;

    /**
     * @var StringValue $ShipVia
     */
    protected $ShipVia = null;

    /**
     * @var StringValue $Status
     */
    protected $Status = null;

    /**
     * @var DecimalValue $TaxTotal
     */
    protected $TaxTotal = null;

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
    public function getBillingAddressOverride()
    {
      return $this->BillingAddressOverride;
    }

    /**
     * @param BooleanValue $BillingAddressOverride
     * @return SalesOrder
     */
    public function setBillingAddressOverride($BillingAddressOverride)
    {
      $this->BillingAddressOverride = $BillingAddressOverride;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getBillingContact()
    {
      return $this->BillingContact;
    }

    /**
     * @param Contact $BillingContact
     * @return SalesOrder
     */
    public function setBillingContact($BillingContact)
    {
      $this->BillingContact = $BillingContact;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getBillingContactOverride()
    {
      return $this->BillingContactOverride;
    }

    /**
     * @param BooleanValue $BillingContactOverride
     * @return SalesOrder
     */
    public function setBillingContactOverride($BillingContactOverride)
    {
      $this->BillingContactOverride = $BillingContactOverride;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getCreditHold()
    {
      return $this->CreditHold;
    }

    /**
     * @param BooleanValue $CreditHold
     * @return SalesOrder
     */
    public function setCreditHold($CreditHold)
    {
      $this->CreditHold = $CreditHold;
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
     * @return SalesOrder
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
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
     * @return SalesOrder
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getCustomerOrder()
    {
      return $this->CustomerOrder;
    }

    /**
     * @param StringValue $CustomerOrder
     * @return SalesOrder
     */
    public function setCustomerOrder($CustomerOrder)
    {
      $this->CustomerOrder = $CustomerOrder;
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
     * @return SalesOrder
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
     * @return SalesOrder
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getDestinationWarehouseID()
    {
      return $this->DestinationWarehouseID;
    }

    /**
     * @param StringValue $DestinationWarehouseID
     * @return SalesOrder
     */
    public function setDestinationWarehouseID($DestinationWarehouseID)
    {
      $this->DestinationWarehouseID = $DestinationWarehouseID;
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
     * @return SalesOrder
     */
    public function setDetails($Details)
    {
      $this->Details = $Details;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getExternalReference()
    {
      return $this->ExternalReference;
    }

    /**
     * @param StringValue $ExternalReference
     * @return SalesOrder
     */
    public function setExternalReference($ExternalReference)
    {
      $this->ExternalReference = $ExternalReference;
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
     * @return SalesOrder
     */
    public function setHold($Hold)
    {
      $this->Hold = $Hold;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getIsTaxValid()
    {
      return $this->IsTaxValid;
    }

    /**
     * @param BooleanValue $IsTaxValid
     * @return SalesOrder
     */
    public function setIsTaxValid($IsTaxValid)
    {
      $this->IsTaxValid = $IsTaxValid;
      return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getLastModified()
    {
      return $this->LastModified;
    }

    /**
     * @param DateTimeValue $LastModified
     * @return SalesOrder
     */
    public function setLastModified($LastModified)
    {
      $this->LastModified = $LastModified;
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
     * @return SalesOrder
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getNewCard()
    {
      return $this->NewCard;
    }

    /**
     * @param BooleanValue $NewCard
     * @return SalesOrder
     */
    public function setNewCard($NewCard)
    {
      $this->NewCard = $NewCard;
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
     * @return SalesOrder
     */
    public function setOrderedQty($OrderedQty)
    {
      $this->OrderedQty = $OrderedQty;
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
     * @return SalesOrder
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
     * @return SalesOrder
     */
    public function setOrderTotal($OrderTotal)
    {
      $this->OrderTotal = $OrderTotal;
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
     * @return SalesOrder
     */
    public function setOrderType($OrderType)
    {
      $this->OrderType = $OrderType;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPaymentCardIdentifier()
    {
      return $this->PaymentCardIdentifier;
    }

    /**
     * @param StringValue $PaymentCardIdentifier
     * @return SalesOrder
     */
    public function setPaymentCardIdentifier($PaymentCardIdentifier)
    {
      $this->PaymentCardIdentifier = $PaymentCardIdentifier;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPaymentMethod()
    {
      return $this->PaymentMethod;
    }

    /**
     * @param StringValue $PaymentMethod
     * @return SalesOrder
     */
    public function setPaymentMethod($PaymentMethod)
    {
      $this->PaymentMethod = $PaymentMethod;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPaymentRef()
    {
      return $this->PaymentRef;
    }

    /**
     * @param StringValue $PaymentRef
     * @return SalesOrder
     */
    public function setPaymentRef($PaymentRef)
    {
      $this->PaymentRef = $PaymentRef;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPreferredWarehouseID()
    {
      return $this->PreferredWarehouseID;
    }

    /**
     * @param StringValue $PreferredWarehouseID
     * @return SalesOrder
     */
    public function setPreferredWarehouseID($PreferredWarehouseID)
    {
      $this->PreferredWarehouseID = $PreferredWarehouseID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getProject()
    {
      return $this->Project;
    }

    /**
     * @param StringValue $Project
     * @return SalesOrder
     */
    public function setProject($Project)
    {
      $this->Project = $Project;
      return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getRequestedOn()
    {
      return $this->RequestedOn;
    }

    /**
     * @param DateTimeValue $RequestedOn
     * @return SalesOrder
     */
    public function setRequestedOn($RequestedOn)
    {
      $this->RequestedOn = $RequestedOn;
      return $this;
    }

    /**
     * @return Shipments
     */
    public function getShipments()
    {
      return $this->Shipments;
    }

    /**
     * @param Shipments $Shipments
     * @return SalesOrder
     */
    public function setShipments($Shipments)
    {
      $this->Shipments = $Shipments;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getShippingAddressOverride()
    {
      return $this->ShippingAddressOverride;
    }

    /**
     * @param BooleanValue $ShippingAddressOverride
     * @return SalesOrder
     */
    public function setShippingAddressOverride($ShippingAddressOverride)
    {
      $this->ShippingAddressOverride = $ShippingAddressOverride;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getShippingContact()
    {
      return $this->ShippingContact;
    }

    /**
     * @param Contact $ShippingContact
     * @return SalesOrder
     */
    public function setShippingContact($ShippingContact)
    {
      $this->ShippingContact = $ShippingContact;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getShippingContactOverride()
    {
      return $this->ShippingContactOverride;
    }

    /**
     * @param BooleanValue $ShippingContactOverride
     * @return SalesOrder
     */
    public function setShippingContactOverride($ShippingContactOverride)
    {
      $this->ShippingContactOverride = $ShippingContactOverride;
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
     * @return SalesOrder
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
     * @return SalesOrder
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
     * @return SalesOrder
     */
    public function setTaxTotal($TaxTotal)
    {
      $this->TaxTotal = $TaxTotal;
      return $this;
    }

}
