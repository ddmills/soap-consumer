<?php

class KitSpecification extends Entity
{

    /**
     * @var BooleanValue $Active
     */
    protected $Active = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var StringValue $KitInventoryID
     */
    protected $KitInventoryID = null;

    /**
     * @var BooleanValue $NonStock
     */
    protected $NonStock = null;

    /**
     * @var NonStockComponents $NonStockComponents
     */
    protected $NonStockComponents = null;

    /**
     * @var StringValue $Revision
     */
    protected $Revision = null;

    /**
     * @var StockComponents $StockComponents
     */
    protected $StockComponents = null;

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
     * @return KitSpecification
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
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
     * @return KitSpecification
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return KitSpecification
     */
    public function setKitInventoryID($KitInventoryID)
    {
      $this->KitInventoryID = $KitInventoryID;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getNonStock()
    {
      return $this->NonStock;
    }

    /**
     * @param BooleanValue $NonStock
     * @return KitSpecification
     */
    public function setNonStock($NonStock)
    {
      $this->NonStock = $NonStock;
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
     * @return KitSpecification
     */
    public function setNonStockComponents($NonStockComponents)
    {
      $this->NonStockComponents = $NonStockComponents;
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
     * @return KitSpecification
     */
    public function setRevision($Revision)
    {
      $this->Revision = $Revision;
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
     * @return KitSpecification
     */
    public function setStockComponents($StockComponents)
    {
      $this->StockComponents = $StockComponents;
      return $this;
    }

}
