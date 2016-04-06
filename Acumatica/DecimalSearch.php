<?php

class DecimalSearch extends DecimalValue
{

    /**
     * @var DecimalCondition $Condition
     */
    protected $Condition = null;

    /**
     * @var float $Value2
     */
    protected $Value2 = null;

    /**
     * @param DecimalCondition $Condition
     */
    public function __construct($Condition)
    {
      parent::__construct();
      $this->Condition = $Condition;
    }

    /**
     * @return DecimalCondition
     */
    public function getCondition()
    {
      return $this->Condition;
    }

    /**
     * @param DecimalCondition $Condition
     * @return DecimalSearch
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
     * @return DecimalSearch
     */
    public function setValue2($Value2)
    {
      $this->Value2 = $Value2;
      return $this;
    }

}
