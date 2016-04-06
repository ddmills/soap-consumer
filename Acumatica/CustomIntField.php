<?php

class CustomIntField extends CustomField
{

    /**
     * @var IntValue $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return IntValue
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param IntValue $Value
     * @return CustomIntField
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
