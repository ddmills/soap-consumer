<?php

class StockComponents
{

    /**
     * @var KitAssemblyStockComponent $KitAssemblyStockComponent
     */
    protected $KitAssemblyStockComponent = null;

    /**
     * @param KitAssemblyStockComponent $KitAssemblyStockComponent
     */
    public function __construct($KitAssemblyStockComponent)
    {
      $this->KitAssemblyStockComponent = $KitAssemblyStockComponent;
    }

    /**
     * @return KitAssemblyStockComponent
     */
    public function getKitAssemblyStockComponent()
    {
      return $this->KitAssemblyStockComponent;
    }

    /**
     * @param KitAssemblyStockComponent $KitAssemblyStockComponent
     * @return StockComponents
     */
    public function setKitAssemblyStockComponent($KitAssemblyStockComponent)
    {
      $this->KitAssemblyStockComponent = $KitAssemblyStockComponent;
      return $this;
    }

}
