<?php

class CustomDecimalField extends CustomField
{

    /**
     * @var DecimalValue $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return DecimalValue
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param DecimalValue $Value
     * @return CustomDecimalField
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
