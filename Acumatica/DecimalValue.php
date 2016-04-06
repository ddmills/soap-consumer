<?php

class DecimalValue
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
     * @return DecimalValue
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
