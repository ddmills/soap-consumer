<?php

class Allocations
{

    /**
     * @var KitAssemblyAllocation $KitAssemblyAllocation
     */
    protected $KitAssemblyAllocation = null;

    /**
     * @param KitAssemblyAllocation $KitAssemblyAllocation
     */
    public function __construct($KitAssemblyAllocation)
    {
      $this->KitAssemblyAllocation = $KitAssemblyAllocation;
    }

    /**
     * @return KitAssemblyAllocation
     */
    public function getKitAssemblyAllocation()
    {
      return $this->KitAssemblyAllocation;
    }

    /**
     * @param KitAssemblyAllocation $KitAssemblyAllocation
     * @return Allocations
     */
    public function setKitAssemblyAllocation($KitAssemblyAllocation)
    {
      $this->KitAssemblyAllocation = $KitAssemblyAllocation;
      return $this;
    }

}
