<?php

class Attributes
{

    /**
     * @var ItemClassAtrribute $ItemClassAtrribute
     */
    protected $ItemClassAtrribute = null;

    /**
     * @param ItemClassAtrribute $ItemClassAtrribute
     */
    public function __construct($ItemClassAtrribute)
    {
      $this->ItemClassAtrribute = $ItemClassAtrribute;
    }

    /**
     * @return ItemClassAtrribute
     */
    public function getItemClassAtrribute()
    {
      return $this->ItemClassAtrribute;
    }

    /**
     * @param ItemClassAtrribute $ItemClassAtrribute
     * @return Attributes
     */
    public function setItemClassAtrribute($ItemClassAtrribute)
    {
      $this->ItemClassAtrribute = $ItemClassAtrribute;
      return $this;
    }

}
