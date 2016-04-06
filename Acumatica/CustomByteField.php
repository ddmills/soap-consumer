<?php

class CustomByteField extends CustomField
{

    /**
     * @var ByteValue $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ByteValue
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param ByteValue $Value
     * @return CustomByteField
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
