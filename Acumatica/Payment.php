<?php

class Payment extends Entity
{

    /**
     * @var DateTimeValue $ApplicationDate
     */
    protected $ApplicationDate = null;

    /**
     * @var DecimalValue $AppliedToDocuments
     */
    protected $AppliedToDocuments = null;

    /**
     * @var IntValue $CardAccountNo
     */
    protected $CardAccountNo = null;

    /**
     * @var StringValue $CashAccount
     */
    protected $CashAccount = null;

    /**
     * @var CreditCardProcessingInfo $CreditCardProcessingInfo
     */
    protected $CreditCardProcessingInfo = null;

    /**
     * @var StringValue $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var DocumentsToApply $DocumentsToApply
     */
    protected $DocumentsToApply = null;

    /**
     * @var BooleanValue $Hold
     */
    protected $Hold = null;

    /**
     * @var OrdersToApply $OrdersToApply
     */
    protected $OrdersToApply = null;

    /**
     * @var DecimalValue $PaymentAmount
     */
    protected $PaymentAmount = null;

    /**
     * @var StringValue $PaymentMethod
     */
    protected $PaymentMethod = null;

    /**
     * @var StringValue $PaymentRef
     */
    protected $PaymentRef = null;

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
     * @return DateTimeValue
     */
    public function getApplicationDate()
    {
      return $this->ApplicationDate;
    }

    /**
     * @param DateTimeValue $ApplicationDate
     * @return Payment
     */
    public function setApplicationDate($ApplicationDate)
    {
      $this->ApplicationDate = $ApplicationDate;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getAppliedToDocuments()
    {
      return $this->AppliedToDocuments;
    }

    /**
     * @param DecimalValue $AppliedToDocuments
     * @return Payment
     */
    public function setAppliedToDocuments($AppliedToDocuments)
    {
      $this->AppliedToDocuments = $AppliedToDocuments;
      return $this;
    }

    /**
     * @return IntValue
     */
    public function getCardAccountNo()
    {
      return $this->CardAccountNo;
    }

    /**
     * @param IntValue $CardAccountNo
     * @return Payment
     */
    public function setCardAccountNo($CardAccountNo)
    {
      $this->CardAccountNo = $CardAccountNo;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getCashAccount()
    {
      return $this->CashAccount;
    }

    /**
     * @param StringValue $CashAccount
     * @return Payment
     */
    public function setCashAccount($CashAccount)
    {
      $this->CashAccount = $CashAccount;
      return $this;
    }

    /**
     * @return CreditCardProcessingInfo
     */
    public function getCreditCardProcessingInfo()
    {
      return $this->CreditCardProcessingInfo;
    }

    /**
     * @param CreditCardProcessingInfo $CreditCardProcessingInfo
     * @return Payment
     */
    public function setCreditCardProcessingInfo($CreditCardProcessingInfo)
    {
      $this->CreditCardProcessingInfo = $CreditCardProcessingInfo;
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
     * @return Payment
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
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
     * @return Payment
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return DocumentsToApply
     */
    public function getDocumentsToApply()
    {
      return $this->DocumentsToApply;
    }

    /**
     * @param DocumentsToApply $DocumentsToApply
     * @return Payment
     */
    public function setDocumentsToApply($DocumentsToApply)
    {
      $this->DocumentsToApply = $DocumentsToApply;
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
     * @return Payment
     */
    public function setHold($Hold)
    {
      $this->Hold = $Hold;
      return $this;
    }

    /**
     * @return OrdersToApply
     */
    public function getOrdersToApply()
    {
      return $this->OrdersToApply;
    }

    /**
     * @param OrdersToApply $OrdersToApply
     * @return Payment
     */
    public function setOrdersToApply($OrdersToApply)
    {
      $this->OrdersToApply = $OrdersToApply;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getPaymentAmount()
    {
      return $this->PaymentAmount;
    }

    /**
     * @param DecimalValue $PaymentAmount
     * @return Payment
     */
    public function setPaymentAmount($PaymentAmount)
    {
      $this->PaymentAmount = $PaymentAmount;
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
     * @return Payment
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
     * @return Payment
     */
    public function setPaymentRef($PaymentRef)
    {
      $this->PaymentRef = $PaymentRef;
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
