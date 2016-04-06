<?php

class CustomStringField extends CustomField
{

    /**
     * @var StringValue $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return StringValue
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param StringValue $Value
     * @return CustomStringField
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
