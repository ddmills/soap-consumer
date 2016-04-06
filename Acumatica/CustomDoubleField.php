<?php

class CustomDoubleField extends CustomField
{

    /**
     * @var DoubleValue $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return DoubleValue
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param DoubleValue $Value
     * @return CustomDoubleField
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
