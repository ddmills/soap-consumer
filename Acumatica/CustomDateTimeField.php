<?php

class CustomDateTimeField extends CustomField
{

    /**
     * @var DateTimeValue $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return DateTimeValue
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param DateTimeValue $Value
     * @return CustomDateTimeField
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
