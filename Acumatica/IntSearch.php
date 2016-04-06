<?php

class IntSearch extends IntValue
{

    /**
     * @var IntCondition $Condition
     */
    protected $Condition = null;

    /**
     * @var int $Value2
     */
    protected $Value2 = null;

    /**
     * @param IntCondition $Condition
     */
    public function __construct($Condition)
    {
      parent::__construct();
      $this->Condition = $Condition;
    }

    /**
     * @return IntCondition
     */
    public function getCondition()
    {
      return $this->Condition;
    }

    /**
     * @param IntCondition $Condition
     * @return IntSearch
     */
    public function setCondition($Condition)
    {
      $this->Condition = $Condition;
      return $this;
    }

    /**
     * @return int
     */
    public function getValue2()
    {
      return $this->Value2;
    }

    /**
     * @param int $Value2
     * @return IntSearch
     */
    public function setValue2($Value2)
    {
      $this->Value2 = $Value2;
      return $this;
    }

}
