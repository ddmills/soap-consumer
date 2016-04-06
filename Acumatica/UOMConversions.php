<?php

class UOMConversions
{

    /**
     * @var InventoryItemUOMConversion $InventoryItemUOMConversion
     */
    protected $InventoryItemUOMConversion = null;

    /**
     * @param InventoryItemUOMConversion $InventoryItemUOMConversion
     */
    public function __construct($InventoryItemUOMConversion)
    {
      $this->InventoryItemUOMConversion = $InventoryItemUOMConversion;
    }

    /**
     * @return InventoryItemUOMConversion
     */
    public function getInventoryItemUOMConversion()
    {
      return $this->InventoryItemUOMConversion;
    }

    /**
     * @param InventoryItemUOMConversion $InventoryItemUOMConversion
     * @return UOMConversions
     */
    public function setInventoryItemUOMConversion($InventoryItemUOMConversion)
    {
      $this->InventoryItemUOMConversion = $InventoryItemUOMConversion;
      return $this;
    }

}
