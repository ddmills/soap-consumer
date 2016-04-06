<?php

class DocumentsToApply
{

    /**
     * @var PaymentDetail $PaymentDetail
     */
    protected $PaymentDetail = null;

    /**
     * @param PaymentDetail $PaymentDetail
     */
    public function __construct($PaymentDetail)
    {
      $this->PaymentDetail = $PaymentDetail;
    }

    /**
     * @return PaymentDetail
     */
    public function getPaymentDetail()
    {
      return $this->PaymentDetail;
    }

    /**
     * @param PaymentDetail $PaymentDetail
     * @return DocumentsToApply
     */
    public function setPaymentDetail($PaymentDetail)
    {
      $this->PaymentDetail = $PaymentDetail;
      return $this;
    }

}
