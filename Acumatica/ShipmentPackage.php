<?php

class ShipmentPackage extends Entity
{

    /**
     * @var StringValue $BoxID
     */
    protected $BoxID = null;

    /**
     * @var DecimalValue $CODAmount
     */
    protected $CODAmount = null;

    /**
     * @var BooleanValue $Confirmed
     */
    protected $Confirmed = null;

    /**
     * @var StringValue $CustomRefNbr1
     */
    protected $CustomRefNbr1 = null;

    /**
     * @var StringValue $CustomRefNbr2
     */
    protected $CustomRefNbr2 = null;

    /**
     * @var DecimalValue $DeclaredValue
     */
    protected $DeclaredValue = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var StringValue $TrackingNumber
     */
    protected $TrackingNumber = null;

    /**
     * @var StringValue $Type
     */
    protected $Type = null;

    /**
     * @var StringValue $UOM
     */
    protected $UOM = null;

    /**
     * @var DecimalValue $Weight
     */
    protected $Weight = null;

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
    public function getBoxID()
    {
      return $this->BoxID;
    }

    /**
     * @param StringValue $BoxID
     * @return ShipmentPackage
     */
    public function setBoxID($BoxID)
    {
      $this->BoxID = $BoxID;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getCODAmount()
    {
      return $this->CODAmount;
    }

    /**
     * @param DecimalValue $CODAmount
     * @return ShipmentPackage
     */
    public function setCODAmount($CODAmount)
    {
      $this->CODAmount = $CODAmount;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getConfirmed()
    {
      return $this->Confirmed;
    }

    /**
     * @param BooleanValue $Confirmed
     * @return ShipmentPackage
     */
    public function setConfirmed($Confirmed)
    {
      $this->Confirmed = $Confirmed;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getCustomRefNbr1()
    {
      return $this->CustomRefNbr1;
    }

    /**
     * @param StringValue $CustomRefNbr1
     * @return ShipmentPackage
     */
    public function setCustomRefNbr1($CustomRefNbr1)
    {
      $this->CustomRefNbr1 = $CustomRefNbr1;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getCustomRefNbr2()
    {
      return $this->CustomRefNbr2;
    }

    /**
     * @param StringValue $CustomRefNbr2
     * @return ShipmentPackage
     */
    public function setCustomRefNbr2($CustomRefNbr2)
    {
      $this->CustomRefNbr2 = $CustomRefNbr2;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getDeclaredValue()
    {
      return $this->DeclaredValue;
    }

    /**
     * @param DecimalValue $DeclaredValue
     * @return ShipmentPackage
     */
    public function setDeclaredValue($DeclaredValue)
    {
      $this->DeclaredValue = $DeclaredValue;
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
     * @return ShipmentPackage
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getTrackingNumber()
    {
      return $this->TrackingNumber;
    }

    /**
     * @param StringValue $TrackingNumber
     * @return ShipmentPackage
     */
    public function setTrackingNumber($TrackingNumber)
    {
      $this->TrackingNumber = $TrackingNumber;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param StringValue $Type
     * @return ShipmentPackage
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getUOM()
    {
      return $this->UOM;
    }

    /**
     * @param StringValue $UOM
     * @return ShipmentPackage
     */
    public function setUOM($UOM)
    {
      $this->UOM = $UOM;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param DecimalValue $Weight
     * @return ShipmentPackage
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

}
