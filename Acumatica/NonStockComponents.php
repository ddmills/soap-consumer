<?php

class NonStockComponents
{

    /**
     * @var KitAssemblyNonStockComponent $KitAssemblyNonStockComponent
     */
    protected $KitAssemblyNonStockComponent = null;

    /**
     * @param KitAssemblyNonStockComponent $KitAssemblyNonStockComponent
     */
    public function __construct($KitAssemblyNonStockComponent)
    {
      $this->KitAssemblyNonStockComponent = $KitAssemblyNonStockComponent;
    }

    /**
     * @return KitAssemblyNonStockComponent
     */
    public function getKitAssemblyNonStockComponent()
    {
      return $this->KitAssemblyNonStockComponent;
    }

    /**
     * @param KitAssemblyNonStockComponent $KitAssemblyNonStockComponent
     * @return NonStockComponents
     */
    public function setKitAssemblyNonStockComponent($KitAssemblyNonStockComponent)
    {
      $this->KitAssemblyNonStockComponent = $KitAssemblyNonStockComponent;
      return $this;
    }

}
