<?php

class InventoryAllocationInquiry extends Entity
{

    /**
     * @var StringValue $InventoryID
     */
    protected $InventoryID = null;

    /**
     * @var DecimalValue $OnHand
     */
    protected $OnHand = null;

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
     * @return StringValue
     */
    public function getInventoryID()
    {
      return $this->InventoryID;
    }

    /**
     * @param StringValue $InventoryID
     * @return InventoryAllocationInquiry
     */
    public function setInventoryID($InventoryID)
    {
      $this->InventoryID = $InventoryID;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getOnHand()
    {
      return $this->OnHand;
    }

    /**
     * @param DecimalValue $OnHand
     * @return InventoryAllocationInquiry
     */
    public function setOnHand($OnHand)
    {
      $this->OnHand = $OnHand;
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
     * @return InventoryAllocationInquiry
     */
    public function setWarehouseID($WarehouseID)
    {
      $this->WarehouseID = $WarehouseID;
      return $this;
    }

}
