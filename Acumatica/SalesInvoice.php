<?php

class SalesInvoice extends Entity
{

    /**
     * @var DecimalValue $Amount
     */
    protected $Amount = null;

    /**
     * @var DecimalValue $Balance
     */
    protected $Balance = null;

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
     * @var Details $Details
     */
    protected $Details = null;

    /**
     * @var DateTimeValue $DueDate
     */
    protected $DueDate = null;

    /**
     * @var BooleanValue $Hold
     */
    protected $Hold = null;

    /**
     * @var StringValue $ReferenceNbr
     */
    protected $ReferenceNbr = null;

    /**
     * @var StringValue $Status
     */
    protected $Status = null;

    /**
     * @var StringValue $Type
     */
    protected $Type = null;

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
     * @return SalesInvoice
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getBalance()
    {
      return $this->Balance;
    }

    /**
     * @param DecimalValue $Balance
     * @return SalesInvoice
     */
    public function setBalance($Balance)
    {
      $this->Balance = $Balance;
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
     * @return SalesInvoice
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
     * @return SalesInvoice
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
     * @return SalesInvoice
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
     * @return SalesInvoice
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
     * @return SalesInvoice
     */
    public function setDetails($Details)
    {
      $this->Details = $Details;
      return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getDueDate()
    {
      return $this->DueDate;
    }

    /**
     * @param DateTimeValue $DueDate
     * @return SalesInvoice
     */
    public function setDueDate($DueDate)
    {
      $this->DueDate = $DueDate;
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
     * @return SalesInvoice
     */
    public function setHold($Hold)
    {
      $this->Hold = $Hold;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getReferenceNbr()
    {
      return $this->ReferenceNbr;
    }

    /**
     * @param StringValue $ReferenceNbr
     * @return SalesInvoice
     */
    public function setReferenceNbr($ReferenceNbr)
    {
      $this->ReferenceNbr = $ReferenceNbr;
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
     * @return SalesInvoice
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return SalesInvoice
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
