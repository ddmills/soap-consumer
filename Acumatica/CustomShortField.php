<?php

class CustomShortField extends CustomField
{

    /**
     * @var ShortValue $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ShortValue
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param ShortValue $Value
     * @return CustomShortField
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
