<?php

class DoubleSearch extends DoubleValue
{

    /**
     * @var ByteCondition $Condition
     */
    protected $Condition = null;

    /**
     * @var float $Value2
     */
    protected $Value2 = null;

    /**
     * @param ByteCondition $Condition
     */
    public function __construct($Condition)
    {
      parent::__construct();
      $this->Condition = $Condition;
    }

    /**
     * @return ByteCondition
     */
    public function getCondition()
    {
      return $this->Condition;
    }

    /**
     * @param ByteCondition $Condition
     * @return DoubleSearch
     */
    public function setCondition($Condition)
    {
      $this->Condition = $Condition;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue2()
    {
      return $this->Value2;
    }

    /**
     * @param float $Value2
     * @return DoubleSearch
     */
    public function setValue2($Value2)
    {
      $this->Value2 = $Value2;
      return $this;
    }

}
