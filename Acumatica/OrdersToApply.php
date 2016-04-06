<?php

class OrdersToApply
{

    /**
     * @var PaymentOrder $PaymentOrder
     */
    protected $PaymentOrder = null;

    /**
     * @param PaymentOrder $PaymentOrder
     */
    public function __construct($PaymentOrder)
    {
      $this->PaymentOrder = $PaymentOrder;
    }

    /**
     * @return PaymentOrder
     */
    public function getPaymentOrder()
    {
      return $this->PaymentOrder;
    }

    /**
     * @param PaymentOrder $PaymentOrder
     * @return OrdersToApply
     */
    public function setPaymentOrder($PaymentOrder)
    {
      $this->PaymentOrder = $PaymentOrder;
      return $this;
    }

}
