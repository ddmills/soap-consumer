<?php

class InventoryItemUOMConversion extends Entity
{

    /**
     * @var DecimalValue $ConversionFactor
     */
    protected $ConversionFactor = null;

    /**
     * @var StringValue $FromUOM
     */
    protected $FromUOM = null;

    /**
     * @var StringValue $MultiplyDivide
     */
    protected $MultiplyDivide = null;

    /**
     * @var StringValue $ToUOM
     */
    protected $ToUOM = null;

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
    public function getConversionFactor()
    {
      return $this->ConversionFactor;
    }

    /**
     * @param DecimalValue $ConversionFactor
     * @return InventoryItemUOMConversion
     */
    public function setConversionFactor($ConversionFactor)
    {
      $this->ConversionFactor = $ConversionFactor;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getFromUOM()
    {
      return $this->FromUOM;
    }

    /**
     * @param StringValue $FromUOM
     * @return InventoryItemUOMConversion
     */
    public function setFromUOM($FromUOM)
    {
      $this->FromUOM = $FromUOM;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getMultiplyDivide()
    {
      return $this->MultiplyDivide;
    }

    /**
     * @param StringValue $MultiplyDivide
     * @return InventoryItemUOMConversion
     */
    public function setMultiplyDivide($MultiplyDivide)
    {
      $this->MultiplyDivide = $MultiplyDivide;
      return $this;
    }

    /**
     * @return StringValue
     */
    public function getToUOM()
    {
      return $this->ToUOM;
    }

    /**
     * @param StringValue $ToUOM
     * @return InventoryItemUOMConversion
     */
    public function setToUOM($ToUOM)
    {
      $this->ToUOM = $ToUOM;
      return $this;
    }

}
