<?php

class GuidValue
{

    /**
     * @var guid $Value
     */
    protected $Value = null;

    /**
     * @param guid $Value
     */
    public function __construct($Value)
    {
      $this->Value = $Value;
    }

    /**
     * @return guid
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param guid $Value
     * @return GuidValue
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
