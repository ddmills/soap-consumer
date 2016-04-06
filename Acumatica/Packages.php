<?php

class Packages
{

    /**
     * @var ShipmentPackage $ShipmentPackage
     */
    protected $ShipmentPackage = null;

    /**
     * @param ShipmentPackage $ShipmentPackage
     */
    public function __construct($ShipmentPackage)
    {
      $this->ShipmentPackage = $ShipmentPackage;
    }

    /**
     * @return ShipmentPackage
     */
    public function getShipmentPackage()
    {
      return $this->ShipmentPackage;
    }

    /**
     * @param ShipmentPackage $ShipmentPackage
     * @return Packages
     */
    public function setShipmentPackage($ShipmentPackage)
    {
      $this->ShipmentPackage = $ShipmentPackage;
      return $this;
    }

}
