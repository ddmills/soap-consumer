<?php

class ByteValue
{

    /**
     * @var int $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param int $Value
     * @return ByteValue
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
