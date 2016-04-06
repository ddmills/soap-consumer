<?php

class JournalTransaction extends Entity
{

    /**
     * @var StringValue $BatchNumber
     */
    protected $BatchNumber = null;

    /**
     * @var StringValue $BranchID
     */
    protected $BranchID = null;

    /**
     * @var StringValue $Currency
     */
    protected $Currency = null;

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
     * @var StringValue $LedgerID
     */
    protected $LedgerID = null;

    /**
     * @var StringValue $Module
     */
    protected $Module = null;

    /**
     * @var StringValue $PostPeriod
     */
    protected $PostPeriod = null;

    /**
     * @var StringValue $Status
     */
    protected $Status = null;

    /**
     * @var DateTimeValue $TransactionDate
     */
    protected $TransactionDate = null;

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
    public function getBatchNumber()
    {
      return $this->BatchNumber;
    }

    /**
     * @param StringValue $BatchNumber
     * @return JournalTransaction
     */
    public function setBatchNumber($BatchNumber)
    {
      $this->BatchNumber = $BatchNumber;
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
     * @return JournalTransaction
     */
    public function setBranchID($BranchID)
    {
      $this->BranchID = $BranchID;
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
     * @return JournalTransaction
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
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
     * @return JournalTransaction
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
     * @return JournalTransaction
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
     * @return JournalTransaction
     */
    public function setHold($Hold)
    {
      $this->Hold = $Hold;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getLedgerID()
    {
      return $this->LedgerID;
    }

    /**
     * @param StringValue $LedgerID
     * @return JournalTransaction
     */
    public function setLedgerID($LedgerID)
    {
      $this->LedgerID = $LedgerID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getModule()
    {
      return $this->Module;
    }

    /**
     * @param StringValue $Module
     * @return JournalTransaction
     */
    public function setModule($Module)
    {
      $this->Module = $Module;
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
     * @return JournalTransaction
     */
    public function setPostPeriod($PostPeriod)
    {
      $this->PostPeriod = $PostPeriod;
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
     * @return JournalTransaction
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getTransactionDate()
    {
      return $this->TransactionDate;
    }

    /**
     * @param DateTimeValue $TransactionDate
     * @return JournalTransaction
     */
    public function setTransactionDate($TransactionDate)
    {
      $this->TransactionDate = $TransactionDate;
      return $this;
    }

}
