<?php

class PurchaseReceipt extends Entity
{

    /**
     * @var DecimalValue $ControlAmt
     */
    protected $ControlAmt = null;

    /**
     * @var DecimalValue $ControlQty
     */
    protected $ControlQty = null;

    /**
     * @var StringValue $Currency
     */
    protected $Currency = null;

    /**
     * @var DateTimeValue $Date
     */
    protected $Date = null;

    /**
     * @var Details $Details
     */
    protected $Details = null;

    /**
     * @var BooleanValue $Hold
     */
    protected $Hold = null;

    /**
     * @var StringValue $PostPeriod
     */
    protected $PostPeriod = null;

    /**
     * @var StringValue $ReceiptNbr
     */
    protected $ReceiptNbr = null;

    /**
     * @var StringValue $Status
     */
    protected $Status = null;

    /**
     * @var DecimalValue $TotalAmt
     */
    protected $TotalAmt = null;

    /**
     * @var DecimalValue $TotalQty
     */
    protected $TotalQty = null;

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
    public function getControlAmt()
    {
      return $this->ControlAmt;
    }

    /**
     * @param DecimalValue $ControlAmt
     * @return PurchaseReceipt
     */
    public function setControlAmt($ControlAmt)
    {
      $this->ControlAmt = $ControlAmt;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getControlQty()
    {
      return $this->ControlQty;
    }

    /**
     * @param DecimalValue $ControlQty
     * @return PurchaseReceipt
     */
    public function setControlQty($ControlQty)
    {
      $this->ControlQty = $ControlQty;
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
     * @return PurchaseReceipt
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
     * @return PurchaseReceipt
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
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
     * @return PurchaseReceipt
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
     * @return PurchaseReceipt
     */
    public function setHold($Hold)
    {
      $this->Hold = $Hold;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPostPeriod()
    {
      return $this->PostPeriod;
    }

    /**
     * @param StringValue $PostPeriod
     * @return PurchaseReceipt
     */
    public function setPostPeriod($PostPeriod)
    {
      $this->PostPeriod = $PostPeriod;
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
     * @return PurchaseReceipt
     */
    public function setReceiptNbr($ReceiptNbr)
    {
      $this->ReceiptNbr = $ReceiptNbr;
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
     * @return PurchaseReceipt
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getTotalAmt()
    {
      return $this->TotalAmt;
    }

    /**
     * @param DecimalValue $TotalAmt
     * @return PurchaseReceipt
     */
    public function setTotalAmt($TotalAmt)
    {
      $this->TotalAmt = $TotalAmt;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getTotalQty()
    {
      return $this->TotalQty;
    }

    /**
     * @param DecimalValue $TotalQty
     * @return PurchaseReceipt
     */
    public function setTotalQty($TotalQty)
    {
      $this->TotalQty = $TotalQty;
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
     * @return PurchaseReceipt
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
     * @return PurchaseReceipt
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
     * @return PurchaseReceipt
     */
    public function setVendorRef($VendorRef)
    {
      $this->VendorRef = $VendorRef;
      return $this;
    }

}
