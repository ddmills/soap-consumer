<?php

class ItemClass extends Entity
{

    /**
     * @var Attributes $Attributes
     */
    protected $Attributes = null;

    /**
     * @var StringValue $ClassID
     */
    protected $ClassID = null;

    /**
     * @var StringValue $DefaultWarehouseID
     */
    protected $DefaultWarehouseID = null;

    /**
     * @var StringValue $Description
     */
    protected $Description = null;

    /**
     * @var StringValue $ItemType
     */
    protected $ItemType = null;

    /**
     * @var StringValue $LotSerialClass
     */
    protected $LotSerialClass = null;

    /**
     * @var StringValue $PostingClass
     */
    protected $PostingClass = null;

    /**
     * @var StringValue $PriceClass
     */
    protected $PriceClass = null;

    /**
     * @var BooleanValue $StockItem
     */
    protected $StockItem = null;

    /**
     * @var StringValue $TaxCategoryID
     */
    protected $TaxCategoryID = null;

    /**
     * @var StringValue $ValuationMethod
     */
    protected $ValuationMethod = null;

    /**
     * @param boolean $Delete
     */
    public function __construct($Delete)
    {
      parent::__construct($Delete);
    }

    /**
     * @return Attributes
     */
    public function getAttributes()
    {
      return $this->Attributes;
    }

    /**
     * @param Attributes $Attributes
     * @return ItemClass
     */
    public function setAttributes($Attributes)
    {
      $this->Attributes = $Attributes;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getClassID()
    {
      return $this->ClassID;
    }

    /**
     * @param StringValue $ClassID
     * @return ItemClass
     */
    public function setClassID($ClassID)
    {
      $this->ClassID = $ClassID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getDefaultWarehouseID()
    {
      return $this->DefaultWarehouseID;
    }

    /**
     * @param StringValue $DefaultWarehouseID
     * @return ItemClass
     */
    public function setDefaultWarehouseID($DefaultWarehouseID)
    {
      $this->DefaultWarehouseID = $DefaultWarehouseID;
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
     * @return ItemClass
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getItemType()
    {
      return $this->ItemType;
    }

    /**
     * @param StringValue $ItemType
     * @return ItemClass
     */
    public function setItemType($ItemType)
    {
      $this->ItemType = $ItemType;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getLotSerialClass()
    {
      return $this->LotSerialClass;
    }

    /**
     * @param StringValue $LotSerialClass
     * @return ItemClass
     */
    public function setLotSerialClass($LotSerialClass)
    {
      $this->LotSerialClass = $LotSerialClass;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPostingClass()
    {
      return $this->PostingClass;
    }

    /**
     * @param StringValue $PostingClass
     * @return ItemClass
     */
    public function setPostingClass($PostingClass)
    {
      $this->PostingClass = $PostingClass;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getPriceClass()
    {
      return $this->PriceClass;
    }

    /**
     * @param StringValue $PriceClass
     * @return ItemClass
     */
    public function setPriceClass($PriceClass)
    {
      $this->PriceClass = $PriceClass;
      return $this;
    }

    /**
     * @return BooleanValue
     */
    public function getStockItem()
    {
      return $this->StockItem;
    }

    /**
     * @param BooleanValue $StockItem
     * @return ItemClass
     */
    public function setStockItem($StockItem)
    {
      $this->StockItem = $StockItem;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getTaxCategoryID()
    {
      return $this->TaxCategoryID;
    }

    /**
     * @param StringValue $TaxCategoryID
     * @return ItemClass
     */
    public function setTaxCategoryID($TaxCategoryID)
    {
      $this->TaxCategoryID = $TaxCategoryID;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getValuationMethod()
    {
      return $this->ValuationMethod;
    }

    /**
     * @param StringValue $ValuationMethod
     * @return ItemClass
     */
    public function setValuationMethod($ValuationMethod)
    {
      $this->ValuationMethod = $ValuationMethod;
      return $this;
    }

}
