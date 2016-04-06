<?php

class WarehouseLocation extends Entity
{

    /**
     * @var BooleanValue $Active
     */
    protected $Active = null;

    /**
     * @var BooleanValue $AssemblyAllowed
     */
    protected $AssemblyAllowed = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var StringValue $LocationID
     */
    protected $LocationID = null;

    /**
     * @var ShortValue $PickPriority
     */
    protected $PickPriority = null;

    /**
     * @var BooleanValue $ReceiptsAllowed
     */
    protected $ReceiptsAllowed = null;

    /**
     * @var BooleanValue $SalesAllowed
     */
    protected $SalesAllowed = null;

    /**
     * @var BooleanValue $TransfersAllowed
     */
    protected $TransfersAllowed = null;

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
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param BooleanValue $Active
     * @return WarehouseLocation
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getAssemblyAllowed()
    {
      return $this->AssemblyAllowed;
    }

    /**
     * @param BooleanValue $AssemblyAllowed
     * @return WarehouseLocation
     */
    public function setAssemblyAllowed($AssemblyAllowed)
    {
      $this->AssemblyAllowed = $AssemblyAllowed;
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
     * @return WarehouseLocation
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getLocationID()
    {
      return $this->LocationID;
    }

    /**
     * @param StringValue $LocationID
     * @return WarehouseLocation
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

    /**
     * @return ShortValue
     */
    public function getPickPriority()
    {
      return $this->PickPriority;
    }

    /**
     * @param ShortValue $PickPriority
     * @return WarehouseLocation
     */
    public function setPickPriority($PickPriority)
    {
      $this->PickPriority = $PickPriority;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getReceiptsAllowed()
    {
      return $this->ReceiptsAllowed;
    }

    /**
     * @param BooleanValue $ReceiptsAllowed
     * @return WarehouseLocation
     */
    public function setReceiptsAllowed($ReceiptsAllowed)
    {
      $this->ReceiptsAllowed = $ReceiptsAllowed;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getSalesAllowed()
    {
      return $this->SalesAllowed;
    }

    /**
     * @param BooleanValue $SalesAllowed
     * @return WarehouseLocation
     */
    public function setSalesAllowed($SalesAllowed)
    {
      $this->SalesAllowed = $SalesAllowed;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getTransfersAllowed()
    {
      return $this->TransfersAllowed;
    }

    /**
     * @param BooleanValue $TransfersAllowed
     * @return WarehouseLocation
     */
    public function setTransfersAllowed($TransfersAllowed)
    {
      $this->TransfersAllowed = $TransfersAllowed;
      return $this;
    }

}
