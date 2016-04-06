<?php

class StockItemWarehouseDetail extends Entity
{

    /**
     * @var StringValue $DefaultIssueLocationID
     */
    protected $DefaultIssueLocationID = null;

    /**
     * @var StringValue $DefaultReceiptLocationID
     */
    protected $DefaultReceiptLocationID = null;

    /**
     * @var BooleanValue $IsDefault
     */
    protected $IsDefault = null;

    /**
     * @var DecimalValue $QtyOnHand
     */
    protected $QtyOnHand = null;

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
    public function getDefaultIssueLocationID()
    {
      return $this->DefaultIssueLocationID;
    }

    /**
     * @param StringValue $DefaultIssueLocationID
     * @return StockItemWarehouseDetail
     */
    public function setDefaultIssueLocationID($DefaultIssueLocationID)
    {
      $this->DefaultIssueLocationID = $DefaultIssueLocationID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getDefaultReceiptLocationID()
    {
      return $this->DefaultReceiptLocationID;
    }

    /**
     * @param StringValue $DefaultReceiptLocationID
     * @return StockItemWarehouseDetail
     */
    public function setDefaultReceiptLocationID($DefaultReceiptLocationID)
    {
      $this->DefaultReceiptLocationID = $DefaultReceiptLocationID;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getIsDefault()
    {
      return $this->IsDefault;
    }

    /**
     * @param BooleanValue $IsDefault
     * @return StockItemWarehouseDetail
     */
    public function setIsDefault($IsDefault)
    {
      $this->IsDefault = $IsDefault;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getQtyOnHand()
    {
      return $this->QtyOnHand;
    }

    /**
     * @param DecimalValue $QtyOnHand
     * @return StockItemWarehouseDetail
     */
    public function setQtyOnHand($QtyOnHand)
    {
      $this->QtyOnHand = $QtyOnHand;
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
     * @return StockItemWarehouseDetail
     */
    public function setWarehouseID($WarehouseID)
    {
      $this->WarehouseID = $WarehouseID;
      return $this;
    }

}
