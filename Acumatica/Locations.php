<?php

class Locations
{

    /**
     * @var WarehouseLocation $WarehouseLocation
     */
    protected $WarehouseLocation = null;

    /**
     * @param WarehouseLocation $WarehouseLocation
     */
    public function __construct($WarehouseLocation)
    {
      $this->WarehouseLocation = $WarehouseLocation;
    }

    /**
     * @return WarehouseLocation
     */
    public function getWarehouseLocation()
    {
      return $this->WarehouseLocation;
    }

    /**
     * @param WarehouseLocation $WarehouseLocation
     * @return Locations
     */
    public function setWarehouseLocation($WarehouseLocation)
    {
      $this->WarehouseLocation = $WarehouseLocation;
      return $this;
    }

}
