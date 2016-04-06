<?php

class PaymentOrder extends Entity
{

    /**
     * @var DecimalValue $AppliedToOrder
     */
    protected $AppliedToOrder = null;

    /**
     * @var StringValue $OrderNbr
     */
    protected $OrderNbr = null;

    /**
     * @var StringValue $OrderType
     */
    protected $OrderType = null;

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
    public function getAppliedToOrder()
    {
      return $this->AppliedToOrder;
    }

    /**
     * @param DecimalValue $AppliedToOrder
     * @return PaymentOrder
     */
    public function setAppliedToOrder($AppliedToOrder)
    {
      $this->AppliedToOrder = $AppliedToOrder;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getOrderNbr()
    {
      return $this->OrderNbr;
    }

    /**
     * @param StringValue $OrderNbr
     * @return PaymentOrder
     */
    public function setOrderNbr($OrderNbr)
    {
      $this->OrderNbr = $OrderNbr;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getOrderType()
    {
      return $this->OrderType;
    }

    /**
     * @param StringValue $OrderType
     * @return PaymentOrder
     */
    public function setOrderType($OrderType)
    {
      $this->OrderType = $OrderType;
      return $this;
    }

}
