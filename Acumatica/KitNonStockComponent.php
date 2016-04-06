<?php

class KitNonStockComponent extends Entity
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
     * @var StringValue $NonStockInventoryID
     */
    protected $NonStockInventoryID = null;

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
     * @return KitNonStockComponent
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
     * @return KitNonStockComponent
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
     * @return KitNonStockComponent
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
     * @return KitNonStockComponent
     */
    public function setMinComponentQty($MinComponentQty)
    {
      $this->MinComponentQty = $MinComponentQty;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getNonStockInventoryID()
    {
      return $this->NonStockInventoryID;
    }

    /**
     * @param StringValue $NonStockInventoryID
     * @return KitNonStockComponent
     */
    public function setNonStockInventoryID($NonStockInventoryID)
    {
      $this->NonStockInventoryID = $NonStockInventoryID;
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
     * @return KitNonStockComponent
     */
    public function setUOM($UOM)
    {
      $this->UOM = $UOM;
      return $this;
    }

}
