<?php

class StringSearch extends StringValue
{

    /**
     * @var StringCondition $Condition
     */
    protected $Condition = null;

    /**
     * @var string $Value2
     */
    protected $Value2 = null;

    /**
     * @param StringCondition $Condition
     */
    public function __construct($Condition)
    {
      parent::__construct();
      $this->Condition = $Condition;
    }

    /**
     * @return StringCondition
     */
    public function getCondition()
    {
      return $this->Condition;
    }

    /**
     * @param StringCondition $Condition
     * @return StringSearch
     */
    public function setCondition($Condition)
    {
      $this->Condition = $Condition;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue2()
    {
      return $this->Value2;
    }

    /**
     * @param string $Value2
     * @return StringSearch
     */
    public function setValue2($Value2)
    {
      $this->Value2 = $Value2;
      return $this;
    }

}
