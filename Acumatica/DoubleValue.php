<?php

class DoubleValue
{

    /**
     * @var float $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param float $Value
     * @return DoubleValue
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
