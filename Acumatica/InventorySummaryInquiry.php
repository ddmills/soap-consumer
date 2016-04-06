<?php

class InventorySummaryInquiry extends Entity
{

    /**
     * @var BooleanValue $ExpandByLotSerialNumber
     */
    protected $ExpandByLotSerialNumber = null;

    /**
     * @var StringValue $InventoryID
     */
    protected $InventoryID = null;

    /**
     * @var StringValue $LocationID
     */
    protected $LocationID = null;

    /**
     * @var Results $Results
     */
    protected $Results = null;

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
     * @return BooleanValue
     */
    public function getExpandByLotSerialNumber()
    {
      return $this->ExpandByLotSerialNumber;
    }

    /**
     * @param BooleanValue $ExpandByLotSerialNumber
     * @return InventorySummaryInquiry
     */
    public function setExpandByLotSerialNumber($ExpandByLotSerialNumber)
    {
      $this->ExpandByLotSerialNumber = $ExpandByLotSerialNumber;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getInventoryID()
    {
      return $this->InventoryID;
    }

    /**
     * @param StringValue $InventoryID
     * @return InventorySummaryInquiry
     */
    public function setInventoryID($InventoryID)
    {
      $this->InventoryID = $InventoryID;
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
     * @return InventorySummaryInquiry
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

    /**
     * @return Results
     */
    public function getResults()
    {
      return $this->Results;
    }

    /**
     * @param Results $Results
     * @return InventorySummaryInquiry
     */
    public function setResults($Results)
    {
      $this->Results = $Results;
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
     * @return InventorySummaryInquiry
     */
    public function setWarehouseID($WarehouseID)
    {
      $this->WarehouseID = $WarehouseID;
      return $this;
    }

}
