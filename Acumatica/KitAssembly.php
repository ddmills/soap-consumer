<?php

class KitAssembly extends Entity
{

    /**
     * @var Allocations $Allocations
     */
    protected $Allocations = null;

    /**
     * @var DateTimeValue $Date
     */
    protected $Date = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var BooleanValue $Hold
     */
    protected $Hold = null;

    /**
     * @var StringValue $KitInventoryID
     */
    protected $KitInventoryID = null;

    /**
     * @var StringValue $LocationID
     */
    protected $LocationID = null;

    /**
     * @var NonStockComponents $NonStockComponents
     */
    protected $NonStockComponents = null;

    /**
     * @var StringValue $PostPeriod
     */
    protected $PostPeriod = null;

    /**
     * @var DecimalValue $Quantity
     */
    protected $Quantity = null;

    /**
     * @var StringValue $ReasonCode
     */
    protected $ReasonCode = null;

    /**
     * @var StringValue $ReferenceNbr
     */
    protected $ReferenceNbr = null;

    /**
     * @var StringValue $Revision
     */
    protected $Revision = null;

    /**
     * @var StringValue $Status
     */
    protected $Status = null;

    /**
     * @var StockComponents $StockComponents
     */
    protected $StockComponents = null;

    /**
     * @var StringValue $Subitem
     */
    protected $Subitem = null;

    /**
     * @var StringValue $Type
     */
    protected $Type = null;

    /**
     * @var StringValue $WarehouseID
     */
    protected $WarehouseID = null;

    /**
     * @param boolean $Delete
     */
    public function __construct($Delete)
    {
      parent::__construct($Delete);
    }

    /**
     * @return Allocations
     */
    public function getAllocations()
    {
      return $this->Allocations;
    }

    /**
     * @param Allocations $Allocations
     * @return KitAssembly
     */
    public function setAllocations($Allocations)
    {
      $this->Allocations = $Allocations;
      return $this;
    }

    /**
     * @return DateTimeValue
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param DateTimeValue $Date
     * @return KitAssembly
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
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
     * @return KitAssembly
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getHold()
    {
      return $this->Hold;
    }

    /**
     * @param BooleanValue $Hold
     * @return KitAssembly
     */
    public function setHold($Hold)
    {
      $this->Hold = $Hold;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getKitInventoryID()
    {
      return $this->KitInventoryID;
    }

    /**
     * @param StringValue $KitInventoryID
     * @return KitAssembly
     */
    public function setKitInventoryID($KitInventoryID)
    {
      $this->KitInventoryID = $KitInventoryID;
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
     * @return KitAssembly
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

    /**
     * @return NonStockComponents
     */
    public function getNonStockComponents()
    {
      return $this->NonStockComponents;
    }

    /**
     * @param NonStockComponents $NonStockComponents
     * @return KitAssembly
     */
    public function setNonStockComponents($NonStockComponents)
    {
      $this->NonStockComponents = $NonStockComponents;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPostPeriod()
    {
      return $this->PostPeriod;
    }

    /**
     * @param StringValue $PostPeriod
     * @return KitAssembly
     */
    public function setPostPeriod($PostPeriod)
    {
      $this->PostPeriod = $PostPeriod;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param DecimalValue $Quantity
     * @return KitAssembly
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getReasonCode()
    {
      return $this->ReasonCode;
    }

    /**
     * @param StringValue $ReasonCode
     * @return KitAssembly
     */
    public function setReasonCode($ReasonCode)
    {
      $this->ReasonCode = $ReasonCode;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getReferenceNbr()
    {
      return $this->ReferenceNbr;
    }

    /**
     * @param StringValue $ReferenceNbr
     * @return KitAssembly
     */
    public function setReferenceNbr($ReferenceNbr)
    {
      $this->ReferenceNbr = $ReferenceNbr;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getRevision()
    {
      return $this->Revision;
    }

    /**
     * @param StringValue $Revision
     * @return KitAssembly
     */
    public function setRevision($Revision)
    {
      $this->Revision = $Revision;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param StringValue $Status
     * @return KitAssembly
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return StockComponents
     */
    public function getStockComponents()
    {
      return $this->StockComponents;
    }

    /**
     * @param StockComponents $StockComponents
     * @return KitAssembly
     */
    public function setStockComponents($StockComponents)
    {
      $this->StockComponents = $StockComponents;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getSubitem()
    {
      return $this->Subitem;
    }

    /**
     * @param StringValue $Subitem
     * @return KitAssembly
     */
    public function setSubitem($Subitem)
    {
      $this->Subitem = $Subitem;
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
     * @return KitAssembly
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getWarehouseID()
    {
      return $this->WarehouseID;
    }

    /**
     * @param StringValue $WarehouseID
     * @return KitAssembly
     */
    public function setWarehouseID($WarehouseID)
    {
      $this->WarehouseID = $WarehouseID;
      return $this;
    }

}
