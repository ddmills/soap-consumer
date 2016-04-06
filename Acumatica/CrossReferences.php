<?php

class CrossReferences
{

    /**
     * @var InventoryItemCrossReference $InventoryItemCrossReference
     */
    protected $InventoryItemCrossReference = null;

    /**
     * @param InventoryItemCrossReference $InventoryItemCrossReference
     */
    public function __construct($InventoryItemCrossReference)
    {
      $this->InventoryItemCrossReference = $InventoryItemCrossReference;
    }

    /**
     * @return InventoryItemCrossReference
     */
    public function getInventoryItemCrossReference()
    {
      return $this->InventoryItemCrossReference;
    }

    /**
     * @param InventoryItemCrossReference $InventoryItemCrossReference
     * @return CrossReferences
     */
    public function setInventoryItemCrossReference($InventoryItemCrossReference)
    {
      $this->InventoryItemCrossReference = $InventoryItemCrossReference;
      return $this;
    }

}
