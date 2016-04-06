<?php

class CreditCardProcessingInfo
{

    /**
     * @var CreditCardProcessingDetail $CreditCardProcessingDetail
     */
    protected $CreditCardProcessingDetail = null;

    /**
     * @param CreditCardProcessingDetail $CreditCardProcessingDetail
     */
    public function __construct($CreditCardProcessingDetail)
    {
      $this->CreditCardProcessingDetail = $CreditCardProcessingDetail;
    }

    /**
     * @return CreditCardProcessingDetail
     */
    public function getCreditCardProcessingDetail()
    {
      return $this->CreditCardProcessingDetail;
    }

    /**
     * @param CreditCardProcessingDetail $CreditCardProcessingDetail
     * @return CreditCardProcessingInfo
     */
    public function setCreditCardProcessingDetail($CreditCardProcessingDetail)
    {
      $this->CreditCardProcessingDetail = $CreditCardProcessingDetail;
      return $this;
    }

}
