<?php

class CustomerPaymentMethod extends Entity
{

    /**
     * @var BooleanValue $Active
     */
    protected $Active = null;

    /**
     * @var StringValue $CardAccountNo
     */
    protected $CardAccountNo = null;

    /**
     * @var StringValue $CashAccount
     */
    protected $CashAccount = null;

    /**
     * @var StringValue $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var Details $Details
     */
    protected $Details = null;

    /**
     * @var IntValue $InstanceID
     */
    protected $InstanceID = null;

    /**
     * @var StringValue $PaymentMethod
     */
    protected $PaymentMethod = null;

    /**
     * @var StringValue $ProcCenterID
     */
    protected $ProcCenterID = null;

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
     * @return CustomerPaymentMethod
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getCardAccountNo()
    {
      return $this->CardAccountNo;
    }

    /**
     * @param StringValue $CardAccountNo
     * @return CustomerPaymentMethod
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
     * @return CustomerPaymentMethod
     */
    public function setCashAccount($CashAccount)
    {
      $this->CashAccount = $CashAccount;
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
     * @return CustomerPaymentMethod
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
     * @return CustomerPaymentMethod
     */
    public function setDetails($Details)
    {
      $this->Details = $Details;
      return $this;
    }

    /**
     * @return IntValue
     */
    public function getInstanceID()
    {
      return $this->InstanceID;
    }

    /**
     * @param IntValue $InstanceID
     * @return CustomerPaymentMethod
     */
    public function setInstanceID($InstanceID)
    {
      $this->InstanceID = $InstanceID;
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
     * @return CustomerPaymentMethod
     */
    public function setPaymentMethod($PaymentMethod)
    {
      $this->PaymentMethod = $PaymentMethod;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getProcCenterID()
    {
      return $this->ProcCenterID;
    }

    /**
     * @param StringValue $ProcCenterID
     * @return CustomerPaymentMethod
     */
    public function setProcCenterID($ProcCenterID)
    {
      $this->ProcCenterID = $ProcCenterID;
      return $this;
    }

}
