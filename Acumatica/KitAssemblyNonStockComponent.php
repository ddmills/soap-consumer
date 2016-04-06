<?php

class KitAssemblyNonStockComponent extends Entity
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
     * @var StringValue $NonStockInventoryID
     */
    protected $NonStockInventoryID = null;

    /**
     * @var DecimalValue $Qty
     */
    protected $Qty = null;

    /**
     * @var StringValue $ReasonCode
     */
    protected $ReasonCode = null;

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
     * @return KitAssemblyNonStockComponent
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
     * @return KitAssemblyNonStockComponent
     */
    public function setLineNbr($LineNbr)
    {
      $this->LineNbr = $LineNbr;
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
     * @return KitAssemblyNonStockComponent
     */
    public function setNonStockInventoryID($NonStockInventoryID)
    {
      $this->NonStockInventoryID = $NonStockInventoryID;
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
     * @return KitAssemblyNonStockComponent
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
     * @return KitAssemblyNonStockComponent
     */
    public function setReasonCode($ReasonCode)
    {
      $this->ReasonCode = $ReasonCode;
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
     * @return KitAssemblyNonStockComponent
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
     * @return KitAssemblyNonStockComponent
     */
    public function setUOM($UOM)
    {
      $this->UOM = $UOM;
      return $this;
    }

}
