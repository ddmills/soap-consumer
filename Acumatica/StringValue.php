<?php

class StringValue
{

    /**
     * @var string $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return StringValue
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
