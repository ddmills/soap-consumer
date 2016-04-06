<?php

class KitStockComponent extends Entity
{

    /**
     * @var BooleanValue $AllowComponentQtyVariance
     */
    protected $AllowComponentQtyVariance = null;

    /**
     * @var DecimalValue $ComponentQty
     */
    protected $ComponentQty = null;

    /**
     * @var DecimalValue $MaxComponentQty
     */
    protected $MaxComponentQty = null;

    /**
     * @var DecimalValue $MinComponentQty
     */
    protected $MinComponentQty = null;

    /**
     * @var StringValue $StockInventoryID
     */
    protected $StockInventoryID = null;

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
     * @return BooleanValue
     */
    public function getAllowComponentQtyVariance()
    {
      return $this->AllowComponentQtyVariance;
    }

    /**
     * @param BooleanValue $AllowComponentQtyVariance
     * @return KitStockComponent
     */
    public function setAllowComponentQtyVariance($AllowComponentQtyVariance)
    {
      $this->AllowComponentQtyVariance = $AllowComponentQtyVariance;
      return $this;
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
     * @return KitStockComponent
     */
    public function setComponentQty($ComponentQty)
    {
      $this->ComponentQty = $ComponentQty;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getMaxComponentQty()
    {
      return $this->MaxComponentQty;
    }

    /**
     * @param DecimalValue $MaxComponentQty
     * @return KitStockComponent
     */
    public function setMaxComponentQty($MaxComponentQty)
    {
      $this->MaxComponentQty = $MaxComponentQty;
      return $this;
    }

    /**
     * @return DecimalValue
     */
    public function getMinComponentQty()
    {
      return $this->MinComponentQty;
    }

    /**
     * @param DecimalValue $MinComponentQty
     * @return KitStockComponent
     */
    public function setMinComponentQty($MinComponentQty)
    {
      $this->MinComponentQty = $MinComponentQty;
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
     * @return KitStockComponent
     */
    public function setStockInventoryID($StockInventoryID)
    {
      $this->StockInventoryID = $StockInventoryID;
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
     * @return KitStockComponent
     */
    public function setUOM($UOM)
    {
      $this->UOM = $UOM;
      return $this;
    }

}
