<?php

class CustomBooleanField extends CustomField
{

    /**
     * @var BooleanValue $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return BooleanValue
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param BooleanValue $Value
     * @return CustomBooleanField
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
