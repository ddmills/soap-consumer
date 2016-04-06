<?php

class LongSearch extends LongValue
{

    /**
     * @var LongCondition $Condition
     */
    protected $Condition = null;

    /**
     * @var int $Value2
     */
    protected $Value2 = null;

    /**
     * @param LongCondition $Condition
     */
    public function __construct($Condition)
    {
      parent::__construct();
      $this->Condition = $Condition;
    }

    /**
     * @return LongCondition
     */
    public function getCondition()
    {
      return $this->Condition;
    }

    /**
     * @param LongCondition $Condition
     * @return LongSearch
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
     * @return LongSearch
     */
    public function setValue2($Value2)
    {
      $this->Value2 = $Value2;
      return $this;
    }

}
