<?php

class CustomLongField extends CustomField
{

    /**
     * @var LongValue $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return LongValue
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param LongValue $Value
     * @return CustomLongField
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
