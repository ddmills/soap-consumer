<?php

class CreditCardProcessingDetail extends Entity
{

    /**
     * @var DecimalValue $TranAmount
     */
    protected $TranAmount = null;

    /**
     * @var StringValue $TranStatus
     */
    protected $TranStatus = null;

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
    public function getTranAmount()
    {
      return $this->TranAmount;
    }

    /**
     * @param DecimalValue $TranAmount
     * @return CreditCardProcessingDetail
     */
    public function setTranAmount($TranAmount)
    {
      $this->TranAmount = $TranAmount;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getTranStatus()
    {
      return $this->TranStatus;
    }

    /**
     * @param StringValue $TranStatus
     * @return CreditCardProcessingDetail
     */
    public function setTranStatus($TranStatus)
    {
      $this->TranStatus = $TranStatus;
      return $this;
    }

}
