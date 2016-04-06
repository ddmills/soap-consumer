<?php

class Shipments
{

    /**
     * @var SalesOrderShipment $SalesOrderShipment
     */
    protected $SalesOrderShipment = null;

    /**
     * @param SalesOrderShipment $SalesOrderShipment
     */
    public function __construct($SalesOrderShipment)
    {
      $this->SalesOrderShipment = $SalesOrderShipment;
    }

    /**
     * @return SalesOrderShipment
     */
    public function getSalesOrderShipment()
    {
      return $this->SalesOrderShipment;
    }

    /**
     * @param SalesOrderShipment $SalesOrderShipment
     * @return Shipments
     */
    public function setSalesOrderShipment($SalesOrderShipment)
    {
      $this->SalesOrderShipment = $SalesOrderShipment;
      return $this;
    }

}
