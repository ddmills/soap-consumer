<?php

class ShipVia extends Entity
{

    /**
     * @var StringValue $CarrierID
     */
    protected $CarrierID = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var Packages $Packages
     */
    protected $Packages = null;

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
    public function getCarrierID()
    {
      return $this->CarrierID;
    }

    /**
     * @param StringValue $CarrierID
     * @return ShipVia
     */
    public function setCarrierID($CarrierID)
    {
      $this->CarrierID = $CarrierID;
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
     * @return ShipVia
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return Packages
     */
    public function getPackages()
    {
      return $this->Packages;
    }

    /**
     * @param Packages $Packages
     * @return ShipVia
     */
    public function setPackages($Packages)
    {
      $this->Packages = $Packages;
      return $this;
    }

}
