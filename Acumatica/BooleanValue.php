<?php

class BooleanValue
{

    /**
     * @var boolean $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param boolean $Value
     * @return BooleanValue
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
