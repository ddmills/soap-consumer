<?php

class ShortSearch extends ShortValue
{

    /**
     * @var ShortCondition $Condition
     */
    protected $Condition = null;

    /**
     * @var int $Value2
     */
    protected $Value2 = null;

    /**
     * @param ShortCondition $Condition
     * @param int $Value2
     */
    public function __construct($Condition, $Value2)
    {
      parent::__construct();
      $this->Condition = $Condition;
      $this->Value2 = $Value2;
    }

    /**
     * @return ShortCondition
     */
    public function getCondition()
    {
      return $this->Condition;
    }

    /**
     * @param ShortCondition $Condition
     * @return ShortSearch
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
     * @return ShortSearch
     */
    public function setValue2($Value2)
    {
      $this->Value2 = $Value2;
      return $this;
    }

}
