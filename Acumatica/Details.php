<?php

class Details
{

    /**
     * @var SalesInvoiceDetail $SalesInvoiceDetail
     */
    protected $SalesInvoiceDetail = null;

    /**
     * @param SalesInvoiceDetail $SalesInvoiceDetail
     */
    public function __construct($SalesInvoiceDetail)
    {
      $this->SalesInvoiceDetail = $SalesInvoiceDetail;
    }

    /**
     * @return SalesInvoiceDetail
     */
    public function getSalesInvoiceDetail()
    {
      return $this->SalesInvoiceDetail;
    }

    /**
     * @param SalesInvoiceDetail $SalesInvoiceDetail
     * @return Details
     */
    public function setSalesInvoiceDetail($SalesInvoiceDetail)
    {
      $this->SalesInvoiceDetail = $SalesInvoiceDetail;
      return $this;
    }

}
