<?php

class BooleanSearch extends BooleanValue
{

    /**
     * @var BooleanCondition $Condition
     */
    protected $Condition = null;

    /**
     * @var boolean $Value2
     */
    protected $Value2 = null;

    /**
     * @param BooleanCondition $Condition
     */
    public function __construct($Condition)
    {
      parent::__construct();
      $this->Condition = $Condition;
    }

    /**
     * @return BooleanCondition
     */
    public function getCondition()
    {
      return $this->Condition;
    }

    /**
     * @param BooleanCondition $Condition
     * @return BooleanSearch
     */
    public function setCondition($Condition)
    {
      $this->Condition = $Condition;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValue2()
    {
      return $this->Value2;
    }

    /**
     * @param boolean $Value2
     * @return BooleanSearch
     */
    public function setValue2($Value2)
    {
      $this->Value2 = $Value2;
      return $this;
    }

}
