<?php

class KitAssemblyStockComponent extends Entity
{

    /**
     * @var DecimalValue $ComponentQty
     */
    protected $ComponentQty = null;

    /**
     * @var IntValue $LineNbr
     */
    protected $LineNbr = null;

    /**
     * @var StringValue $LocationID
     */
    protected $LocationID = null;

    /**
     * @var DecimalValue $Qty
     */
    protected $Qty = null;

    /**
     * @var StringValue $ReasonCode
     */
    protected $ReasonCode = null;

    /**
     * @var StringValue $StockInventoryID
     */
    protected $StockInventoryID = null;

    /**
     * @var StringValue $Subitem
     */
    protected $Subitem = null;

    /**
     * @var DecimalValue $UnitCost
     */
    protected $UnitCost = null;

    /**
     * @var StringValue $UOM
     */
    protected $UOM = null;

    /**
     * @param boolean $Delete
     */
    public function __construct($Delete)
    {
      parent::__construct($Delete);
    }

    /**
     * @return DecimalValue
     */
    public function getComponentQty()
    {
      return $this->ComponentQty;
    }

    /**
     * @param DecimalValue $ComponentQty
     * @return KitAssemblyStockComponent
     */
    public function setComponentQty($ComponentQty)
    {
      $this->ComponentQty = $ComponentQty;
      return $this;
    }

    /**
     * @return IntValue
     */
    public function getLineNbr()
    {
      return $this->LineNbr;
    }

    /**
     * @param IntValue $LineNbr
     * @return KitAssemblyStockComponent
     */
    public function setLineNbr($LineNbr)
    {
      $this->LineNbr = $LineNbr;
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
     * @return KitAssemblyStockComponent
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getQty()
    {
      return $this->Qty;
    }

    /**
     * @param DecimalValue $Qty
     * @return KitAssemblyStockComponent
     */
    public function setQty($Qty)
    {
      $this->Qty = $Qty;
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
     * @return KitAssemblyStockComponent
     */
    public function setReasonCode($ReasonCode)
    {
      $this->ReasonCode = $ReasonCode;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getStockInventoryID()
    {
      return $this->StockInventoryID;
    }

    /**
     * @param StringValue $StockInventoryID
     * @return KitAssemblyStockComponent
     */
    public function setStockInventoryID($StockInventoryID)
    {
      $this->StockInventoryID = $StockInventoryID;
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
     * @return KitAssemblyStockComponent
     */
    public function setSubitem($Subitem)
    {
      $this->Subitem = $Subitem;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getUnitCost()
    {
      return $this->UnitCost;
    }

    /**
     * @param DecimalValue $UnitCost
     * @return KitAssemblyStockComponent
     */
    public function setUnitCost($UnitCost)
    {
      $this->UnitCost = $UnitCost;
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
     * @return KitAssemblyStockComponent
     */
    public function setUOM($UOM)
    {
      $this->UOM = $UOM;
      return $this;
    }

}
