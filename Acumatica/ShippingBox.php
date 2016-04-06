<?php

class ShippingBox extends Entity
{

    /**
     * @var BooleanValue $ActiveByDefault
     */
    protected $ActiveByDefault = null;

    /**
     * @var StringValue $BoxID
     */
    protected $BoxID = null;

    /**
     * @var DecimalValue $BoxWeight
     */
    protected $BoxWeight = null;

    /**
     * @var StringValue $CarriersPackage
     */
    protected $CarriersPackage = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var IntValue $Height
     */
    protected $Height = null;

    /**
     * @var IntValue $Length
     */
    protected $Length = null;

    /**
     * @var DecimalValue $MaxVolume
     */
    protected $MaxVolume = null;

    /**
     * @var DecimalValue $MaxWeight
     */
    protected $MaxWeight = null;

    /**
     * @var StringValue $VolumeUOM
     */
    protected $VolumeUOM = null;

    /**
     * @var StringValue $WeightUOM
     */
    protected $WeightUOM = null;

    /**
     * @var IntValue $Width
     */
    protected $Width = null;

    /**
     * @param boolean $Delete
     */
    public function __construct($Delete)
    {
      parent::__construct($Delete);
    }

    /**
     * @return BooleanValue
     */
    public function getActiveByDefault()
    {
      return $this->ActiveByDefault;
    }

    /**
     * @param BooleanValue $ActiveByDefault
     * @return ShippingBox
     */
    public function setActiveByDefault($ActiveByDefault)
    {
      $this->ActiveByDefault = $ActiveByDefault;
      return $this;
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
     * @return ShippingBox
     */
    public function setBoxID($BoxID)
    {
      $this->BoxID = $BoxID;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getBoxWeight()
    {
      return $this->BoxWeight;
    }

    /**
     * @param DecimalValue $BoxWeight
     * @return ShippingBox
     */
    public function setBoxWeight($BoxWeight)
    {
      $this->BoxWeight = $BoxWeight;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getCarriersPackage()
    {
      return $this->CarriersPackage;
    }

    /**
     * @param StringValue $CarriersPackage
     * @return ShippingBox
     */
    public function setCarriersPackage($CarriersPackage)
    {
      $this->CarriersPackage = $CarriersPackage;
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
     * @return ShippingBox
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return IntValue
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param IntValue $Height
     * @return ShippingBox
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

    /**
     * @return IntValue
     */
    public function getLength()
    {
      return $this->Length;
    }

    /**
     * @param IntValue $Length
     * @return ShippingBox
     */
    public function setLength($Length)
    {
      $this->Length = $Length;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getMaxVolume()
    {
      return $this->MaxVolume;
    }

    /**
     * @param DecimalValue $MaxVolume
     * @return ShippingBox
     */
    public function setMaxVolume($MaxVolume)
    {
      $this->MaxVolume = $MaxVolume;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getMaxWeight()
    {
      return $this->MaxWeight;
    }

    /**
     * @param DecimalValue $MaxWeight
     * @return ShippingBox
     */
    public function setMaxWeight($MaxWeight)
    {
      $this->MaxWeight = $MaxWeight;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getVolumeUOM()
    {
      return $this->VolumeUOM;
    }

    /**
     * @param StringValue $VolumeUOM
     * @return ShippingBox
     */
    public function setVolumeUOM($VolumeUOM)
    {
      $this->VolumeUOM = $VolumeUOM;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getWeightUOM()
    {
      return $this->WeightUOM;
    }

    /**
     * @param StringValue $WeightUOM
     * @return ShippingBox
     */
    public function setWeightUOM($WeightUOM)
    {
      $this->WeightUOM = $WeightUOM;
      return $this;
    }

    /**
     * @return IntValue
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param IntValue $Width
     * @return ShippingBox
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

}
