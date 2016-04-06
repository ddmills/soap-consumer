<?php

class JournalTransactionDetail extends Entity
{

    /**
     * @var StringValue $Account
     */
    protected $Account = null;

    /**
     * @var StringValue $BranchID
     */
    protected $BranchID = null;

    /**
     * @var DecimalValue $CreditAmount
     */
    protected $CreditAmount = null;

    /**
     * @var StringValue $CustomerVendor
     */
    protected $CustomerVendor = null;

    /**
     * @var DecimalValue $DebitAmount
     */
    protected $DebitAmount = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var IntValue $LineNbr
     */
    protected $LineNbr = null;

    /**
     * @var StringValue $ProjectID
     */
    protected $ProjectID = null;

    /**
     * @var StringValue $ProjectTask
     */
    protected $ProjectTask = null;

    /**
     * @var DecimalValue $Quantity
     */
    protected $Quantity = null;

    /**
     * @var StringValue $RefNumber
     */
    protected $RefNumber = null;

    /**
     * @var StringValue $Subaccount
     */
    protected $Subaccount = null;

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
     * @return StringValue
     */
    public function getAccount()
    {
      return $this->Account;
    }

    /**
     * @param StringValue $Account
     * @return JournalTransactionDetail
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getBranchID()
    {
      return $this->BranchID;
    }

    /**
     * @param StringValue $BranchID
     * @return JournalTransactionDetail
     */
    public function setBranchID($BranchID)
    {
      $this->BranchID = $BranchID;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getCreditAmount()
    {
      return $this->CreditAmount;
    }

    /**
     * @param DecimalValue $CreditAmount
     * @return JournalTransactionDetail
     */
    public function setCreditAmount($CreditAmount)
    {
      $this->CreditAmount = $CreditAmount;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getCustomerVendor()
    {
      return $this->CustomerVendor;
    }

    /**
     * @param StringValue $CustomerVendor
     * @return JournalTransactionDetail
     */
    public function setCustomerVendor($CustomerVendor)
    {
      $this->CustomerVendor = $CustomerVendor;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getDebitAmount()
    {
      return $this->DebitAmount;
    }

    /**
     * @param DecimalValue $DebitAmount
     * @return JournalTransactionDetail
     */
    public function setDebitAmount($DebitAmount)
    {
      $this->DebitAmount = $DebitAmount;
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
     * @return JournalTransactionDetail
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return IntValue
     */
    public function getLineNbr()
    {
      return $this->LineNbr;
    }

    /**
     * @param IntValue $LineNbr
     * @return JournalTransactionDetail
     */
    public function setLineNbr($LineNbr)
    {
      $this->LineNbr = $LineNbr;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getProjectID()
    {
      return $this->ProjectID;
    }

    /**
     * @param StringValue $ProjectID
     * @return JournalTransactionDetail
     */
    public function setProjectID($ProjectID)
    {
      $this->ProjectID = $ProjectID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getProjectTask()
    {
      return $this->ProjectTask;
    }

    /**
     * @param StringValue $ProjectTask
     * @return JournalTransactionDetail
     */
    public function setProjectTask($ProjectTask)
    {
      $this->ProjectTask = $ProjectTask;
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
     * @return JournalTransactionDetail
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getRefNumber()
    {
      return $this->RefNumber;
    }

    /**
     * @param StringValue $RefNumber
     * @return JournalTransactionDetail
     */
    public function setRefNumber($RefNumber)
    {
      $this->RefNumber = $RefNumber;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getSubaccount()
    {
      return $this->Subaccount;
    }

    /**
     * @param StringValue $Subaccount
     * @return JournalTransactionDetail
     */
    public function setSubaccount($Subaccount)
    {
      $this->Subaccount = $Subaccount;
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
     * @return JournalTransactionDetail
     */
    public function setUOM($UOM)
    {
      $this->UOM = $UOM;
      return $this;
    }

}
